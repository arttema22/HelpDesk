@extends('admin.layouts.admin')

@section('title')Персона@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.people') }}">Список</a></li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        <!-- Profile -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <h3 class="profile-username text-center">{{ $People->full_name }}</h3>
                <hr>
                <strong><i class="fas fa-phone-alt mr-1"></i>Телефон</strong>
                <p class="text-muted">{{ $People->phone }}</p>
                <hr>
                <strong><i class="fas fa-envelope mr-1"></i>e-mail</strong>
                <p class="text-muted">{{ $People->email }}</p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        @foreach ( $People->building as $Building )
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ $Building->title}}</h3>
            </div>
            <div class="card-body">
                <strong>ЛС</strong>
                <p class="text-muted">{{ $Building->ls}}</p>
                <strong><i class="fas fa-map-marker-alt mr-1"></i>Адрес</strong>
                <p class="text-muted">{{ $Building->address}}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.building.card', $Building->id ) }}" class="btn btn-primary">К объекту</a>
            </div>
            <!-- /.card-body -->
        </div>
        @endforeach
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Переписка</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Написать письмо</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="timeline">
                        <!-- The timeline -->
                        <div class="timeline timeline-inverse">
                            @foreach ( $People->appeal->sortByDesc('created_at') as $Appeal )
                            <div class="time-label">
                                <span class="bg-success">
                                    {{ $Appeal->date }}
                                </span>
                            </div>
                            <!-- timeline item -->
                            <div>
                                @if ($Appeal->source == 1)
                                <i class="fas fa-sitemap bg-primary"></i>
                                @endif
                                <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> {{ $Appeal->time }}</span>
                                    <h3 class="timeline-header">@if ( $Appeal->type == 0 ) Обращение клиента с сайта
                                        @endif</h3>
                                    <div class="timeline-body">
                                        {{ $Appeal->message }}
                                        @include('inc.fields.message')
                                    </div>
                                    <div class="timeline-footer">
                                        <a href="#" class="btn btn-primary btn-sm">Отправить ответ</a>
                                        {{-- <a href="#" class="btn btn-danger btn-sm">Delete</a> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- END timeline item -->
                            @endforeach
                            <div>
                                <i class="far fa-clock bg-gray"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="settings">
                        <form method="post" action="">
                            @include('inc.fields.title')
                            @include('inc.fields.message')
                            @include('inc.fields.btn-submit')
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection
