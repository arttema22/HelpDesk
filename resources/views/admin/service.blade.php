@extends('admin.layouts.admin')

@section('title')Список услуг@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список услуг</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                            aria-describedby="example2_info">
                            <thead>
                                <tr>
                                    <th class="sorting" tabindex="0" aria-controls="example2"
                                        aria-label="Rendering engine: activate to sort column ascending">Название</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2"
                                        aria-label="Browser: activate to sort column ascending">Комментарий</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $Services as $Service )
                                <tr>
                                    <td>{{$Service->name}}</td>
                                    <td>{{$Service->comment}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection
