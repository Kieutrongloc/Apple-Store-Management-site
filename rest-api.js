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
    var productContent = '';
    var newProductContent = '';
    for (i=0;i<productAccessories.length;i++)
    {
        var newProductId = productAccessories[i].id
        var newProductName = productAccessories[i].name;
        var newProductImage = productAccessories[i].image;
        var newProductStatus = productAccessories[i].status;
        var newProductPrice = productAccessories[i].price;
        productContent = '<div href="" class="accessories-nav-item border-radius-shadow hover-style"><i onclick="addCart(event, '+newProductId+')" class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;"></i><img src="'+newProductImage+'" alt="" class="accessories-nav-item-img"><div class="fourth-accessory-nav-box"><p class="nav-item-accessories-status">'+newProductStatus+'</p><p class="accessories-nav-item-name">'+newProductName+'</p><p class="accessories-nav-item-price"  data-price="'+newProductPrice+'">$'+newProductPrice+'.00</p></div></div>'
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
    var productContent = '';
    var newProductContent = '';
    for (i=0;i<productLoudandclear.length;i++)
    {
        var newProductId = productLoudandclear[i].id
        var newProductName = productLoudandclear[i].name;
        var newProductImage = productLoudandclear[i].image;
        var newProductStatus = productLoudandclear[i].status;
        var newProductPrice = productLoudandclear[i].price;
        // productContent = '<div href="" class="accessories-nav-item border-radius-shadow hover-style"><i onclick="addCart(event, '+newProductId+')" class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;"></i><img src="'+newProductImage+'" alt="" class="accessories-nav-item-img"><div class="fourth-accessory-nav-box"><p class="nav-item-accessories-status">'+newProductStatus+'</p><p class="accessories-nav-item-name">'+newProductName+'</p><p class="accessories-nav-item-price"  data-price="'+newProductPrice+'">$'+newProductPrice+'.00</p></div></div>'
        productContent = '<div href="" class="additional-devices-nav-item border-radius-shadow hover-style"><i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;color:black;"></i><img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MU8F2?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1540596407165" alt="" class="additional-devices-nav-item-img"><div class="devices-nav-item-text-box"><p class="nav-item-devices-status">Free Engraving</p><p class="devices-nav-item-name">Apple Pencil (2nd generation)</p><p class="devices-nav-item-price">$129.00</p></div></div>'
        newProductContent += productContent
    }
    $(".fourth-accessories-nav").append(newProductContent);
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

