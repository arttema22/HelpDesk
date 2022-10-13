<div class="col-6">
    <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control
                            @if ($errors->get('email')) is-invalid @endif" id="email"
            placeholder="Адрес электронной почты" value="{{old('email')}}">
        <label for="email">Адрес электронной почты</label>
        @if ($errors->get('email'))
        @foreach ($errors->get('email') as $message)
        <div class="invalid-feedback">{{$message}}</div>
        @endforeach
        @endif
    </div>
</div>
