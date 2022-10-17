@extends('admin.layouts.admin')

@section('title')Объект@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.building') }}">Список</a></li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <h3 class="profile-username text-center">{{ $Building->title }}</h3>
                <p class="text-muted text-center">ЛС - {{ $Building->ls }}</p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i>Адрес</strong>
                <p class="text-muted">{{ $Building->address }}</p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">
                    @foreach ( $Building->people as $People )
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="lead"><b>{{ $People->full_name }}</b></h2>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-envelope"></i></span>
                                                {{ $People->email }}
                                            </li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-phone"></i></span>
                                                {{ $People->phone }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="{{ route('admin.people.card', $People->id ) }}"
                                        class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> Профиль
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
            <!-- /.card-footer -->
        </div>
    </div>
    <!-- /.col -->
</div>
@endsection
