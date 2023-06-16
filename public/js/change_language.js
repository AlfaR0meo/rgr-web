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
    }
};