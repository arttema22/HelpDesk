@extends('admin.layouts.admin')

@section('title')Список обращений@endsection

@section('content')
<div class="row">
    @include('inc.widgets.infobox.success')
    @include('inc.widgets.infobox.info')
</div>
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
                    <th style="width: 10%">Дата создания</th>
                    <th>Тема</th>
                    <th>Автор</th>
                    <th>Объект</th>
                    <th style="width: 5%">Тип</th>
                    <th style="width: 5%" class="text-center">Источник</th>
                    <th style="width: 5%" class="text-center">Статус</th>
                    <th style="width: 15%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $Tickets as $Ticket )
                <tr>
                    <td><a href="{{ route('admin.reception.card', $Ticket->id ) }}"> {{ $Ticket->date_time }} </a></td>
                    <td><a href="{{ route('admin.reception.card', $Ticket->id ) }}"> {{ $Ticket->title }} </a></td>
                    <td>{{ $Ticket->people->full_name }} </td>
                    <td>{{ $Ticket->building->ls }}<br>{{ $Ticket->building->address }}
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">{{$Ticket->type}}</span>
                    </td>
                    <td class="project-state">
                        @if ($Ticket->source == 1)
                        <span class="badge badge-success">Письмо</span>
                        @endif
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">{{$Ticket->status->title}}</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.reception.card', $Ticket->id ) }}"><i
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
