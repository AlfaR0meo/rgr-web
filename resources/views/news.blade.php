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