<div class="col-6">
    <div class="form-floating mb-3">
        <input type="text" name="phone" class="form-control
                            @if ($errors->get('phone')) is-invalid @endif" id="phone" placeholder="Номер телефона"
            value="{{old('phone')}}">
        <label for="phone">Номер телефона</label>
        @if ($errors->get('phone'))
        @foreach ($errors->get('phone') as $message)
        <div class="invalid-feedback">{{$message}}</div>
        @endforeach
        @endif
    </div>
</div>
