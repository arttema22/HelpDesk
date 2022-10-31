@extends('layouts.app')

@section('title'){{$Ticket->title}}@endsection

@section('description')Статус: <span class="badge rounded-pill text-bg-light">{{$Ticket->status->title}}</span>

@endsection

@section('content')
<style>
    ul.timeline {
        list-style-type: none;
        position: relative;
    }

    ul.timeline:before {
        content: ' ';
        background: #9FC110;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }

    ul.timeline>li {
        margin: 20px 0;
        padding-left: 20px;
    }

    ul.timeline>li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #9FC110;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }
</style>
<div class="row">
    <div class="col-md-6">
        <h4>{{$Ticket->people->FullName}}, Вы писали:</h4>
        <ul class="timeline">
            <li>
                <h6>{{$Ticket->title}}</h6>
                <h6 class="float-right">{{$Ticket->DateTime}}</h6>
                <p>{{$Ticket->message}}</p>
            </li>
            @foreach ( $Ticket->mess as $Message )
            <li>
                <h6>Ответ</h6>
                {{$Message->DateTime}}
                {{$Message->message}}
            </li>
            @endforeach
        </ul>
    </div>
    <div class="col-md-6">
        <h4>Написать ответ</h4>
        <form method="post" action="">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    @include('inc.fields.message')
                </div>
            </div>
            @include('inc.fields.btn-submit')
        </form>
    </div>
</div>
@endsection
