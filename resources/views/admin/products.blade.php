<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'products'])
    <script src="https://cdn.tiny.cloud/1/99vzagw34guk5b2v26t6eyqlbkoqeztrz6zavydzprtsb8oi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <div class="page-wrapper s-p">
        
        @include("blocks.admin-nav")
        <section class="section">
            <div class="container">
                <h1 data-text="products"></h1>

                <form method="post" class="admin-form" action="{{route('product.send')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" data-validity_text="skipped_name" required data-placeholder_text="placeholder_product_name">
                    <textarea type="text" name="text" data-validity_text="skipped_text"></textarea>
                    <label class="label-file-btn" for="input-file" data-text="choose_file"></label>
                    <input id="input-file" type="file" accept="image/*" name="image" data-validity_text="skipped_image" required>
                    <input type="number" name="cost" data-validity_text="skipped_cost" required data-placeholder_text="placeholder_cost">
                    <input type="submit" data-value_text="send">
                </form>
            </div>
        </section>

        <section class="section products">
            <div class="container">
                <div class="products__row admin">
                    @foreach ($products as $product)
                        <div class="products__item item-products">
                            <h3 class="item-products__name">{{$product->name}}</h3>
                            <p class="item-products__text">{{$product->text}}</p>
                            <img class="item-products__image" src="{{$product->image_path}}" alt="">
                            <div class="item-products__price">{{$product->cost}} ₽</div>
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