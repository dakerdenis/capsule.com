<div class="products__wrapper">
    <div class="products__name">
        Список всех продуктов
    </div>
    <div class="products__sort__add-wrapper">
        <!---SORT BY-->
        <div class="products__sortby-block">

            <!--  SORT BY TYPE ----->
            <div class="products__sortby">
                Фильтр по типу:
            </div>
            <div class="products__sortby__buttons">
                <a class="btn btn-secondary" href="{{ route('admin.products', ['type' => 1]) }}">Urban</a>
                <a class="btn btn-secondary" href="{{ route('admin.products', ['type' => 2]) }}">Optima</a>
                <a class="btn btn-secondary" href="{{ route('admin.products', ['type' => 3]) }}">Element</a>
                <a class="btn btn-secondary" href="{{ route('admin.products', ['type' => 4]) }}">Huracan</a>
                <a class="btn btn-secondary" href="{{ route('admin.products', ['type' => 5]) }}">Matte</a>
                <a class="btn btn-secondary" href="{{ route('admin.products', ['type' => 6]) }}">Black</a>
            </div>
            <!--  SORT BY COUNTRY ----->
            <div class="products__sortby">
                Фильтр по Стране:
            </div>
            <div class="products__sortby__buttons">
                <a class="btn btn-secondary" href="{{ route('admin.products', ['country' => 'AZ']) }}">AZ</a>
                <a class="btn btn-secondary" href="{{ route('admin.products', ['country' => 'EU']) }}">EU</a>
                <a class="btn btn-secondary" href="{{ route('admin.products', ['country' => 'US']) }}">US</a>
            </div>
            <!--  SORT BY DATE ----->
            <div class="products__sortbydate">
                <form method="GET" action="{{ route('admin.products') }}">
                    <input type="hidden" name="section" value="products">
                    <input type="hidden" name="type" value="{{ request('type') }}">
                    <label for="sort_by_date">Сортировка по дате:</label>
                    <select id="sort_by_date" name="sort_by_date" onchange="this.form.submit()">
                        <option value="">Выберите</option>
                        <option value="asc" {{ request('sort_by_date') === 'asc' ? 'selected' : '' }}>По возрастанию
                        </option>
                        <option value="desc" {{ request('sort_by_date') === 'desc' ? 'selected' : '' }}>По убыванию
                        </option>
                    </select>
                </form>
            </div>
    
            <!--  SORT BY WARRANTY ----->
            <div class="products__sortbyhaswarranty">
                <form method="GET" action="{{ route('admin.dashboard') }}">
                    <input type="hidden" name="section" value="products">
                    <input type="hidden" name="type" value="{{ request('type') }}">
                    <label for="has_warranty">Сортировка по наличию гарантии:</label>
                    <select id="has_warranty" name="has_warranty" onchange="removeEmptyAndSubmit(this.form)">
                        <option value="">Выберите</option>
                        <option value="1" {{ request('has_warranty') === '1' ? 'selected' : '' }}>С гарантией</option>
                        <option value="0" {{ request('has_warranty') === '0' ? 'selected' : '' }}>Без гарантии
                        </option>
                    </select>
                </form>
            </div>
    
            <!--  DEFAULT SORT ----->
            <a class="filtr_default btn btn-secondary" href="{{ route('admin.products') }}">Сбросить фильтры</a>
    
        </div>

        <!-----CRUD--->
        <div class="products__sortby-edit">
            <a href="{{ route('admin.add_product')}}" class="btn btn-secondary">Добавить продукт</a>

        </div>
    </div>

    <table class="main__table table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">6 Digits Code</th>
                <th scope="col">DD.MM.YYYY</th>
                <th scope="col">Warranty Number</th>
                <th scope="col">Type</th>
                <th scope="col">Country</th>
                <th scope="col">Service</th>
            </tr>
        </thead>
        <tbody>
            @php
                $typeNames = [
                    1 => 'Urban',
                    2 => 'Optima',
                    3 => 'Element',
                    4 => 'Huracan',
                    5 => 'Matte',
                    6 => 'Black',
                ];
            @endphp
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->verification_date ? $product->verification_date->format('d.m.Y') : 'N/A' }}</td>
                    <td>{{ $product->warranty ?? 'N/A' }}</td>
                    <td>{{ $typeNames[$product->type] ?? 'Unknown' }}</td>
                    <td>{{ $product->country ?? 'N/A' }}</td>
                    <td>{{ $product->service_id ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination__wrapper">
        {{ $products->appends(request()->query())->links('pagination::bootstrap-4') }}
    </div>
</div>
<script>
    function removeEmptyAndSubmit(form) {
        const formData = new FormData(form);
        for (let [key, value] of formData.entries()) {
            if (value === '') {
                form.querySelector(`[name="${key}"]`).remove();
            }
        }
        form.submit();
    }
</script>
