<div class="home__wrapper">
    <div class="home__statistics__container">
        <!-- Products -->
        <div class="home__statistics__element">
            <div class="element__name">
                <p>Товары</p>
                <span>{{ $totalProducts }}</span>
            </div>

            <div class="element__desc">
                <p>Верифицированных:</p>
                <span>{{ $verifiedProducts }}</span>
            </div>
            <div class="element__desc">
                <p>С гарантией:</p>
                <span>{{ $productsWithWarranty }}</span>
            </div>
        </div>

        <!-- Services -->
        <div class="home__statistics__element">
            <div class="element__name">
                <p>Сервисы</p>
                <span>{{ $totalServices }}</span>
            </div>

            <div class="element__desc">
                <p>Выпущено гарантий:</p>
                <span>Плейсхолдер</span> <!-- Placeholder for future implementation -->
            </div>
        </div>

        <!-- Warranties -->
        <div class="home__statistics__element">
            <div class="element__name">
                <p>Гарантии</p>
                <span>{{ $totalWarranties }}</span>
            </div>

            <div class="element__desc">
                <p>Просроченных гарантий:</p>
                <span>{{ $expiredWarranties }}</span>
            </div>
        </div>
    </div>
</div>
