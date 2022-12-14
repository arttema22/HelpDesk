@extends('admin.layouts.admin')

@section('title')Список ролей@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список ролей</h3>
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
                                    <th>Название роли</th>
                                    <th>Права</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $Roles as $Role )
                                <tr>
                                    <td>{{$Role->name}}</td>
                                    <td>
                                        @foreach ( $Role->permissions as $Permission )
                                        <span class="badge text-bg-primary">{{ $Permission->name }}</span>
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
