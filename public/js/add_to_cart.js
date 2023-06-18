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

function removeFromCart(id) {
    let cart = sessionStorage.getItem("cart").split(",");
    cart.splice(spproducts_array.findIndex(id), 1)
    
    sessionStorage.setItem("cart", cart);
}