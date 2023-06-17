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
                <h1>Новости админа</h1>

                <form method="post" class="form" action="{{route('news.send')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="title">
                    <input type="text" name="text">
                    <input type="file" name="image">
                    <input type="submit" value="отправить">
                </form>
            </div>
        </section>


        
    </div>
</body>
</html>