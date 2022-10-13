<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceFormRequest;
use App\Mail\OrderService;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
    public function index()
    {
        return view('service.new');
    }

    public function send(ServiceFormRequest $message)
    {
        $toEmail = "arttema@mail.ru";
        $moreUsers = "9268188@gmail.com";

        Mail::to($toEmail)
            ->cc($moreUsers)
            ->send(new OrderService($message));
        return view('service.success');
    }
}
