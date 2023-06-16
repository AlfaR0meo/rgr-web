const langSelectBtn = document.querySelector('button[data-lang]');

langSelectBtn.addEventListener('click', () => {
    if (langSelectBtn.textContent === 'ru') {
        langSelectBtn.textContent = 'en';
        langSelectBtn.dataset.lang = 'en';

    } else {
        langSelectBtn.textContent = 'ru';
        langSelectBtn.dataset.lang = 'ru';
        
    }
})