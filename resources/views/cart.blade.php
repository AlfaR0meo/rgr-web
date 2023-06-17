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
            </div>
        </section>


        
    </div>
</body>
</html>