@extends('layouts.app')

@section('title')Узнать статус обращения@endsection

@section('description')Узнать статус обращения.@endsection

@section('content')
<form method="post" action="">
    @csrf
    <div class="row">
        <div class="col-md-12">
            @include('inc.fields.idkod')
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('inc.fields.phone')
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-floating mb-3 captcha">
                <span>{!! captcha_img() !!}</span>
                <button type="button" class="btn btn-danger" class="reload" id="reload">
                    &#x21bb;
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('inc.fields.captcha')
        </div>
    </div>
    @include('inc.fields.btn-submit')
</form>
<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endsection
