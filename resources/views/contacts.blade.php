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
                            <div class="contacts__title" data-text="email"></div>
                            <div class="contacts__description">musical-instruments@mail.ru</div>
                        </div>
                    </div>

                    <div class="contacts__block">
                        <img class="contacts__image" src="./img/phone_icon.svg" alt="">
                        <div class="contacts__content">
                            <div class="contacts__title" data-text="phone"></div>
                            <div class="contacts__description">+7 (978) 300-30-66</div>
                        </div>
                    </div>

                    <div class="contacts__block">
                        <img class="contacts__image" src="./img/location_icon.svg" alt="">
                        <div class="contacts__content">
                            <div class="contacts__title" data-text="address"></div>
                            <div class="contacts__description" data-text="address_value"></div>
                        </div>
                    </div>

                    <div class="contacts__block">
                        <img class="contacts__image" src="./img/clock_icon.svg" alt="">
                        <div class="contacts__content">
                            <div class="contacts__title" data-text="work_hours"></div>
                            <div class="contacts__description"> <span data-text="mon-fri"></span> <span data-text="from"></span> 9:00 <span data-text="to"></span> 19:00 <br> <span data-text="sat"></span> <span data-text="from"></span> 10:00 <span data-text="to"></span> 16:00</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        
    </div>
</body>
</html>