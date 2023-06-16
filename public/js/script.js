const langSelectElement = document.querySelector('[data-lang]');

langSelectElement.addEventListener('change', () => {
    console.log(langSelectElement.value)
})