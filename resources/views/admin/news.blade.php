<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'accessories'])
</head>
<body>
    <div class="page-wrapper s-p">
        
        @include("blocks.admin-nav")

        <section class="section">
            <div class="container">
                <h1 data-text="news"></h1>

                <form method="post" class="form" action="{{route('news.send')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="title" data-validity_text="skipped_title" required>
                    <input type="text" name="text" data-validity_text="skipped_text" required>
                    <input type="file" name="image" data-validity_text="skipped_image" required>
                    <input type="submit" value="отправить">
                </form>
            </div>
        </section>
        <section class="section news">
            <div class="container">
                <div class="news__row">
                    @foreach ($news as $news_card)
                        <div class="news__item">
                            <h2>{{$news_card->title}}</h2>
                            <img src="{{$news_card->image_path}}" alt="">
                            <p>{{$news_card->text}}</p>
                            <div class="date">{{$news_card->created_at}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        
    </div>
</body>
</html>