@extends('layouts.app')

@section('title')Запрос на услугу@endsection

@section('description')Здесь можно оформить заявку на дополнительную услугу.@endsection

@section('content')
<form method="post" action="">
    @csrf
    @include('inc.fields.fio')
    @include('inc.fields.address')
    <div class="row">
        @include('inc.fields.phone')
        @include('inc.fields.email')
    </div>
    @include('inc.fields.services')
    @include('inc.fields.message')
    @include('inc.fields.personaldata')
    @include('inc.fields.btn-submit')
</form>
@endsection
