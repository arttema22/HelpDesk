@extends('admin.layouts.admin')

@section('title')Список обращений@endsection

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <div class="card-tools">
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>ФИО</th>
                    <th style="width: 20%">Телефон</th>
                    <th style="width: 8%" class="text-center">e-mail</th>
                    <th style="width: 20%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $People as $Person )
                <tr>
                    <td><a href="{{ route('admin.people.card', $Person->id ) }}">{{ $Person->full_name }}</a></td>
                    <td>{{ $Person->phone }} </td>
                    <td>{{ $Person->email }} </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.people.card', $Person->id ) }}"><i
                                class="fas fa-folder"></i> Открыть </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
