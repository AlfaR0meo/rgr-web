function addToCart(id, change_number = false) {
    if (sessionStorage.getItem("cart") == null) {
        sessionStorage.setItem("cart", id);
    } else {
        let cart = sessionStorage.getItem("cart").split(",");
        if (sessionStorage.getItem("cart") == "") {
            cart = [];
        }
        cart.push(id);
        sessionStorage.setItem("cart", cart);
    }

    if (change_number) {
        onNumberChange(id);
    }
}

function getCart() {
    let products_array = sessionStorage.getItem("cart").split(",");
    let products = {

    }
    products_array.forEach((item) => {
        if (products[item] == undefined) {
            products[item] = 1;
        } else {
            products[item]++;
        }
    })


    return products;
}

function onNumberChange(id) {
    if (id != undefined) {
        document.querySelector(`.cart__item[data-product_id="${id}"] .cart__count-number`).textContent = getCart()[id] || 0;
    }

    let counts = document.querySelectorAll(".cart__count-number");
    let sum = 0;
    for (let i = 0; i < counts.length; i++) {
        let id = counts[i].dataset.product_id;
        let count = counts[i];
        let cost_element = document.querySelector(`.cart__item[data-product_id="${id}"] .cart__price`);
        sum += parseFloat(cost_element.textContent) * count.textContent;
    }

    document.querySelector('input[name="product_ids"]').value = sessionStorage.getItem("cart");


    document.querySelector("#total-price").textContent = sum;
}

function removeFromCart(id, change_number = false) {
    let cart = sessionStorage.getItem("cart").split(",");
    cart.splice(cart.indexOf(id), 1);

    sessionStorage.setItem("cart", cart);

    if (change_number) {
        onNumberChange(id);
    }
}