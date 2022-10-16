@extends('admin.layouts.admin')

@section('title')Персона@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.people') }}">Список</a></li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <h3 class="profile-username text-center">{{ $People->last_name }} {{ $People->first_name }} {{
                    $People->patronymic }}</h3>
                <p class="text-muted text-center">ЛС - {{ $People->ls }}</p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i>Адрес</strong>
                <p class="text-muted">{{ $People->address }}</p>
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
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    @foreach ( $People->appeal as $Appeal )
                    <!-- /.tab-pane -->
                    <div class="tab-pane active" id="timeline">
                        <!-- The timeline -->
                        <div class="timeline timeline-inverse">
                            <!-- timeline item -->
                            <div>
                                @if ($People->source == 1)
                                <i class="fas fa-envelope bg-primary"></i>
                                @endif
                                <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> {{ $Appeal->created_at }}</span>

                                    <h3 class="timeline-header">Обращение клиента</h3>

                                    <div class="timeline-body">
                                        {{ $Appeal->message }}
                                    </div>
                                    <div class="timeline-footer">
                                        {{-- <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- END timeline item -->

                            <div>
                                <i class="far fa-clock bg-gray"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                    @endforeach
                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection
