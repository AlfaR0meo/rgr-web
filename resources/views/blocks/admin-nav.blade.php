<header class="page-header">
    <nav class="nav">
        <div class="container">
            <ul class="nav__list">
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/home') }}" data-text="to_user"></a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/admin__news') }}" data-text="news"></a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/admin__special_offer') }}" data-text="special_offers"></a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/admin__products') }}" data-text="products"></a>
                </li>

                <li class="nav__item">
                    <a class="nav__link" href="{{ url('/admin__orders') }}" data-text="orders"></a>
                </li>

                <li class="nav__item">
                    <button data-lang="ru" data-text="lang" type="button"></button>
                </li>
                @if (isset($isAdmin) and ($isAdmin == true))
                    <li class="nav__item">
                        <button id="exit-button" type="button" onclick="document.querySelector('#logout').submit()"><span data-text="exit"></span> <span>({{$login}})</span></button>
                    </li>

                    <form action="{{route('admin.logout')}}" method="get" class="none" id="logout">
                        @csrf
                    </form>

                @endif
            </ul>
        </div>
    </nav>
</header>