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

function signIn() {
    //get data
    var userId = document.getElementById("user-id").value
    var userPw = document.getElementById("user-pw").value
    $.ajax({
        url : appleAccount.get, // my php file
        type : 'GET', // type of the HTTP request
        success : function(result){ 
            var accountList = jQuery.parseJSON(result);
            for (var i=0;i<accountList.length;i++) {
                let emailDb = accountList[i].email;
                let passwordDb = accountList[i].password;
                if (userId==''){
                    alert("Please enter your Apple ID")
                } else if (userId==emailDb && userPw==passwordDb){
                    window.location.href= "http://google.com";
                }
                console.log(emailDb)
            }
        }
        
    });
}