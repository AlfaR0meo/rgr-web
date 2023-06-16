function addToCart(id) {
    if (sessionStorage.getItem("cart") == null) {
        sessionStorage.setItem("cart", id);
    } else {
        let cart = sessionStorage.getItem("cart").split(",");
        cart.push(id);
        sessionStorage.setItem("cart", cart);
    }
}

function getCart() {
    return sessionStorage.getItem("cart").split(",");
}