<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Http\Requests\AnswerRequest;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminAnswerTicket;
use App\Mail\AnswerTicket;
use stdClass;

class AdminReceptionContriller extends Controller
{
    public function index()
    {
        $Tickets = Ticket::all();
        $Count_new = Ticket::where('status_id', 1)->count();
        $Count_anser = Ticket::where('status_id', 2)->count();
        return view('admin.reception.list', ['Tickets' => $Tickets, 'Count_new' => $Count_new, 'Count_anser' => $Count_anser]);
    }

    public function card($id)
    {
        $Ticket = Ticket::find($id);
        return view('admin.reception.card', ['Ticket' => $Ticket]);
    }

    public function answer(AnswerRequest $message, $id)
    {

        $Answer = new Message();
        $Answer->ticket_id = $id;
        $Answer->message = $message->Input('message');
        $Answer->save();
        $Ticket = Ticket::find($id);
        $Ticket->status_id = 2;
        $Ticket->save();


        $toEmail = "arttema2010@yandex.ru";
        $moreUsers = "9268188@gmail.com";
        $sendData = new stdClass();
        $sendData->message = $message->Input('message');
        $sendData->user = $Ticket->people->FullName;
        $sendData->ticket_title = $Ticket->title;
        $sendData->ticket_text = $Ticket->message;
        $sendData->ticket_url = route('reception.show', $Ticket->id);
        Mail::to($toEmail)
            ->cc($moreUsers)
            ->send(new AdminAnswerTicket($sendData));

        Mail::to($Ticket->people->email)
            ->send(new AnswerTicket($sendData));

        return view('admin.reception.card', ['Ticket' => $Ticket]);
    }
}
