@extends('layouts.newticket')

@section('title')Новое обращение@endsection

@section('description')Здесь можно оформить обращение в компанию РКС-энерго.@endsection

@section('content')
<form method="post" action="">
    @csrf
    @include('inc.fields.fio')
    @include('inc.fields.address')
    @include('inc.fields.phone')
    @include('inc.fields.email')
    @include('inc.fields.message')
    @include('inc.fields.personaldata')
    @include('inc.fields.btn-submit')
</form>
@endsection
