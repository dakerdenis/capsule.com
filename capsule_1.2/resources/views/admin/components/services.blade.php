<div>
    <div class="services__name__add">
        <h2>Авто сервисы</h2>
        <a class="btn btn-secondary" href="{{route('admin.add_service')}}">Добавление сервиса</a>
    </div>


    <div class="services__wrapper">
        <table class="main__table table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Название</th>
                    <th scope="col">Сотрудничество</th>
                    <th scope="col">Кол-во продуктов</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr class="{{ $service->cooperation == 1 ? 'cooperation' : '' }}">
                        <th scope="row">{{ $service->id }}</th>
                        <td>
                            <a href="{{ route('admin.service', ['id' => $service->id]) }}">{{ $service->name }}</a>
                        </td>
                        
                        <td>{{ $service->cooperation == 1 ? 'Да' : 'Нет' }}</td>
                        <td>{{ count($service->list_of_products) }}</td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
</div>
