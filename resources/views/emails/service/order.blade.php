<h2>Создан новый запрос на услугу</h2>
<p><b>Автор:</b> {{ $mess->name }}</p>
<p><b>Адрес:</b> {{ $mess->address }}</p>
<p><b>Номер телефона:</b> {{ $mess->phone }}</p>
<p><b>Email:</b> {{ $mess->email }}</p>
<p><b>Услуга:</b> {{ $mess->service_name }}</p>
<p><b>Сообщение:</b></p>
{{ $mess->message }}
