@extends('layouts.newticket')

@section('title')Запрос на услугу@endsection

@section('description')Здесь можно оформить заявку на дополнительную услугу.@endsection

@section('content')
<form method="post" action="">
    @csrf
    @include('inc.fields.fio')
    @include('inc.fields.address')
    @include('inc.fields.phone')
    @include('inc.fields.email')
    @include('inc.fields.services')
    @include('inc.fields.personaldata')
    @include('inc.fields.btn-submit')
</form>
@endsection
