@extends('admin.layouts.admin')

@section('title')Список пользователей@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список пользователей</h3>
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
                                    <th>Имя</th>
                                    <th>Роль</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $Users as $User )
                                <tr>
                                    <td>{{$User->name}}</td>
                                    <td>
                                        @foreach ( $User->roles as $Role )
                                        <span class="badge text-bg-primary">{{$Role->name}}</span>
                                        @endforeach
                                    </td>
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
