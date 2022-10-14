@extends('layouts.app')

@section('title')Новое обращение@endsection

@section('description')Здесь можно оформить обращение в компанию РКС-энерго.@endsection

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
