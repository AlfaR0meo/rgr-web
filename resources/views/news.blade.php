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
                        <h2>New новость</h2>
                        <img src="./img/home/333.jpg" alt="">
                        <p>Текст новой новости! Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, reprehenderit? Minima totam veritatis provident. Quo blanditiis repudiandae dolorum molestias ullam.</p>
                        <div class="date">23/03/2023</div>
                    </div>
                    <div class="news__item">
                        <h2>Супер новость 2</h2>
                        <img src="./img/home/666.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ullam commodi aliquid dicta libero consequuntur eligendi provident eaque optio rem, minima nulla voluptatum amet dolores voluptas itaque exercitationem sapiente recusandae veritatis nemo vel, ipsam debitis! Eius libero minima quasi omnis accusantium explicabo magnam perspiciatis saepe.</p>
                        <div class="date">13/12/2002</div>
                    </div>
                    <div class="news__item">
                        <h2>Ошалеть, новость 3</h2>
                        <img src="./img/home/888.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui est vitae, iste ea beatae obcaecati nesciunt alias incidunt fugiat cumque et ipsa? Quidem suscipit eaque, neque provident optio iure tempora magni? Exercitationem laudantium repudiandae fuga molestias explicabo unde eum placeat.</p>
                        <div class="date">09/05/2022</div>
                    </div>
                </div>
            </div>
        </section>


        
    </div>
</body>
</html>