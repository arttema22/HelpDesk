<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TicketFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewTicket;

class ReceptionController extends Controller
{
    public function index()
    {
        return view('ticket.new');
    }

    public function send(TicketFormRequest $message)
    {
        $toEmail = "arttema@mail.ru";
        $moreUsers = "9268188@gmail.com";

        Mail::to($toEmail)
            ->cc($moreUsers)
            ->send(new NewTicket($message));
        return view('ticket.success');
    }
}
