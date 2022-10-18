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
                    <th style="width: 20%">Дата создания</th>
                    <th>Автор</th>
                    <th style="width: 10%">Тип</th>
                    <th style="width: 10%" class="text-center">Источник</th>
                    <th style="width: 20%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $Appeals as $Appeal )
                <tr>
                    <td><a href="{{ route('admin.reception.card', $Appeal->id ) }}"> {{ $Appeal->date_time }} </a></td>
                    <td>{{ $Appeal->people->full_name }} </td>
                    <td class="project-state">
                        <span class="badge badge-success">{{$Appeal->type}}</span>
                    </td>
                    <td class="project-state">
                        @if ($Appeal->source == 1)
                        <span class="badge badge-success">Письмо</span>
                        @endif
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.reception.card', $Appeal->id ) }}"><i
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
