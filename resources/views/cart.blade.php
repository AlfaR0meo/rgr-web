<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'cart'])
</head>
<body>
    <div class="page-wrapper">
        
        @include("blocks.nav")

        <section class="section cart">
            <div class="container">
                <h1 data-text="cart"></h1>
                <div class="cart__row">
                    <div class="cart__item">
                        <h3 class="cart__name">Название товара</h3>
                        <img class="cart__image" src="./img/home/777.jpg" alt="">
                        <div class="cart__price">2000 ₽</div>
                        <div class="cart__count">
                            <button class="cart__btn cart__btn--dec" type="button">-</button>
                            <div class="cart__count-number">1</div>
                            <button class="cart__btn cart__btn--inc" type="button">+</button>
                        </div>
                    </div>
                </div>
                <div class="cart__total-price">Итого: <span id="total-price">100000</span> ₽</div>
            </div>
        </section>


        
    </div>
</body>
</html>