@extends('layouts.auth')

@section('header')Новый сотрудник@endsection

@section('content')
<form method="POST" action="{{ route('create') }}" class="w-75">
    @csrf
    @include('inc.fields.lastName')
    @include('inc.fields.firstName')
    @include('inc.fields.patronymic')
    @include('inc.fields.phone')
    @include('inc.fields.email')
    @include('inc.fields.password')
    @include('inc.fields.confirmpassword')
    @include('inc.fields.btn-submit')
</form>
@endsection

@section('footer')
<a href="{{ route('login') }}" class="btn btn-link"> У меня уже есть логин и пароль</a>
@endsection
