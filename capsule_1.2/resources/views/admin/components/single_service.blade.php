<h1>{{ $service->name }}</h1>
<p>Описание сервиса: {{ $service->description ?? 'Описание отсутствует' }}</p>
<p>Сотрудничество: {{ $service->cooperation == 1 ? 'Да' : 'Нет' }}</p>
<br>
<p>Кол-во продуктов: {{ count($service->list_of_products) }} </p>

<img src="{{ $service->logo ? asset('images/' . $service->logo) : asset('images/default-logo.png') }}" alt="Service Logo">



