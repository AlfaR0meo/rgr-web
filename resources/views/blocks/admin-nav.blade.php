<header class="page-header">
    <nav class="nav">
        <div class="container">
            <ul class="nav__list">
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/home') }}">Пользователь</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/admin__news') }}">Новости админа</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/admin__special_offer') }}">Акции админа</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/admin__products') }}">Товары админа</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/admin__orders') }}">Заказы админа</a>
                </li>
                <li class="nav__item">
                    <button data-lang="ru" data-text="lang" type="button"></button>
                </li>
            </ul>
        </div>
    </nav>
</header>