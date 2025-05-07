<div class="sell__products__wrapper">
    <h2>Добавление продукта в продажу</h2>
    <form action="{{ route('admin.sell_product_post') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="code">Код продукта</label>
            <input type="text" name="code" class="form-control" value="{{ request('code') }}" required
                placeholder="например: UR123AZ">

        </div>

        <div class="form-group">
            <label for="service_id">Выберите сервис</label>
            <select name="service_id" class="form-control" required>
                <option value="">Выберите...</option>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="duration_hours">Срок действия таймера (в часах)</label>
            <input type="number" name="duration_hours" class="form-control" required placeholder="например: 6">
        </div>

        <button type="submit" class="btn btn-success">Добавить</button>
    </form>
</div>
