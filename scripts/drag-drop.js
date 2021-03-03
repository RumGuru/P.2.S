const shop_items = document.querySelectorAll(".shop-item");
const shop_cart = document.querySelector(".shop-cart");
const total_price = document.querySelector(".total-price");

console.log(shop_items);
console.log(shop_cart);

function clearShoppingCart()
{
    window.location = window.location;
}



let draggedItem = null;
let itemTitle = null;
let itemPrice = null;
let totalPrice = 0;

const renderSideCartView = (title, price) =>{
    return( `
    <p>${title} -->Price:${price}</p>
    <br/>
    ` ); 
}


const calcPrice = (htmlPrice) =>{
    let price =htmlPrice;
    price = price.replace('$','');
    numPrice = parseFloat(price);
    totalPrice += numPrice;
    
}



for (let i=0 ; i<shop_items.length ; i++){
    const item = shop_items[i];
    console.log(item.lastChild);

	item.addEventListener('dragstart', function () {
		draggedItem = item;
        console.log(item);
        itemTitle = document.querySelector(`.card-title-${i}`).innerHTML;
        itemPrice = document.querySelector('.text-muted').innerHTML;
        console.log(itemPrice);
        console.log(itemTitle);
		setTimeout(function () {
			item.style.display = 'none';
		}, 0)
	});

	item.addEventListener('dragend', function () {
		setTimeout(function () {
			draggedItem.style.display = 'block';
			draggedItem = null;
		}, 0);
	})


}

const cart = shop_cart;
        console.log(cart);

    cart.addEventListener('dragover', function (e) {
        e.preventDefault();
    });
    
    cart.addEventListener('dragenter', function (e) {
        e.preventDefault();
        this.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
    });

    cart.addEventListener('dragleave', function (e) {
        this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
    });

    cart.addEventListener('drop', function (e) {
        console.log('drop');
        calcPrice(itemPrice);
        cart.insertAdjacentHTML('beforeend',(renderSideCartView(itemTitle,itemPrice)));
        total_price.innerHTML=(`Total Price --> ${totalPrice}`);
        draggedItem.remove();
        this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
    });