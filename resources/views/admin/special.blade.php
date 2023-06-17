<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'accessories'])
</head>
<body>
    <div class="page-wrapper">
        
        @include("blocks.admin-nav")

        <section class="section">
            <div class="container">
                <h1 data-text="special_offers"></h1>

                <form method="post" class="form" action="{{route('special_offer.send')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="title" data-validity_text="skipped_title" required>
                    <input type="text" name="text" data-validity_text="skipped_text" required>
                    <input type="file" name="image" data-validity_text="skipped_image" required>
                    <input type="submit" value="отправить">
                </form>
            </div>
        </section>
        <section class="section special_offers">
            <div class="container">
                <div class="special_offers__row">
                    @foreach ($special_offers as $special_offer)
                            <div class="special_offers__item">
                                <h2>{{$special_offer->title}}</h2>
                                <img src="{{$special_offer->image_path}}" alt="">
                                <p>{{$special_offer->text}}</p>
                                <div class="date">{{$special_offer->created_at}}</div>
                            </div>
                    @endforeach
                </div>
            </div>
        </section>

        

        
    </div>
</body>
</html>