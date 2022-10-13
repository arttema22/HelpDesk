<div class="form-floating mb-3">
    @if(count($Services))
    <select name="service_name" id="service_name"
        class="form-select @if ($errors->get('service_name')) is-invalid @endif" aria-label="Название АЗС"
        aria-label="Выбор услуги">
        <option value="0">Выбор услуги</option>
        @foreach($Services as $Service)
        <option value="{{$Service->id}}">{{$Service->name}}</option>
        @endforeach
    </select>
    @if ($errors->get('service_name'))
    @foreach ($errors->get('service_name') as $message)
    <div class="invalid-feedback">{{$message}}</div>
    @endforeach
    @endif
    @else
    <div class="alert alert-danger" role="alert">
        В системе нет перечня услуг. Отправка невозможна.
    </div>
    @endif
</div>
