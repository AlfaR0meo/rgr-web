<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'products'])
    <script src="./js/add_to_cart.js"></script>
</head>
<body>
    <div class="page-wrapper">
        
        @include("blocks.nav")

        <section class="section products">
            <div class="container">

                <h1 data-text="products"></h1>

                <div class="products__row">
                    @foreach ($products as $product)
                        <div class="products__item item-products">
                            <h3 class="item-products__name">{{$product->name}}</h3>
                            <p class="item-products__text">{{$product->text}}</p>
                            <img class="item-products__image" src="{{$product->image_path}}" alt="">
                            <div class="item-products__price">{{$product->cost}} ₽</div>
                            <button class="item-products__add-to-cart-btn" type="button"  data-product_id="{{$product->id}}" data-text="add_to_cart" onclick="addToCart(this.dataset.product_id)"></button>
                        </div>
                    @endforeach
                    <div class="products__item item-products">
                        <h3 class="item-products__name">Название товара</h3>
                        <p class="item-products__text">Описание товара Описание товара Описание товара Описание товара</p>
                        <img class="item-products__image" src="./img/home/555.jpg" alt="">
                        <div class="item-products__price">1000 ₽</div>
                        <button class="item-products__add-to-cart-btn" type="button">В корзину</button>
                    </div>
                </div>
            </div>
        </section>


        
    </div>
</body>
</html>