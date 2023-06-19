<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'news'])
    <script src="https://cdn.tiny.cloud/1/99vzagw34guk5b2v26t6eyqlbkoqeztrz6zavydzprtsb8oi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <div class="page-wrapper s-p">
        
        @include("blocks.admin-nav")

        <section class="section">
            <div class="container">
                <h1 data-text="news"></h1>

                <form method="post" class="admin-form" action="{{route('news.send')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="title" data-validity_text="skipped_title" required data-placeholder_text="placeholder_title">
                    <textarea type="text" name="text" data-validity_text="skipped_text"></textarea>
                    <label class="label-file-btn" for="input-file" data-text="choose_file"></label>
                    <input id="input-file" type="file" name="image" data-validity_text="skipped_image" required>
                    <input type="submit" data-value_text="send">
                </form>
            </div>
        </section>

        <section class="section news">
            <div class="container">
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

        
    </div>
    <script>
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
</body>
</html>