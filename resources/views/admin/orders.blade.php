<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'accessories'])
</head>
<body>
    <div class="page-wrapper">
        
        @include("blocks.admin-nav")

        <h1>Заказы админа</h1>


        
    </div>

    <script>
        async function testOrders() {
            let response = await fetch("./get_orders", {
                method: "GET"
            });

            let text = await response.text();
            debugger;
            let orders = JSON.parse(text);
            debugger;
        }

        testOrders();
    </script>
</body>
</html>