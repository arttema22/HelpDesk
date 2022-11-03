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
                                <span class="bg-danger">{{ $Ticket->date }}</span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                                @if ($Ticket->source == 1)
                                <i class="fas fa-envelope bg-primary"></i>
                                @endif
                                <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> {{ $Ticket->DateTime }}</span>
                                    <h3 class="timeline-header">{{ $Ticket->title }}</h3>
                                    <div class="timeline-body">
                                        {{ $Ticket->message }}<br><br>
                                        @foreach ( $Ticket->mess as $Message)
                                        <div class="timeline timeline-inverse">
                                            <div>
                                                <i class="fas fa-envelope bg-primary"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> {{
                                                        $Message->created_at}}</span>
                                                    <h3 class="timeline-header">Автор</h3>
                                                    {{$Message->message}}
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="timeline-footer">
                                        <form method="post" action="{{ route('admin.answer', $Ticket->id ) }}">
                                            @csrf
                                            Ответ:
                                            @include('inc.fields.message')
                                            @include('inc.fields.btn-submit')
                                        </form>
                                    </div>
                                    <span class="time">Указаны данные:
                                        ФИО: {{$Ticket->last_name}} {{$Ticket->first_name}} {{$Ticket->patronymic}}
                                        Л/С: {{$Ticket->ls}}
                                        Адрес: {{$Ticket->address}}
                                        Телефон: {{$Ticket->phone}}
                                        Почта: {{$Ticket->email}}
                                    </span>
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
