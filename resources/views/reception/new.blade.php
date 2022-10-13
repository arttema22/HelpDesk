@extends('layouts.app')

@section('title')Новое обращение@endsection

@section('description')Здесь можно оформить обращение в компанию РКС-энерго.@endsection

@section('content')
<form method="post" action="">
    @csrf
    @include('inc.fields.fio')
    @include('inc.fields.address')
    <div class="row">
        @include('inc.fields.phone')
        @include('inc.fields.email')
    </div>
    @include('inc.fields.message')
    @include('inc.fields.personaldata')
    @include('inc.fields.btn-submit')
</form>
@endsection
