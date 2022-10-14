@extends('admin.layouts.admin')

@section('title')Панель@endsection

@section('content')
<div class="col-lg-3 col-6">
    <div class="small-box bg-info">
        <div class="inner">
            <h3>{{$CountServices}}</h3>
            <p>Оказываемых услуг</p>
        </div>
        <div class="icon">
            <i class="fas fa-chart-pie"></i>
        </div>
        <a href="{{ route('admin.service') }}" class="small-box-footer">
            Подробно <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>
</div>
<div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
        <div class="inner">
            <h3>{{$CountRoles}}</h3>
            <p>Ролей</p>
        </div>
        <div class="icon">
            <i class="fas fa-chart-pie"></i>
        </div>
        <a href="{{ route('admin.role') }}" class="small-box-footer">
            Подробно <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>
</div>
<div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
        <div class="inner">
            <h3>{{$Permissions}}</h3>
            <p>Прав</p>
        </div>
        <div class="icon">
            <i class="fas fa-chart-pie"></i>
        </div>
        <a href="{{ route('admin.permission') }}" class="small-box-footer">
            Подробно <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>
</div>
<div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
        <div class="inner">
            <h3>{{$User}}</h3>
            <p>Пользователей</p>
        </div>
        <div class="icon">
            <i class="fas fa-chart-pie"></i>
        </div>
        <a href="{{ route('admin.user') }}" class="small-box-footer">
            Подробно <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>
</div>
@endsection
