<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketFormRequest;
use App\Models\Admin\Building;
use App\Models\Admin\People;
use App\Models\Ticket;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminNewTicket;
use App\Mail\NewTicket;

class TicketController extends Controller
{
    public function index()
    {
        return view('reception.new');
    }
    public function send(TicketFormRequest $message)
    {
        $temp = Building::where('ls', $message->Input('ls'))->first();
        if ($temp == null) { // Создаем новый объект
            $this->createBuilding($message);
        }
        $temp = People::where('email', $message->Input('email'))->first();
        if ($temp == null) { // Создаем новую персону
            $this->createPerson($message);
        }

        $Building = Building::where('ls', $message->Input('ls'))->first();
        $Person = People::where('email', $message->Input('email'))->first();
        $Building->people()->syncWithoutDetaching($Person->id);

        $Ticket = new Ticket();
        $Ticket->people_id = $Person->id;
        $Ticket->building_id = $Building->id;
        $Ticket->title = $message->Input('title');
        $Ticket->message = $message->Input('message');
        $Ticket->source = 1;
        $Ticket->type = 0;
        $Ticket->status_id = 1;
        $Ticket->save();

        $toEmail = "arttema2010@yandex.ru";
        $moreUsers = "9268188@gmail.com";
        Mail::to($toEmail)
            ->cc($moreUsers)
            ->send(new AdminNewTicket($message));

        Mail::to($Person->email)
            ->send(new NewTicket($message));

        return view('reception.success');
    }

    public function show($id)
    {
        $Ticket = Ticket::find($id);
        return view('reception.show', ['Ticket' => $Ticket]);
    }

    public function createBuilding($message)
    {
        $Building = new Building();
        $Building->title = 'Новый объект';
        $Building->ls = $message->Input('ls');
        $Building->address = $message->Input('address');
        $Building->save();
    }

    public function createPerson($message)
    {
        $Person = new People();
        $Person->first_name = $message->Input('first_name');
        $Person->last_name = $message->Input('last_name');
        $Person->patronymic = $message->Input('patronymic');
        $Person->phone = $message->Input('phone');
        $Person->email = $message->Input('email');
        $Person->save();
    }
}
