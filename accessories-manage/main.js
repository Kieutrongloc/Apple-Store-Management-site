// import * as fs from 'fs';

// var myAPI = "http://127.0.0.1:5500/data.json";

// fs.writeFile('myjsonfile.json', 'text', 'utf8');


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