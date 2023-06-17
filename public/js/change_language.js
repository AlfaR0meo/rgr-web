function changeLanguage(language) {
    localStorage.setItem("language", language);
    let translatable_elements = Array.from(document.querySelectorAll("[data-text]")).concat(Array.from(document.head.querySelectorAll("[data-text]")));
    for (let element of translatable_elements) {
        try {
            element.textContent = strings[element.dataset.text][language];
        } catch (error) {
            element.textContent = "Перевод отсутствует";
        }
    }

    let translatable_validation_messages = document.querySelectorAll("[data-validity_text]");
    for (let element of translatable_validation_messages) {

        function createValidityMessage(event) {
            event.target.setCustomValidity("");

            if (!event.target.validity.valid) {
                try {
                    event.target.setCustomValidity(strings[element.dataset.validity_text][language]);
                } catch (error) {
                    event.target.setCustomValidity("Перевод отсутствует");
                }
            }
        }

        function removeValidityMessage(event) {
            event.target.setCustomValidity("");
        }


        element.addEventListener("invalid", createValidityMessage);
        element.addEventListener("input", removeValidityMessage);
        
        
    }
}

function switchLanguage() {
    let languageSwitchButton = document.querySelector('button[data-lang]');
    languageSwitchButton.dataset.lang = languageSwitchButton.dataset.lang == "ru" ? "en" : "ru";

    changeLanguage(languageSwitchButton.dataset.lang);
}

function initializeLanguageSwitch() {
    let languageSwitchButton = document.querySelector('button[data-lang]');
    

    if (localStorage.getItem("language") == null) {
        localStorage.setItem("language", "ru");
        languageSwitchButton.dataset.lang = "ru";
    } else {
        languageSwitchButton.dataset.lang = localStorage.getItem("language");
    }

    languageSwitchButton.addEventListener("click", switchLanguage);
    changeLanguage(localStorage.getItem("language"));
}

document.addEventListener("DOMContentLoaded", initializeLanguageSwitch);



let strings = {
    "test": {
        "ru": "тест",
        "en": "test"
    },
    "lang": {
        "ru": "ru",
        "en": "en"
    },
    "home": {
        "ru": "Главная",
        "en": "Home"
    },
    "news": {
        "ru": "Новости",
        "en": "News"
    },
    "news_special_offers": {
        "ru": "Новости и акции",
        "en": "News and special offers"
    },
    "products": {
        "ru": "Товары",
        "en": "Products"
    },
    "contacts": {
        "ru": "Контакты",
        "en": "Contacts"
    },
    "cart": {
        "ru": "Корзина",
        "en": "Cart"
    },
    "instruments": {
        "ru": "Инструменты",
        "en": "Instruments"
    },
    "accessories": {
        "ru": "Аксессуары",
        "en": "Accessories"
    },
    "feedback": {
        "ru": "Обратная связь",
        "en": "Feedback"
    },
    "support": {
        "ru": "Поддержка",
        "en": "Support"
    },
    "location": {
        "ru": "Местоположение",
        "en": "Location"
    },
    "site_map": {
        "ru": "Карта сайта",
        "en": "Site map"
    },
    "music_instruments_sale": {
        "ru": "Продажа музыкальных инструментов",
        "en": "Music instruments sale"
    },
    "skipped_email": {
        "ru": "Вы пропустили поле электронной почты",
        "en": "Email field is required"
    },
    "skipped_message": {
        "ru": "Продажа музыкальных инструментов",
        "en": "Message field is required"
    },
    "format_violated_email": {
        "ru": "Некорректный адрес электронной почты",
        "en": "Wrong format for email"
    },
    "format_violated_phone": {
        "ru": "Некорректный телефон",
        "en": "Wrong format for phone"
    },
    "skipped_product_ids": {
        "ru": "Корзина пуста",
        "en": "Cart is empty"
    },
    "skipped_fullname": {
        "ru": "Вы пропустили поле имя",
        "en": "Name field is required"
    },
    "skipped_phone": {
        "ru": "Вы пропустили поле телефон",
        "en": "Phone field is required"
    },
    "skipped_delivery_method": {
        "ru": "Вы не выбрали метод доставки",
        "en": "Delivery method field is required"
    },
    "skipped_payment_method": {
        "ru": "Вы не выбрали метод оплаты",
        "en": "Payment method field is required"
    },
    "format_violated_product_ids": {
        "ru": "Некорректное содержимое корзины",
        "en": "Wrong format for cart"
    },
    "format_violated_delivery_method": {
        "ru": "Некорректный способ доставки",
        "en": "Wrong format for delivery method"
    },
    "format_violated_payment_method": {
        "ru": "Некорректный способ оплаты",
        "en": "Wrong format for payment method"
    },
    "skipped_login": {
        "ru": "Вы пропустили поле логин",
        "en": "Login field is required"
    },
    "skipped_password": {
        "ru": "Вы пропустили поле пароль",
        "en": "Password field is required"
    },
    "skipped_title": {
        "ru": "Вы пропустили поле название",
        "en": "Title field is required"
    },
    "skipped_text": {
        "ru": "Вы пропустили поле текст",
        "en": "Text field is required"
    },
    "skipped_image": {
        "ru": "Нужно прикрепить изображение",
        "en": "Image field is required"
    },
    "skipped_name": {
        "ru": "Вы пропустили поле наименование",
        "en": "Name field is required"
    },
    "skipped_cost": {
        "ru": "Нужно указать цену",
        "en": "Cost field is required"
    },
    "format_violated_cost": {
        "ru": "Неверный формат цены",
        "en": "Wrong format for cost field"
    },
    "special_offers": {
        "ru": "Акции",
        "en": "Special offers"
    },
    "to_user": {
        "ru": "К пользователю",
        "en": "To user"
    },
    "orders": {
        "ru": "Заказы",
        "en": "Orders"
    },
    "to_admin": {
        "ru": "К админу",
        "en": "To admin"
    },
    "history_classification": {
        "ru": "В истории было предпринято множество попыток классифицировать музыкальные инструменты. В академической сфере распространено деление инструментов на струнные, духовые, ударные, народные, клавишные и др. Данная классификация имеет много недостатков, в первую очередь непонятен её критерий: струнные и духовые инструменты обособлены на основе источника звука, ударные — на основе типа звукоизвлечения, народные — на основе сферы бытования, клавишные — на основе звукорегулятора. Более того, к народным относят инструменты, не имевшие распространения в народе (клавишные гусли, баян); к клавишным причисляют фортепиано, являющееся к тому же струнным и ударным инструментом.",
        "en": "There have been many attempts in history to classify musical instruments. In the academic sphere, the division of instruments into strings, wind instruments, percussion instruments, folk instruments, keyboards, etc. is widespread. This classification has many disadvantages, first of all, its criterion is unclear: stringed and wind instruments are separated based on the sound source, percussion — based on the type of sound extraction, folk — based on the sphere of existence, keyboards — based on the sound regulator. Moreover, folk instruments include instruments that were not widespread among the people (keyboard psaltery, accordion); keyboards include the piano, which is also a stringed and percussion instrument."
    }
    
};