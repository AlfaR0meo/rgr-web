<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'special_offers'])
    <script src="https://cdn.tiny.cloud/1/99vzagw34guk5b2v26t6eyqlbkoqeztrz6zavydzprtsb8oi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
                    <textarea type="text" name="text" data-validity_text="skipped_text"></textarea>
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
                                <p>{!!$special_offer->text!!}</p>
                                <div class="date">{{$special_offer->created_at}}</div>
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