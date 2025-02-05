<div>
    <h2>Гарантии</h2>
    <br>
    <div class="services__wrapper">
        <table class="main__table table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Code</th>
                    <th scope="col">Car Model</th>
                    <th scope="col">Installation Date</th>
                    <th scope="col">Warranty End Date</th>
                    <th scope="col">Client Code</th>
                    <th scope="col">Service Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($warranties as $warranty)
                    <tr>
                        <td>{{ $warranty->id }}</td>
                        <td>{{ $warranty->product_code }}</td>
                        <td>{{ $warranty->car_model }}</td>
                        <td>{{ $warranty->installation_date }}</td>
                        <td>{{ $warranty->warranty_end_date }}</td>
                        <td>{{ $warranty->client_code }}</td>
                        <td>
                            @if ($warranty->service)
                                <a href="{{ route('admin.service', ['id' => $warranty->service->id]) }}">
                                    {{ $warranty->service->name }}
                                </a>
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
