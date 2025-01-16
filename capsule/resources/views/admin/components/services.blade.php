<div>
    <h2>Авто сервисы</h2>

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
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->cooperation == 1 ? 'Да' : 'Нет' }}</td>
                        <td>{{ count($service->list_of_products) }}</td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
</div>
