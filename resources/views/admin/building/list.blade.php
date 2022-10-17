@extends('admin.layouts.admin')

@section('title')Список объектов@endsection

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
                    <th style="width: 20%">Название</th>
                    <th style="width: 20%">Лицевой счет</th>
                    <th style="width: 30%">Адрес</th>
                    <th style="width: 20%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $Building as $Building )
                <tr>
                    <td><a href="{{ route('admin.building.card', $Building->id ) }}">{{ $Building->title }}</a></td>
                    <td>{{ $Building->ls }} </td>
                    <td>{{ $Building->address }} </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.building.card', $Building->id ) }}"><i
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
