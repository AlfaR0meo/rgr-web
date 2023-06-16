<header class="page-header">
    <nav class="nav">
        <div class="container">
            <ul class="nav__list">
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/home') }}">К пользователю</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/admin__news') }}">Новости</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/admin__special_offer') }}">Акции</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/admin__products') }}">Товары</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/admin__orders') }}">Заказы</a>
                </li>
                <li class="nav__item">
                    <button data-lang="ru" data-text="lang" type="button"></button>
                </li>
            </ul>
        </div>
    </nav>
</header>