@extends('layouts.app')

@section('title')Служба поддержки@endsection

@section('description')Прием обращений и заявок на оказание услуг.@endsection

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center border-primary p-5">
                <div class="card-body">
                    <h5 class="card-title">Обращения</h5>
                    <p class="card-text">Прием обращений по всем вопросам</p>
                    <a href="{{ route('ticket') }}" class="btn btn-primary">Написать обращение</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-center border-primary p-5">
                <div class="card-body">
                    <h5 class="card-title">Услуги</h5>
                    <p class="card-text">Оформление заявок на оказание услуг</p>
                    <a href="{{ route('service.ticket') }}" class="btn btn-primary">Запрос на услугу</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
