const appleAccount = {
    'get': 'http://localhost/www/manage_product/Apple-Store-Management-site/sign-in/rest-api//user-account-get.php',
    'post': 'http://localhost/www/manage_product/Apple-Store-Management-site/sign-in/rest-api//user-account-post.php',
}


function start(){
    hideAlertMessage();
}
start();
var alertMessage = document.getElementById("alert-message")
//Log in
function signIn() {
    let userId = document.getElementById("user-id")
    let userPw = document.getElementById("user-pw")
    //get data
    $.ajax({
        url : appleAccount.post,
        type : 'POST',
        data: values ,
        success: function (response) {

           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        } 
    });
}

// Hide alert message when re-enter
function hideAlertMessage(){
    let userId = document.getElementById("user-id");
    let userPw = document.getElementById("user-pw");
    userId.addEventListener("click", function(){alertMessage.innerHTML=""});
    userPw.addEventListener("click", function(){alertMessage.innerHTML=""});
};


// var alertMessage = document.getElementById("alert-message")
// //Log in
// function signIn() {
//     let userId = document.getElementById("user-id")
//     let userPw = document.getElementById("user-pw")
//     //get data
//     $.ajax({
//         url : appleAccount.get,
//         type : 'GET',
//         success : function(result){ 
//             let accountList = jQuery.parseJSON(result);
//             for (let i=0;i<accountList.length;i++) {
//                 let emailDb = accountList[i].email;
//                 let passwordDb = accountList[i].password;
//                 let nameDb = accountList[i].first_name;
//                 if (userId.value=='' || userPw.value==''){
//                     alertMessage.innerHTML="Please enter both fields";
//                 } else if (userId.value!==emailDb || userPw.value!==passwordDb){
//                     alertMessage.innerHTML="Apple ID or password is invalid";
//                 } else {
//                     //window.location.href= "http://google.com"+"/"+nameDb;
//                 }
//             }
//         }
        
//     });
// }
