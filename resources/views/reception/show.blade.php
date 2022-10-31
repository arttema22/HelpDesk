@extends('layouts.app')

@section('title')Ваше обращение@endsection

@section('description')Переписка@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <h5>{{$Ticket->people->FullName}}, Вы писали:</h5>
        <h6>{{$Ticket->DateTime}} "{{$Ticket->title}}"</h6>
        {{$Ticket->message}}
        <hr>
        @foreach ( $Ticket->mess as $Message )
        <h6>Ответ</h6>
        {{$Message->DateTime}}
        {{$Message->message}}
        <hr>
        @endforeach
        {{route('reception.show', $Ticket->id);}}
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
