// HIDE/UNHIDE NAV MENU IN MOBILE RESPONSIVE (NOT DONE)
function showNavmenu() {
  var x = document.querySelectorAll(".nav-res-mobile-hide");
  for (var i=0;i<x.length;i++) {
  if (x[i].style.display === "none") {
    x[i].style.display = "block";
  } else {
    x[i].style.display = "none";
  }}
}


// HIDE/UNHIDE CART CHECKOUT
function showSubnav(event) {
    var x = document.getElementById("subnav-cart-checkout");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }


// SELECT VALUE TO CART BUTTON
function addCart(event, id) {
  var btnItem = event.target
  var product = btnItem.parentElement
  var productID = id;
  console.log(product)
  var productName = product.querySelector(".accessories-nav-item-name, .devices-nav-item-name").innerText
  var productPrice = product.querySelector(".accessories-nav-item-price, .devices-nav-item-price").dataset.price
  var productImage = product.querySelector(".accessories-nav-item-img, .additional-devices-nav-item-img").src
  addcart(productID, productName, productPrice, productImage)
}

// // ADD VALUE SELECTED TO CART
async function addcart(productID, productName, productPrice, productImage) {
  const data = {
    id: productID,
    name: productName, 
    price: productPrice,
    image: productImage
  }
  const response = await fetch(cartAPI.save, {
    method: 'POST',
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data) 
  });
  response.json().then(function(data){
    renderCartHTML(data)
  })

}

function renderCartHTML(cartItem) {
  var cartContent = '';
  var newCartContent = '';
  // console.log(cartItem);
  for (i=0;i<cartItem.length;i++)
  {
      var newCartId = cartItem[i].id;
      // console.log(newCartId)
      var newCartName = cartItem[i].name;
      var newCartImage = cartItem[i].image;
      var newCartQuantity = cartItem[i].quantity;
      var newCartPrice = parseInt(cartItem[i].price)*newCartQuantity
      cartContent = '<div style="display: flex;justify-content: space-between;padding-bottom: 10px;" class="subnav-item-list"><img src="'+newCartImage+'" alt="" class="checkout-item-img"><div class="cart-checkout-item-list"><div style="display: flex;"><p style="color:black" class="checkout-item-name">'+newCartName+'</p></div><div style="display: flex;justify-content: space-between;"><input style="max-width: 40px;" type="number" value="'+newCartQuantity+'" min="1" class="checkout-item-qtt"><p style="color:black" class="checkout-item-price"><span>$</span><span class="checkout-item-pricenumber">'+newCartPrice+'</span><span>.00</span></p></div></div><p style="color:red;margin: 20px 0px;cursor: pointer;" class="checkout-item-remove" onclick="deleteCart('+newCartId+')">Remove</p></div>'
      newCartContent += cartContent
  }
  console.log(cartItem, newCartContent)
  $(".cart-checkout-table-item").append(newCartContent);
}



// CACULATE TOTAL PRICE/REMOVE ITEM
// TOTAL PRICE

function cartTotal() {
  var cartItem = document.querySelectorAll(".cart-checkout-item-list")
  var totalPriceCart = 0
  for (var i=0;i<cartItem.length;i++) {
    var inputValue = cartItem[i].querySelector("input").value
    var productPrice = cartItem[i].querySelector(".checkout-item-pricenumber").innerHTML
    var totalPriceUnit = inputValue*productPrice
    totalPriceCart = totalPriceCart + totalPriceUnit
    inputChange()
    bagQuanity()
  }
  var cartTotal = document.querySelector(".subnav-checkout-total-number")
  cartTotal.innerHTML = "Total: $" + totalPriceCart +".00"
  // console.log(cartTotal)
}

 // (CACULATE TOTAL ITEMS AT "BAG")
 function bagQuanity() {
   var cartItem = document.querySelectorAll(".cart-checkout-item-list")
   var cartItematbag = document.querySelector(".cart-quantity-at-bag")
   var productQuantity = 0
   for (var i=0;i<cartItem.length;i++) {
    var cartItemQuantity = document.querySelector(".checkout-quantity")
   var inputValue = Number(cartItem[i].querySelector("input").value)
   productQuantity = inputValue + productQuantity
  //  console.log(typeof inputValue)
   cartItemQuantity.innerHTML = " (" + productQuantity + ")"
   cartItematbag.innerHTML = productQuantity
   }
   inputChange()
 }


// Delete item from checkout cart
// function deleteCart() {
//   var cartItem = document.querySelectorAll(".subnav-item-list")
//   for (var i=0;i<cartItem.length;i++) {
//     var removeButton = document.querySelectorAll(".checkout-item-remove")
//     removeButton[i].addEventListener("click",function(event){
//       var cartDelete = event.target
//       var cartItemRemove = cartDelete.parentElement
//       cartItemRemove.remove()
//       cartTotal()
      
//       // console.log(cartItemRemove)
//     })   
//   }
// }

function inputChange() {
  var cartItem = document.querySelectorAll(".subnav-item-list")
  for (var i=0;i<cartItem.length;i++) {
    var inputValue = cartItem[i].querySelector("input")
    inputValue.addEventListener("change",function(){
      cartTotal()
    })
  }
}
