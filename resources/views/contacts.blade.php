<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'contacts'])
</head>
<body>
    <div class="page-wrapper">
        
        @include("blocks.nav")

        <section class="section contacts">
            <div class="container">
                <h1 data-text="contacts"></h1>
                <div class="contacts__body">

                    <div class="contacts__block">
                        <img class="contacts__image" src="./img/email_icon.svg" alt="">
                        <div class="contacts__content">
                            <div class="contacts__title">Email</div>
                            <div class="contacts__description">musical-instruments@mail.ru</div>
                        </div>
                    </div>

                    <div class="contacts__block">
                        <img class="contacts__image" src="./img/phone_icon.svg" alt="">
                        <div class="contacts__content">
                            <div class="contacts__title">Телефон</div>
                            <div class="contacts__description">+7 (978) 300-30-66</div>
                        </div>
                    </div>

                    <div class="contacts__block">
                        <img class="contacts__image" src="./img/location_icon.svg" alt="">
                        <div class="contacts__content">
                            <div class="contacts__title">Адрес</div>
                            <div class="contacts__description">г. Севастополь, ул. Баха, 9/34</div>
                        </div>
                    </div>

                    <div class="contacts__block">
                        <img class="contacts__image" src="./img/clock_icon.svg" alt="">
                        <div class="contacts__content">
                            <div class="contacts__title">Часы работы</div>
                            <div class="contacts__description">Пн-Пт с 9:00 до 19:00 <br> Сб с 10:00 до 16:00</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        
    </div>
</body>
</html>