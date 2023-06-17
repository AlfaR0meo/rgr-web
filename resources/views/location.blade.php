<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'location'])
</head>
<body>
    <div class="page-wrapper">
        
        @include("blocks.nav")

        <section class="section location">
            <div class="container">
                <h1 data-text="location"></h1>
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A167fc9950e4b227012309cb56da536c8bae06eacda2be561bc3fd0fad22b00dc&amp;source=constructor" width="728" height="579" frameborder="0"></iframe>
            </div>
        </section>


        
    </div>
</body>
</html>