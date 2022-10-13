<div class="form-floating mb-3">
    <select name="service_name" class="form-select @if ($errors->get('service_name')) is-invalid @endif"
        aria-label="Выбор услуги">
        <option value="0">Выбор услуги</option>
        <option value="1">Экспертиза документов на соответствие для заключения договора
            энергоснабжения/договора купли-продажи</option>
        <option value="2">Экспертиза документов, предоставляемых для изменения Договора
            энергоснабжения/купли-продажи</option>
        <option value="3">Экспертиза документации на приборы учета, установленные во вновь
            построенном многоквартирном доме</option>
        <option value="4">расчет прогнозной стоимости поставки электрической
            энергии и мощности</option>
        <option value="5">Консультационные услуги по установке устройств защиты от дугового
            пробоя/искрения</option>
        <option value="6">Установка/замена прибора учета электрической энергии</option>
        <option value="7">Копирование документов</option>
        <option value="8">Разработка проектной документации системы коммерческого учета
            электрической энергии по строящимся (планируемым к
            строительству) многоквартирным домам</option>
    </select>
    @if ($errors->get('service_name'))
    @foreach ($errors->get('service_name') as $message)
    <div class="invalid-feedback">{{$message}}</div>
    @endforeach
    @endif
</div>
