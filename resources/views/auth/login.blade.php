@extends('layouts.auth')

@section('header')Вход@endsection

@section('content')
<form method="POST" action="{{ route('login') }}" class="w-75">
    @csrf
    @include('inc.fields.email')
    @include('inc.fields.password')
    @include('inc.fields.btn-submit')
</form>
@endsection

@section('footer')
<a href="{{ route('registration') }}" class="btn btn-link">Регистрация нового пользователя</a>
@endsection
