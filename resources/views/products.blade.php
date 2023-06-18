<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'products'])
</head>
<body>
    <div class="page-wrapper">
        
        @include("blocks.nav")

        <section class="section products">
            <div class="container">

                <h1 data-text="products"></h1>

                <div class="products__row">
                    <div class="products__item item-products">
                        <h3 class="item-products__name">Название товара</h3>
                        <p class="item-products__text">Описание товара Описание товара Описание товара Описание товара</p>
                        <img class="item-products__image" src="./img/home/222.jpg" alt="">
                        <div class="item-products__price">1000₽</div>
                    </div>
                    <div class="products__item item-products">
                        <h3 class="item-products__name">Название товара</h3>
                        <p class="item-products__text">Описание товара Описание товара Описание товара Описание товара</p>
                        <img class="item-products__image" src="./img/home/555.jpg" alt="">
                        <div class="item-products__price">1000₽</div>
                    </div>
                </div>
            </div>
        </section>


        
    </div>
</body>
</html>