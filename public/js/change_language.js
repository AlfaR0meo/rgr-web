function changeLanguage(language) {
    let translatable_elements = Array.from(document.querySelectorAll("[data-text]")).concat(Array.from(document.head.querySelectorAll("[data-text]")));
    for (let element of translatable_elements) {
        element.textContent = strings[element.dataset.text][language];
    }   
}

let strings = {
    "test": {
        "ru": "тест",
        "en": "test"
    },
    "lang": {
        "ru": "ru",
        "en": "en"
    }
};

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
}

document.addEventListener("DOMContentLoaded", initializeLanguageSwitch);
