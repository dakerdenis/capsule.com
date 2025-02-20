
<style>
    /* Highlight rows with warranties */
    .has-warranty {
        background-color: #c8f7c5 !important; /* Light Green */
    }

    /* Style the warranty link */
    .main__table td a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    .main__table td a:hover {
        text-decoration: underline;
    }
</style>

<div class="products__wrapper">
    <div class="products__name">
        Список всех товаров
    </div>
    <div class="products__sort__add-wrapper">
        <!---SORT BY-->
        <div class="products__sortby-block">

            <!--  SORT BY TYPE ----->
            <div class="products__sortby-form">
                <form method="GET" action="{{ route('admin.products') }}">
                    <select id="filter_by_type" name="type" onchange="this.form.submit()">
                        <option value="">По типу</option>
                        <option value="1" {{ request('type') == 1 ? 'selected' : '' }}>Urban</option>
                        <option value="2" {{ request('type') == 2 ? 'selected' : '' }}>Optima</option>
                        <option value="3" {{ request('type') == 3 ? 'selected' : '' }}>Element</option>
                        <option value="4" {{ request('type') == 4 ? 'selected' : '' }}>Huracan</option>
                        <option value="5" {{ request('type') == 5 ? 'selected' : '' }}>Matte</option>
                        <option value="6" {{ request('type') == 6 ? 'selected' : '' }}>Black</option>
                    </select>
                </form>
            </div>
            <!--  SORT BY COUNTRY ----->
            <div class="products__sortby-form">
                <form method="GET" action="{{ route('admin.products') }}">
                    <select id="filter_by_country" name="country" onchange="this.form.submit()">
                        <option value="">По стране</option>
                        <option value="AZ" {{ request('country') == 'AZ' ? 'selected' : '' }}>AZ</option>
                        <option value="EU" {{ request('country') == 'EU' ? 'selected' : '' }}>EU</option>
                        <option value="US" {{ request('country') == 'US' ? 'selected' : '' }}>US</option>
                    </select>
                </form>
            </div>
            <!--  SORT BY DATE ----->
            <div class="products__sortby-form">
                <form method="GET" action="{{ route('admin.products') }}">
                    <input type="hidden" name="type" value="{{ request('type') }}">
                    <select id="sort_by_date" name="sort_by_date" onchange="this.form.submit()">
                        <option value="">По дате</option>
                        <option value="asc" {{ request('sort_by_date') === 'asc' ? 'selected' : '' }}>По возрастанию
                        </option>
                        <option value="desc" {{ request('sort_by_date') === 'desc' ? 'selected' : '' }}>По убыванию
                        </option>
                    </select>
                </form>
            </div>    
            <!--  SORT BY WARRANTY ----->
            <div class="products__sortby-form">
                <form method="GET" action="{{ route('admin.products') }}">
                    <input type="hidden" name="section" value="products">
                    <input type="hidden" name="type" value="{{ request('type') }}">
                    <select id="has_warranty" name="has_warranty" onchange="removeEmptyAndSubmit(this.form)">
                        <option value="">По гарантии</option>
                        <option value="1" {{ request('has_warranty') === '1' ? 'selected' : '' }}>С гарантией</option>
                        <option value="0" {{ request('has_warranty') === '0' ? 'selected' : '' }}>Без гарантии
                        </option>
                    </select>
                </form>
            </div>
    
            <!--  DEFAULT SORT ----->
            <a class="filtr_default btn" href="{{ route('admin.products') }}">Сбросить фильтры</a>
    
        </div>

        <!-----CRUD--->
        <div class="products__sortby-edit">
            <a href="{{ route('admin.add_product')}}" class="btn filtr_default">Добавить продукт</a>
        </div>
    </div>

    <table class="main__table table table-hover">
        <thead class="thead">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">6 Digits Code</th>
                <th scope="col">DD.MM.YYYY</th>
                <th scope="col">Warranty Number</th>
                <th scope="col">Verification Counter</th>
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
                <tr class="{{ $product->warranty ? 'has-warranty' : '' }}"> 
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->verification_date ? $product->verification_date->format('d.m.Y') : 'N/A' }}</td>
                    <td>
                        @if ($product->warranty)
                            <a href="{{ route('service.warranty', ['id' => $product->warranty]) }}" target="_blank">
                                {{ $product->warranty }}
                            </a>
                        @else
                            N/A
                        @endif  
                    </td>
                    <td>{{ $product->verification_counter ?? 'N/A' }}</td>
                    <td>{{ $typeNames[$product->type] ?? 'Unknown' }}</td>
                    <td>{{ $product->country ?? 'N/A' }}</td>
                    <td>
                        @if ($product->service_id)
                            <a href="{{ route('admin.service', ['id' => $product->service_id]) }}" target="_blank">
                                Service #{{ $product->service_id }}
                            </a>
                        @else
                            N/A
                        @endif
                    </td>
                    
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
