<!DOCTYPE html>
<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'login'])
</head>
<body>
    <div class="page-wrapper no-p">
        
        @include("blocks.admin-nav")

        <section class="section login" style="background-image: linear-gradient(to top, rgb(0 0 0 / .7), transparent), url('./img/home/333.jpg');">
            <div class="container">
                <h1 data-text="login" style="color: white;"></h1>
                <form method="post" class="feedback-form" action="{{ route('login.send') }}">
                    @csrf
                    <input name="login" type="text" data-placeholder_text="print_login" required data-validity_text="skipped_login">
                    <input name="password" type="password" data-placeholder_text="print_password" required data-validity_text="skipped_password">
                    <button class="button" type="submit" data-text="login"></button>
                </form>
            </div>
        </section>

        
    </div>
</body>
</html>