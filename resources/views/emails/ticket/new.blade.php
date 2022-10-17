<h2>На сайте создано новое обращение</h2>
<p><b>Автор:</b> {{ $mess->last_name }} {{ $mess->first_name }} {{ $mess->patronymic }}</p>
<p><b>Адрес:</b> {{ $mess->address }}</p>
<p><b>Номер телефона:</b> {{ $mess->phone }}</p>
<p><b>Email:</b> {{ $mess->email }}</p>
<p><b>Сообщение:</b></p>
{{ $mess->message }}
