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

                <form method="post" class="form" action="{{route('registration.send')}}">
                    @csrf
                    <label class="input__title" for="fullname">Имя:</label>
                    <input class="form__input" type="text" name="fullname" placeholder="Введите ваше имя">
                    <label class="input__title" for="email">Email:</label>
                    <input class="form__input" type="text" name="email" placeholder="Введите ваш e-mail">
                    <label class="input__title" for="login">Логин</label>
                    <input class="form__input" type="text" name="login" placeholder="Придумайте логин" onblur="checkLoginOccupation()">
                    <label class="input__title" for="password">Пароль</label>
                    <input class="form__input" type="text" name="password" placeholder="Придумайте пароль">
                    <input class="form__input input__title input__submit" type="submit" value="отправить">
                </form>
            </div>
        </section>


        
    </div>
</body>
</html>