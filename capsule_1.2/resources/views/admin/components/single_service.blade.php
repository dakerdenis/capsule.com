<style>
    .single__service__wrapper {
    width: 100%;
}
.single__service-name {

}
.single__service-img {
    margin-top: 30px;
    margin-bottom: 30px;
    width: 200px;
    height: 200px;
    
}
.single__service-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.single__service-desc {
}
.single__service-cooperation {
}
.single__service-products {
}

.popup-actions{
    display: flex;
    margin: 0 auto;
    width: 100%;
    justify-content: center;
}
.popup-actions button{
    margin: 0px 10px;
}
</style>
<div class="single__service__wrapper">
    <div class="single__service-name">
        <h1>{{ $service->name }}</h1>
    </div>
    <div class="single__service-img">
        <img src="{{ $service->logo ? asset('public/' . $service->logo) : asset('images/default-logo.png') }}"
            alt="Service Logo">
    </div>
    <div class="single__service-desc">
        <p>Имя менеджера: {{ $service->description ?? 'Описание отсутствует' }}</p>
    </div>
    <div class="single__service-email">
        <p>E-mail сервиса: {{ $service->email ?? 'E-mail отсутствует' }}</p>
    </div>
    <div class="single__service-cooperation">
        <p>Сотрудничество: {{ $service->cooperation == 1 ? 'Да' : 'Нет' }}</p>
    </div>
    <div class="single__service-products">
        <p>Кол-во продуктов: {{ count($service->list_of_products) }} </p>
    </div>
</div>
