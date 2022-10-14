@extends('admin.layouts.admin')

@section('title')Список прав@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список прав</h3>
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
                                    <th>Название</th>
                                    <th>Роли</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $Permissions as $Permission )
                                <tr>
                                    <td>{{$Permission->name}}</td>
                                    <td>
                                        @foreach ( $Permission->roles as $Role )
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
