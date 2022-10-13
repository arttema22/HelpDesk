<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceFormRequest;
use App\Mail\OrderService;
use Illuminate\Support\Facades\Mail;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $Services = Service::all();
        return view('service.new', ['Services' => $Services]);
    }

    public function send(ServiceFormRequest $message)
    {
        $ServiceName = Service::find($message->service_id);
        $message['service_name'] = $ServiceName->name;

        $toEmail = "arttema@mail.ru";
        $moreUsers = "9268188@gmail.com";

        Mail::to($toEmail)
            ->cc($moreUsers)
            ->send(new OrderService($message));
        return view('service.success');
    }
}
