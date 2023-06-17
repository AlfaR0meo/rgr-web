<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'feedback'])
</head>
<body>
    <div class="page-wrapper no-p">
        
        @include("blocks.nav")

        <section class="section feedback">
            <div class="container">
                <h1 data-text="feedback"></h1>
                <form method="post" class="feedback-form" action="{{ route('feedback.send') }}">
                    @csrf
                    <input name="fullname" type="text" data-placeholder_text="print_fullname">
                    <input name="phone" type="phone" data-placeholder_text="print_phone">
                    <input name="email" type="email" data-placeholder_text="print_email">
                    <textarea name="message" data-placeholder_text="print_text"></textarea>
                    <input type="submit" value="Отправить">
                </form>
            </div>
        </section>


        
    </div>
</body>
</html>