<div class="products__wrapper">
    <div class="products__name">
        Список всех продуктов
    </div>

    <div class="products__list">
        <div class="products__list__desc">
            <div class="list__desc__id flex-center">
                id
            </div>
            <div class="list__desc__code flex-center">
                6 digits code
            </div>
            <div class="list__desc__verificationdate flex-center">
                DD.MM.YYYY
            </div>
            <div class="list__desc__warranty flex-center">
                warranty number
            </div>
            <div class="list__desc__type flex-center">
                Type
            </div>
            <div class="list__desc__serviceid flex-center">
                Service
            </div>
        </div>

        @foreach ($products as $product)
            <div class="products__list__data">
                <div class="list__desc__id flex-center">{{ $product->id }}</div>
                <div class="list__desc__code flex-center">{{ $product->code }}</div>
                <div class="list__desc__verificationdate flex-center">
                    {{ $product->verification_date ? $product->verification_date->format('d.m.Y') : 'N/A' }}
                </div>
                <div class="list__desc__warranty flex-center">
                    {{ $product->warranty ?? 'N/A' }}
                </div>
                <div class="list__desc__type flex-center">{{ $product->type }}</div>
                <div class="list__desc__serviceid flex-center">{{ $product->service_id ?? 'N/A' }}</div>
            </div>
        @endforeach


    </div>
</div>
