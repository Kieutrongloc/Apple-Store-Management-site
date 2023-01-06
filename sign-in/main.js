const appleAccount = {
    'get': 'http://localhost/www/manage_product/Apple-Store-Management-site/sign-in/rest-api//user-account-get.php',
}

// function getAccountInfo() {
//     fetch(appleAccount.get)
//     .then(function(accountinfo) {
//         var accountData = JSON.parse(accountinfo);
//         console.log(accountData);
//     })
// }
// getAccountInfo()

$.ajax({
    url : appleAccount.get, // my php file
    type : 'GET', // type of the HTTP request
    success : function(result){ 
       var obj = jQuery.parseJSON(result);
       console.log(obj);
    }
});