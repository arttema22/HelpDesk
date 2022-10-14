@extends('layouts.app')

@section('title')Запрос на услугу@endsection

@section('description')Здесь можно оформить запрос на дополнительную услугу.@endsection

@section('content')
<form method="post" action="">
    @csrf
    <div class="row">
        <div class="col-md-6">
            @include('inc.fields.fio')
        </div>
        <div class="col-md-6">
            @include('inc.fields.address')
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @include('inc.fields.phone')
        </div>
        <div class="col-md-6">
            @include('inc.fields.email')
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('inc.fields.services')
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('inc.fields.message')
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('inc.fields.personaldata')
        </div>
    </div>
    @include('inc.fields.btn-submit')
</form>
@endsection
