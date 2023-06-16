<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'news'])
</head>
<body>
    <div class="page-wrapper">
        
        @include("blocks.nav")

        <section class="section news">
            <div class="container">
                <h1 data-text="news"></h1>
                <div class="news__row">
                    <div class="news__item">
                        <img src="./img/home/111.jpg" alt="">
                        <h2>New новость</h2>
                        <p>Текст новой новости!</p>
                        <div class="date">23.03.2023</div>
                    </div>
                    <div class="news__item">2</div>
                    <div class="news__item">3</div>
                    <div class="news__item">4</div>
                    <div class="news__item">5</div>
                    <div class="news__item">6</div>
                    <div class="news__item">7</div>
                    <div class="news__item">8</div>
                    <div class="news__item">9</div>
                </div>
            </div>
        </section>


        
    </div>
</body>
</html>