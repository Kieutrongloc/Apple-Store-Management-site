// SHOW PRODUCT AT HOMEPAGE

const productApi = {
    'accessories': 'http://localhost/www/manage_product/Apple-Store-Management-site/accessories-manage/accessories-get.php',
    'loudandclear': 'http://localhost/www/manage_product/Apple-Store-Management-site/accessories-manage/loudandclear-get.php',
}
const cartAPI = {
    'get': 'http://127.0.0.1/www/manage_product/Apple-Store-Management-site/rest-api/cart-get.php',
    'save': 'http://127.0.0.1/www/manage_product/Apple-Store-Management-site/rest-api/cart-save.php',
    'delete': 'http://127.0.0.1/www/manage_product/Apple-Store-Management-site/rest-api/cart-delete.php',
    'update': 'http://127.0.0.1/www/manage_product/Apple-Store-Management-site/rest-api/cart-update.php',
}

function start() {
    getProductAccesories(function(productAccessories){
        renderProductSlideHTMLAccessories(productAccessories);
    });
    getItem(function(cartItem){
        renderCartHTML(cartItem);
    })
    getProductLoudandclear(function(productLoudandclear){
        renderProductSlideHTMLLoudandclear(productLoudandclear);
    });
}

start();

//GET PRODUCT LIST
//accessories

function getProductAccesories(callback) {
    fetch(productApi.accessories)
    .then(function(response) {
        return response.json();
    })
    .then(callback);
}

function renderProductSlideHTMLAccessories(productAccessories) {
    let productContent = '';
    let newProductContent = '';
    for (i=0;i<productAccessories.length;i++)
    {
        let newProductId = productAccessories[i].id
        let newProductName = productAccessories[i].name;
        let newProductImage = productAccessories[i].image;
        let newProductStatus = productAccessories[i].status;
        let newProductPrice = productAccessories[i].price;
        productContent = '<div <div class="accessories-nav-item border-radius-shadow hover-style"><i onclick="addCart(event, '+newProductId+')" class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;"></i><img src="'+newProductImage+'" alt="" class="accessories-nav-item-img"><div class="fourth-accessory-nav-box"><p class="nav-item-accessories-status">'+newProductStatus+'</p><p class="accessories-nav-item-name">'+newProductName+'</p><p class="accessories-nav-item-price" data-price="'+newProductPrice+'">$'+newProductPrice+'.00</p></div></div></div>'
        newProductContent += productContent
    }
    $(".fourth-accessories-nav").append(newProductContent);
}

//loudandclear

function getProductLoudandclear(callback) {
    fetch(productApi.loudandclear)
    .then(function(response) {
        return response.json();
    })
    .then(callback);
}

function renderProductSlideHTMLLoudandclear(productLoudandclear) {
    let productContent = '';
    let newProductContent = '';
    for (i=0;i<productLoudandclear.length;i++)
    {
        let newProductId = productLoudandclear[i].id
        let newProductName = productLoudandclear[i].name;
        let newProductImage = productLoudandclear[i].image;
        let newProductStatus = productLoudandclear[i].status;
        let newProductPrice = productLoudandclear[i].price;
        productContent = '<div href="" class="additional-devices-nav-item border-radius-shadow hover-style"><i onclick="addCart(event, '+newProductId+')" class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;color:black;"></i><img src="'+newProductImage+'" alt="" class="additional-devices-nav-item-img"><div class="devices-nav-item-text-box"><p class="nav-item-devices-status">'+newProductStatus+'</p><p class="devices-nav-item-name">'+newProductName+'</p><p class="devices-nav-item-price" data-price="'+newProductPrice+'">$'+newProductPrice+'.00</p></div></div>'
        newProductContent += productContent
    }
    // console.log(newProductContent)
    $(".fifth-additional-devices-nav").append(newProductContent);
}

//------CART API------------


// GET
function getItem(callback) {
    fetch(cartAPI.get)
    .then(function(cartresponse) {
        return cartresponse.json();
    })
    .then(callback);
}

function renderCartHTML(cartItem) {
    var cartContent = '';
    var newCartContent = '';
    // console.log(cartItem);
    $(".cart-checkout-table-item").html('');
    for (i=0;i<cartItem.length;i++)
    {
        var newCartId = cartItem[i].id;
        // console.log(newCartId)
        var newCartName = cartItem[i].name;
        var newCartImage = cartItem[i].image;
        var newCartQuantity = cartItem[i].quantity;
        var newCartPrice = parseInt(cartItem[i].price)*newCartQuantity
        cartContent = '<div style="display: flex;justify-content: space-between;padding-bottom: 10px;" class="subnav-item-list"><img src="'+newCartImage+'" alt="" class="checkout-item-img"><div class="cart-checkout-item-list"><div style="display: flex;"><p style="color:black" class="checkout-item-name">'+newCartName+'</p></div><div style="display: flex;justify-content: space-between;"><input onclick="inputChange(event, '+newCartId+')" style="max-width: 40px;" type="number" value="'+newCartQuantity+'" min="1" class="checkout-item-qtt"><p style="color:black" class="checkout-item-price"><span>$</span><span class="checkout-item-pricenumber">'+newCartPrice+'</span><span>.00</span></p></div></div><p style="color:red;margin: 20px 0px;cursor: pointer;" class="checkout-item-remove" onclick="deleteCart('+newCartId+')">Remove</p></div>'
        newCartContent += cartContent
    }
    $(".cart-checkout-table-item").append(newCartContent);
}

//DELETE:
function deleteCart(id) {
    var options = {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        },
    };
    fetch(cartAPI.delete +'/?id=' + id, options)
        .then(function(cartresponse) {
            cartresponse.json().then(function(data){
                renderCartHTML(data)
              })
        })
        .then(function() {
        });
    // getItem(renderCartHTML)
}


//UPDATE///(CHANGE QUANTITY ONLY)

function inputChange(event, id) {
        var quantity = parseInt(event.target.parentElement.querySelector("input").value)
        // console.log(quantity)
        var options = {
            method: 'PATCH',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
        };
        fetch(cartAPI.update +'/?id=' + id +'&quantity=' + quantity, options)
            .then(function(cartresponse) {
                cartresponse.json().then(function(data){
                    renderCartHTML(data)
                  })
            })
            .then(function() {
            });


}

