@extends('admin.layouts.admin')

@section('title')Обращение@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <h3 class="profile-username text-center">{{ $Appeal->name }}</h3>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i>Адрес</strong>
                <p class="text-muted">{{ $Appeal->address }}</p>
                <hr>
                <strong><i class="fas fa-phone-alt mr-1"></i>Телефон</strong>
                <p class="text-muted">{{ $Appeal->phone }}</p>
                <hr>
                <strong><i class="fas fa-envelope mr-1"></i>e-mail</strong>
                <p class="text-muted">{{ $Appeal->email }}</p>
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
                    <!-- /.tab-pane -->
                    <div class="tab-pane active" id="timeline">
                        <!-- The timeline -->
                        <div class="timeline timeline-inverse">
                            <!-- timeline time label -->
                            <div class="time-label">
                                <span class="bg-danger">{{ $Appeal->created_at }} </span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                                @if ($Appeal->source == 1)
                                <i class="fas fa-envelope bg-primary"></i>
                                @endif
                                <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> {{ $Appeal->created_at }}</span>

                                    <h3 class="timeline-header">Обращение клиента</h3>

                                    <div class="timeline-body">
                                        {{ $Appeal->message }}
                                    </div>
                                    <div class="timeline-footer">
                                        <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
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

                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection
