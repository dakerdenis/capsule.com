<h1>{{ $service->name }}</h1>
<img src="{{ $service->logo ? asset('' . $service->logo) : asset('images/default-logo.png') }}" alt="Service Logo">
<p>Описание сервиса: {{ $service->description ?? 'Описание отсутствует' }}</p>
<p>Сотрудничество: {{ $service->cooperation == 1 ? 'Да' : 'Нет' }}</p>
<br>
<p>Кол-во продуктов: {{ count($service->list_of_products) }} </p>





