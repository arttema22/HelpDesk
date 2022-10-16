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
                    <th style="width: 20%">Имя</th>
                    <th style="width: 30%">Адрес</th>
                    <th>Телефон</th>
                    <th style="width: 8%" class="text-center">e-mail</th>
                    <th>Источник</th>
                    <th style="width: 20%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $Appeals as $Appeal )
                <tr>
                    <td> # </td>
                    <td>
                        <a> {{ $Appeal->name }} </a>
                        <br>
                        <small> Создано {{ $Appeal->created_at }} </small>
                    </td>
                    <td>{{ $Appeal->address }} </td>
                    <td>{{ $Appeal->phone }} </td>
                    <td>{{ $Appeal->email }} </td>
                    <td class="project-state">
                        @if ($Appeal->source == 1)
                        <span class="badge badge-success">Письмо</span>
                        @endif
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-folder"></i> Открыть </a>
                        <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Удалить </a>
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
