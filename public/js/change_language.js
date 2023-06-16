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
    
};