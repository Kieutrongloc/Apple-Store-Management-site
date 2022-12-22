// import * as fs from 'fs';

// var postApi = "http://localhost/www/manage_product/Apple-Store-Management-site/rest-api/cart-get.php";

// fs.writeFile('myjsonfile.json', 'text', 'utf8');

// fetch(postApi)
//    .then(function(response){
//     return response.json();
//     //JSON.parse: JSON -> JS
//    })
//    .then(function(cart){
//     console.log(cart)
//    });


// SHOW PRODUCT AT HOMEPAGE

const cartApi = 'http://localhost/www/manage_product/Apple-Store-Management-site/accessories-manage/accessories-get.php';

function start() {
    getProduct(function(product){
        renderProductSlide(product);
    });
}

start();

function getProduct(callback) {
    fetch(cartApi)
    .then(function(response) {
        return response.json();
    })
    .then(callback);
}

// GET 

function renderProductSlide(product) {
    var addProduct = document.createElement("div")
    var productName = document.querySelector(".accessories-nav-item-name");
    var productImage = document.querySelector(".accessories-nav-item-img");
    var productStatus = document.querySelector(".nav-item-accessories-status");
    var productPrice = document.querySelector(".accessories-nav-item-price");
    for (let i = 0; i < product.length; i++) {
        
        var newProductName = product[i].name;
        var newProductImage = product[i].image;
        var newProductStatus = product[i].status;
        var newProductPrice = product[i].price;
        
        productName.innerHTML = newProductName;
        productImage.src = newProductImage;
        productStatus.innerHTML = newProductStatus;
        productPrice.innerHTML = newProductPrice;
    }
    
    var productContent = '<div href="" class="accessories-nav-item border-radius-shadow hover-style"><i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;"></i><img src="'+newProductImage+'" alt="" class="accessories-nav-item-img"><ul class="nav-item-color"><li class="nav-item-color-dot"><img class="color-dot-img color-dot-brown" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-spacegray-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037004000" alt=""></li><li class="nav-item-color-dot"><img class="color-dot-img color-dot-whiteblue" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-blue-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037003000" alt=""></li><li class="nav-item-color-dot"><img class="color-dot-img color-dot-white" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-white-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037006000" alt=""></li><li class="nav-item-color-dot"><img class="color-dot-img color-dot-yellow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-yellow-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037005000" alt=""></li><li class="nav-item-color-dot"><img class="color-dot-img color-dot-orange" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-orange-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037003000" alt=""></li></ul><div class="fourth-accessory-nav-box"><p class="nav-item-accessories-status">'+newProductStatus+'</p><p class="accessories-nav-item-name">'+newProductName+'</p><p class="accessories-nav-item-price">$'+newProductPrice+'.00</p></div></div>'
    addProduct.innerHTML = productContent
    var productTable = document.querySelector(".accessories-div-append");
    productTable.append(addProduct)
}

//END OF SHOW PRODUCT LIST AT HOMEPAGE

// const cartApi = 'http://localhost/www/manage_product/Apple-Store-Management-site/rest-api/cart-get.php';

// function start() {
//     getCart(function(cart){
//         renderCart(cart);
//     });
// }

// start();

// function getCart(callback) {
//     fetch(cartApi)
//     .then(function(response) {
//         return response.json();
//     })
//     .then(callback);
// }

// // GET 
// function renderCart(cart) {
//     var productName = document.querySelector(".checkout-item-name");
//     var productImage = document.querySelector(".checkout-item-img");
//     var productQuantity = document.querySelector(".checkout-item-qtt");
//     var productPrice = document.querySelector(".checkout-item-price");

//     var newProductName = cart[0].name;
//     var newProductImage = cart[0].image;
//     var newProductQuantity = cart[0].quantity;
//     var newProductPrice = cart[0].price;

//     productName.innerHTML = newProductName;
//     productImage.src = newProductImage;
//     productQuantity.value = newProductQuantity;
//     productPrice.innerHTML = '$'+ newProductPrice;
// }




// function start() {
//     getAccessorieslist(renderAccessorieslist);
//     handleCreateFormAccessories()
// }

// start()


// // functions

// function getAccessorieslist(callback) {
//     fetch(myAPI)
//     .then(function(response) {
//         return response.json();
//     })
//     .then(callback);
// }

// function createAccessoriesProduct(data,callback) {
//     var options = {
//         method: 'post',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify(data)
//     };
//     console.log('options', options)
//     fetch(myAPI, options)
//         .then(function(response) {
//             response.json();
//         })
//         .then(callback)
// }

// function renderAccessorieslist(accessoriesList) {
//     var CellName = document.querySelector('.accessories-cell-name').innerHTML
//     // HOW THE HELL KO LAY DC NAME
//     accessoriesList.map(getName);
//     var CellNameJson = function getName(item) {
//         return [item.name]
//     }
//     accessoriesCellName = CellnameJSON
//     // console.log(accessoriesList)
// }


// // Dung post bao loi 05 Method Not Allowed
// function handleCreateFormAccessories() {
//     var createBtn = document.querySelector(".accessories-submit")
//     createBtn.onclick = function() {
//         var name = document.querySelector(".accinput-name").value;
//         var img = document.querySelector(".accinput-img").value;
//         var status = document.querySelector(".accinput-status").value;
//         var price = document.querySelector(".accinput-price").value;
//         // console.log(status)

//         var formData = {
//             name: name,
//             image: img,
//             status: status,
//             price: price,
//         };

//         createAccessoriesProduct(formData)
//     }
// }







// // function renderAccessorieslist(accessoriesList) {
// //     var accessoriesListblock = document.querySelector('.accessories-cell-list')
// //     var htmls = accessoriesList.map(function(accessoriesListitem) {
// //         return `
// //             <li>
// //                 <p>${accessoriesListitem.name}</p>
// //                 <i>${accessoriesListitem.image}</i>
// //                 <p>${accessoriesListitem.status}</p>
// //                 <p>${accessoriesListitem.price}</p>
// //             </li>
// //         `;
// //     });
// //     accessoriesListblock.innerHTML = htmls.join('')
// // }