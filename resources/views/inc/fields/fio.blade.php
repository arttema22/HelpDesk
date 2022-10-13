<div class="form-floating mb-3">
    <input type="text" name="name" class="form-control
                            @if ($errors->get('name')) is-invalid @endif" id="name"
        placeholder="Фамилия Имя Отчество / Название организации" value="{{old('name')}}">
    <label for="name">Фамилия Имя Отчество / Название организации</label>
    @if ($errors->get('name'))
    @foreach ($errors->get('name') as $message)
    <div class="invalid-feedback">{{$message}}</div>
    @endforeach
    @endif
</div>
