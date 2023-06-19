<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'orders'])
</head>
<body>
    <div class="page-wrapper s-p">
        @include("blocks.admin-nav")

        <section class="section orders">
            <div class="container">


                <h1 data-text="orders"></h1>


                <div class="orders__body">

                    <div class="orders__item">
                        <div class="orders__date-created">2023-06-19</div>
                        <div class="orders__fio">Иванов Иван Антонович</div>
                        <div class="orders__phone">+79788009090</div>
                        <div class="orders__delivery-method">mail</div>
                        <div class="orders__payment-method">cash</div>
                        <div class="orders__products">
                            <div><span>Список товаров</span>:</div>
                            <div class="orders__products-list">
                                
                            </div>
                        </div>
                    </div>
                    <div class="orders__item">
                        <div class="orders__date-created">2023-06-19</div>
                        <div class="orders__fio">Иванов Иван Антонович</div>
                        <div class="orders__phone">+79788009090</div>
                        <div class="orders__delivery-method">mail</div>
                        <div class="orders__payment-method">cash</div>
                        <div class="orders__products">regr</div>
                    </div>

                </div>


            </div>
        </section>
        
    </div>

    <script>
        async function testOrders() {
            let response = await fetch("./get_orders", {
                method: "GET"
            });
            let text = await response.text();
            let orders = JSON.parse(text);
            console.log(text);
            console.log(orders);
        }
        testOrders();
    </script>
</body>
</html>