<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'accessories'])
    <script src="https://cdn.tiny.cloud/1/99vzagw34guk5b2v26t6eyqlbkoqeztrz6zavydzprtsb8oi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <script defer>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ]
        });
    </script>

    <div class="page-wrapper s-p">
        
        @include("blocks.admin-nav")

        <section class="section">
            <div class="container">
                <h1 data-text="news"></h1>

                <form method="post" class="form" action="{{route('news.send')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="title" data-validity_text="skipped_title" required>
                    <textarea type="text" name="text" data-validity_text="skipped_text"></textarea>
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
                            <p>{!!$news_card->text!!}</p>
                            <div class="date">{{$news_card->created_at}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        
    </div>
</body>
</html>