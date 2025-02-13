<div class="single__service__wrapper">
    <div class="single__service-name">
        <h1>{{ $service->name }}</h1>
    </div>
    <div class="single__service-img">
        <img src="{{ $service->logo ? asset('public/'.$service->logo) : asset('images/default-logo.png') }}" alt="Service Logo">
    </div>
    <div class="single__service-desc">
        <p>Описание сервиса: {{ $service->description ?? 'Описание отсутствует' }}</p>
    </div>
    <div class="single__service-cooperation">
        <p>Сотрудничество: {{ $service->cooperation == 1 ? 'Да' : 'Нет' }}</p>
    </div>
    <div class="single__service-products">
        <p>Кол-во продуктов: {{ count($service->list_of_products) }} </p>
    </div>
</div>