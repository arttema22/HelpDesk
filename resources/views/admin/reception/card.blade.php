@extends('admin.layouts.admin')

@section('title')Обращение@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.reception') }}">Список</a></li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <h3 class="profile-username text-center">{{ $Ticket->people->FullName }}</h3>
                <hr>
                <strong><i class="fas fa-phone-alt mr-1"></i>Телефон</strong>
                <p class="text-muted">{{ $Ticket->people->phone }}</p>
                <hr>
                <strong><i class="fas fa-envelope mr-1"></i>e-mail</strong>
                <p class="text-muted">{{ $Ticket->people->email }}</p>
            </div>
        </div>
        <!-- Building -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <h3 class="profile-username text-center">Объект</h3>
                <hr>
                <strong>Л/С</strong>
                <p class="text-muted">{{ $Ticket->building->ls }}</p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i>Адрес</strong>
                <p class="text-muted">{{ $Ticket->building->address }}</p>
            </div>
        </div>
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <!-- /.tab-pane -->
                    <div class="tab-pane active" id="timeline">
                        <!-- The timeline -->
                        <div class="timeline timeline-inverse">
                            <!-- timeline time label -->
                            <div class="time-label">
                                <span class="bg-danger">{{ $Ticket->date }} </span>
                            </div>
                            <!-- /.timeline-label -->
                            @foreach ( $Ticket->mess as $Message )
                            <div>
                                <i class="fas fa-user bg-info"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> {{ $Message->DateTime }}</span>

                                    <h3 class="timeline-header border-0"><a
                                            href="#">{{$Message->ticket->people->email}}Sarah
                                            Young</a>
                                        дал(а)
                                        ответ:
                                    </h3>
                                    {{ $Message->message }}
                                </div>
                            </div>
                            @endforeach
                            <!-- timeline item -->
                            <div>
                                @if ($Ticket->source == 1)
                                <i class="fas fa-envelope bg-primary"></i>
                                @endif
                                <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> {{ $Ticket->DateTime }}</span>
                                    <h3 class="timeline-header">{{ $Ticket->title }}</h3>
                                    <form method="post" action="{{ route('admin.answer', $Ticket->id ) }}">
                                        @csrf
                                        <div class="timeline-body">
                                            {{ $Ticket->message }} <br>
                                            Ответ:
                                            @include('inc.fields.message')
                                        </div>
                                        <div class="timeline-footer">
                                            @include('inc.fields.btn-submit')
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END timeline item -->
                            <div>
                                <i class="far fa-clock bg-gray"></i>
                            </div>
                        </div>
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
