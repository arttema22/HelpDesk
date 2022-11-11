@extends('layouts.app')

@section('title')Электронная приемная@endsection

@section('description')
Сервис предоставляет возможность отправить обращение в форме электронного документа и получить информацию о статусе и
ответе.
@endsection

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center border-primary p-2">
                <div class="card-body">
                    <h5 class="card-title">Обращения</h5>
                    <p class="card-text">Прием обращений по всем вопросам</p>
                    <a href="{{ route('reception.ticket') }}" class="btn btn-primary">Написать обращение</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-center border-primary p-2">
                <div class="card-body">
                    <h5 class="card-title">Услуги</h5>
                    <p class="card-text">Оформление запроса на оказание услуг</p>
                    <a href="{{ route('service.ticket') }}" class="btn btn-primary">Запрос на услугу</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
