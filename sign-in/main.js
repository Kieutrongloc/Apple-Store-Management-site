const appleAccount = {
    'get': 'http://localhost/www/manage_product/Apple-Store-Management-site/sign-in/rest-api//user-account-get.php',
}


function start(){
    hideMessage();
}
start();
//Log in

function signIn() {
    //get data
    let userId = document.getElementById("user-id").value
    let userPw = document.getElementById("user-pw").value
    let alertMessage = document.getElementById("alert-message")
    $.ajax({
        url : appleAccount.get,
        type : 'GET',
        success : function(result){ 
            var accountList = jQuery.parseJSON(result);
            for (var i=0;i<accountList.length;i++) {
                var emailDb = accountList[i].email;
                var passwordDb = accountList[i].password;
                var nameDb = accountList[i].first_name;
                if (userId=='' || userPw==''){
                    alertMessage.innerHTML="Please enter both fields";
                } else if (userId==emailDb && userPw==passwordDb){
                    window.location.href= "http://google.com"+"/"+nameDb;
                } else {
                    alertMessage.innerHTML="Apple ID or password is invalid";
                }
            }
        }
        
    });
}

function hideMessage(){
    let alertMessage = document.getElementById("alert-message")
    let userInput = document.getElementsByClassName("input-account")
    // userInput.addEventListener("click", alert())
    console.log(userInput)
}

// else if (userInput.addEventListener("change")){
//     alertMessage.style.display="none";
// }