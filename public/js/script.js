const langSelectElement = document.querySelector('[data-lang-select]');

langSelectElement.addEventListener('change', () => {
    console.log(langSelectElement.value)
})