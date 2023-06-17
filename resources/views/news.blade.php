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
                <div class="card-row">
                    <div class="card-item">
                        <h2>New новость</h2>
                        <img src="./img/home/333.jpg" alt="">
                        <p>Текст новой новости! Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, reprehenderit? Minima totam veritatis provident. Quo blanditiis repudiandae dolorum molestias ullam.</p>
                        <div class="date">23/03/2023</div>
                    </div>
                    <div class="card-item">
                        <h2>Супер новость 2</h2>
                        <img src="./img/home/666.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ullam commodi aliquid dicta libero consequuntur eligendi provident eaque optio rem, minima nulla voluptatum amet dolores voluptas itaque exercitationem sapiente recusandae veritatis nemo vel, ipsam debitis! Eius libero minima quasi omnis accusantium explicabo magnam perspiciatis saepe.</p>
                        <div class="date">13/12/2002</div>
                    </div>
                    <div class="card-item">
                        <h2>Ошалеть, новость 3</h2>
                        <img src="./img/home/888.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui est vitae, iste ea beatae obcaecati nesciunt alias incidunt fugiat cumque et ipsa? Quidem suscipit eaque, neque provident optio iure tempora magni? Exercitationem laudantium repudiandae fuga molestias explicabo unde eum placeat.</p>
                        <div class="date">09/05/2022</div>
                    </div>
                    @foreach ($news as $news_card)
                        <div class="card-item">
                            <h2>{{$news_card->title}}</h2>
                            <img src="{{$news_card->image_path}}" alt="">
                            <p>{!!$news_card->text!!}</p>
                            <div class="date">{{$news_card->created_at}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <section class="section special_offers">
            <div class="container">
                <h1 data-text="special_offers"></h1>
                <div class="card-row">
                    @foreach ($special_offers as $special_offer)
                        <div class="card-item">
                            <h2>{{$special_offer->title}}</h2>
                            <img src="{{$special_offer->image_path}}" alt="">
                            <p>{!!$special_offer->text!!}</p>
                            <div class="date">{{$special_offer->created_at}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        
    </div>
</body>
</html>