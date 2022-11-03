<h2>На сайте создано новое обращение</h2>
<p><b>Автор:</b> {{$mess->user}}</p>
<p><b>Л/С:</b> {{$mess->ls}}</p>
<p><b>Адрес:</b> {{$mess->address}}</p>
<p><b>Номер телефона:</b> {{$mess->phone}}</p>
<p><b>Email:</b> {{$mess->email}}</p>
<p><b>Сообщение:</b></p>
<h4>{{$mess->ticket_title}}</h4>
{{$mess->message}}
<br>
<a href="{{$mess->admin_ticket_url}}">Посмотреть обращение</a>
