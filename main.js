let carts = document.querySelectorAll(".fa-cart-plus");
let products = [
    {
        name: 'PUMA Mens Essentials Big Logo Full Zip Hoodie',
        price: 17,
        tag: "T-shirt",
        incart: 0
    },
    {
        name:"Youth Hooded Sweatshirt, Style G18500B",
        price:14,
        tag: "Sweatshirt",
        incart:0
    },
    {
        name: 'PUMA Mens Essentials Big Logo Full Zip Hoodie',
        price: 17,
        tag: "T-shirt1",
        incart: 0
    }

];
for (let i = 0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalcost(products[i]);
    })
}
function onloadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if (productNumbers) {
        document.querySelector('.number span').textContent = productNumbers;
    }
}
function cartNumbers(products) {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);
    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1)
        document.querySelector('.number span').textContent = productNumbers + 1;
    }
    else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.number span').textContent = 1;
    }
    setItems(products);
}
function setItems(products) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    if (cartItems != null) {
        if(cartItems[products.tag] == undefined){
            cartItems={
                ...cartItems,
                [products.tag]:products
            }
        }
        cartItems[products.tag].incart += 1;
    }
    else {
        products.incart = 1;
        cartItems = {
            [products.tag]: products
        }
    }

    localStorage.setItem('productsInCart', JSON.stringify(cartItems));
}
function totalcost(products){
    // console.log('The products price is ',products.price);
    let cartCost=localStorage.getItem('totalcost');
    console.log('My cart cost is ',cartCost);
    if(cartCost!=null){
        cartCost=parseInt(cartCost);
        localStorage.setItem('totalcost',cartCost + products.price);
    }
    else{
        localStorage.setItem('totalcost',products.price);
    }
}
function displayCart(){
    let cartItems=localStorage.getItem('productsInCart');
    cartItems=JSON.parse(cartItems);
    let productContainer=document.querySelector('.container');
    console.log(cartItems);
    if(cartItems && productContainer)
    {
        productContainer.innerHTML=' ';
        Object.values(cartItems).map(item =>{
            productContainer.innerHTML += ` 
            <div class=" product">
            <ion-icon name="close-outline"></ion-icon>
            <img src="./images/${item.tag}.jpg">
            <span>${item.name}</span>`
        })
    }

}

onloadCartNumbers();
displayCart();