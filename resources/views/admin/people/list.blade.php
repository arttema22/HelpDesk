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
                    <th style="width: 1%">#</th>
                    <th style="width: 20%">ФИО</th>
                    <th style="width: 20%">Лицевой счет</th>
                    <th style="width: 30%">Адрес</th>
                    <th>Телефон</th>
                    <th style="width: 8%" class="text-center">e-mail</th>
                    <th style="width: 20%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $People as $Person )
                <tr>
                    <td> # </td>
                    <td><a href="{{ route('admin.people.card', $Person->id ) }}">{{ $Person->last_name }} {{
                            $Person->first_name }} {{ $Person->patronymic }}</a>
                    </td>
                    <td>{{ $Person->ls }} </td>
                    <td>{{ $Person->address }} </td>
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
