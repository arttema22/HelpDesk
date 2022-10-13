<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создана заявка на услугу</div>
                <div class="card-body">
                    <p><b>Автор:</b> {{ $mess->name }}</p>
                    <p><b>Адрес:</b> {{ $mess->address }}</p>
                    <p><b>Номер телефона:</b> {{ $mess->phone }}</p>
                    <p><b>Email:</b> {{ $mess->email }}</p>
                    <p><b>Услуга:</b> {{ $mess->service_name }}</p>
                    <p><b>Сообщение:</b> {{ $mess->message }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
