<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'cart'])
    <script src="./js/add_to_cart.js"></script>
    <script src="./js/cart.js"></script>
</head>
<body>
    <div class="page-wrapper">
        
        @include("blocks.nav")

        <section class="section cart">
            <div class="container">

                <h1 data-text="cart"></h1>

                <div class="cart__row">
                    <!-- <div class="cart__item">
                        <h3 class="cart__name">Виолончель</h3>
                        <img class="cart__image" src="./img/home/777.jpg" alt="">
                        <div class="cart__price">2000 ₽</div>
                        <div class="cart__count">
                            <button class="cart__btn cart__btn--dec" type="button">-</button>
                            <div class="cart__count-number">1</div>
                            <button class="cart__btn cart__btn--inc" type="button">+</button>
                        </div>
                    </div> -->
                    @foreach ($products as $product)
                        <div class="cart__item" data-product_id="{{$product->id}}">
                            <h3 class="cart__name">{{$product->name}}</h3>
                            <img class="cart__image" src="{{$product->image_path}}" alt="">
                            <div class="cart__price">{{$product->cost}} ₽</div>
                            <div class="cart__count">
                                <button class="cart__btn cart__btn--dec" type="button" data-product_id="{{$product->id}}" onclick="removeFromCart(this.dataset.product_id, true)">-</button>
                                <div class="cart__count-number" data-product_id="{{$product->id}}"></div>
                                <button class="cart__btn cart__btn--inc" type="button" data-product_id="{{$product->id}}" onclick="addToCart(this.dataset.product_id, true)">+</button>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="cart__total-price"><span data-text="total">Итого: </span> <span id="total-price"></span> ₽</div>
            
                <form method="post" action="{{ route('cart.send') }}" class="cart__form">

                    @csrf
                
                    <div class="cart__form-group">
                        <input name="product_ids" type="hidden">
                    </div>

                    <div class="cart__form-group">
                        <label data-text="delivery_method"></label>
                        <select name="delivery_method">
                            <option value="pickup" data-text="pickup"></option>
                            <option value="courier" data-text="courier"></option>
                            <option value="mail" data-text="mail"></option>
                        </select>
                    </div>

                    <div class="cart__form-group">
                        <label data-text="payment_method"></label>
                        <select name="payment_method">
                            <option value="cash" data-text="cash"></option>
                            <option value="cashless" data-text="cashless"></option>
                        </select>
                    </div>

                    <div class="cart__form-group">
                        <label data-text="fullname_cart"></label>
                        <input name="fullname" type="text">
                    </div>

                    <div class="cart__form-group">
                        <label data-text="phone_cart"></label>
                        <input name="phone" type="phone">
                    </div>

                    <button class="button" type="submit">Оформить заказ</button>

                </form>

            </div>
        </section>


        



    </div>
</body>
</html>