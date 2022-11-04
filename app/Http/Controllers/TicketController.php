<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketFormRequest;
use App\Http\Requests\TicketStatusRequest;
use App\Models\Admin\Building;
use App\Models\Admin\People;
use App\Models\Ticket;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminNewTicket;
use App\Mail\NewTicket;
use stdClass;

class TicketController extends Controller
{
    /*
    * Функция показывает страницу с формой ввода обращения
    */
    public function index()
    {
        return view('reception.new');
    }

    /*
    * Функция сохраняет обращение в базу
    * отправляет почтовые сообщения
    */
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
        $Ticket->first_name = $message->Input('first_name');
        $Ticket->last_name = $message->Input('last_name');
        $Ticket->patronymic = $message->Input('patronymic');
        $Ticket->ls = $message->Input('ls');
        $Ticket->address = $message->Input('address');
        $Ticket->phone = $message->Input('phone');
        $Ticket->email = $message->Input('email');
        $Ticket->title = $message->Input('title');
        $Ticket->message = $message->Input('message');
        $Ticket->source = 1;
        $Ticket->type = 0;
        $Ticket->status_id = 1;
        $Ticket->save();

        $sendData = new stdClass();
        $sendData->user = $Ticket->people->FullName;
        $sendData->ls = $Ticket->building->ls;
        $sendData->address = $Ticket->building->address;
        $sendData->phone = $Ticket->people->phone;
        $sendData->email = $Ticket->people->email;
        $sendData->ticket_title = $Ticket->title;
        $sendData->message = $Ticket->message;
        $sendData->ticket_url = route('reception.show', $Ticket->id);
        $sendData->admin_ticket_url = route('admin.reception.card', $Ticket->id);

        $toEmail = "arttema2010@yandex.ru";
        $moreUsers = "9268188@gmail.com";
        Mail::to($toEmail)
            ->cc($moreUsers)
            ->send(new AdminNewTicket($sendData));

        Mail::to($Person->email)
            ->send(new NewTicket($sendData));

        return view('reception.success');
    }

    /*
    * Функция показывает страницу с формой проверки (псевдо аутентификации) пользователя на то, что он имеет право
    * просмотреть обращение и он не робот (captcha)
    */
    public function status()
    {

        return view('reception.status');
    }

    /*
    * Функция показывает страницу с обращением и ответом для проверенного пользователя
    */
    public function result(TicketStatusRequest $message)
    {
        //$Ticket = Ticket::find($id);
        return view('reception.result');
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

    public function reloadCaptcha()
    {
        //  return response()->json(['captcha' => captcha_img()]);
    }
}
