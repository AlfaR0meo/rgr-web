function initializeCart() {
    let cart = getCart();
    let products = document.querySelectorAll(".cart__item");
    for (let i = 0; i < products.length; i++) {
        if (cart[products[i].dataset.product_id] == undefined) {
            products[i].remove();
        } else {
            let id = products[i].dataset.product_id;
            document.querySelector(`.cart__item[data-product_id="${id}"] .cart__count-number`).textContent = getCart()[id];
        }
        
    }

    onNumberChange();
}

document.addEventListener("DOMContentLoaded", initializeCart);