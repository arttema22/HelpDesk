<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TicketFormRequest;
use App\Models\Admin\People;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewTicket;
use Symfony\Component\Console\Input\Input;
use App\Models\Admin\Appeal;

class ReceptionController extends Controller
{
    public function index()
    {
        return view('reception.new');
    }

    public function send(TicketFormRequest $message)
    {
        $test = People::where('ls', $message->Input('ls'))->first();
        if ($test == null) {
            // Создаем новую персону
            $Person = new People();
            $Person->first_name = $message->Input('first_name');
            $Person->last_name = $message->Input('last_name');
            $Person->patronymic = $message->Input('patronymic');
            $Person->ls = $message->Input('ls');
            $Person->address = $message->Input('address');
            $Person->phone = $message->Input('phone');
            $Person->email = $message->Input('email');
            $Person->save();
        }
        $test = People::where('ls', $message->Input('ls'))->first();

        $Appeal = new Appeal();
        $Appeal->people_id = $test->id;
        $Appeal->message = $message->Input('message');
        $Appeal->source = 1;
        $Appeal->type = 0;
        $Appeal->save();

        // $toEmail = "arttema@mail.ru";
        // $moreUsers = "9268188@gmail.com";

        // Mail::to($toEmail)
        //     ->cc($moreUsers)
        //     ->send(new NewTicket($message));
        return view('reception.success');
    }
}
