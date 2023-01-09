const appleAccount = {
    'post': 'http://localhost/www/manage_product/Apple-Store-Management-site/sign-up/rest-API/user-account-post.php',
}
function validateMyForm(){
    // document.getElementById('error_msg').innerHTML= '';
    var formData = new FormData(document.getElementById('form-signup'))
    const form = document.getElementById('form-signup');
    const data = Object.fromEntries(new FormData(form).entries());  
    fetch(appleAccount.post,{
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          },
        body: JSON.stringify(data)
        
    })
}

// check password if not the same
$('#password').keyup(function() {
    if ($(this).val().length == 0) {
      $('#message').hide();
    } else {
      $('#message').show();
    }
  }).keyup();
  
$('#password, #confirm_password').on('keyup', function () {
    if ($('#password').val() == $('#confirm_password').val()) {
      $('#message').css('display', 'none');
    } else 
      $('#message').html('Not Matching').css({'color': 'red', 'display':'block'});
  });

// // clear form after click continue
// $("#form-submit").click(function () {
//   $("form").trigger("reset");
// });















// function createAccount() {
//     const form = document.getElementById('form');
//     var first_name = form.querySelector('input[name="first_name"]').value
//     var last_name = form.querySelector('input[name="last_name"]').value
//     var country = form.querySelector('.country').value
//     var birthday = form.querySelector('input[name="birthday"]').value
//     var email = form.querySelector('input[name="email"]').value
//     var password = form.querySelector('input[name="password"]').value
//     var phone = form.querySelector('input[name="phone"]').value
//     var verify_with = form.querySelector('input[name="verify_with"]:checked').value
//     var announcements = (form.querySelector('input[name="announcements"]').checked).toString()
//     var ads = (form.querySelector('input[name="ads"]').checked).toString()
//     const data = {
//         first_name: first_name,
//         last_name: last_name, 
//         country: country,
//         birthday: birthday,
//         email: email,
//         password: password,
//         phone: phone,
//         verify_with: verify_with,
//         announcements: announcements,
//         ads: ads,
//     }
//     console.log(data)
//     fetch(appleAccount.post,{
//         method: 'POST',
//         headers: {
//             'Accept': 'application/json',
//             'Content-Type': 'application/json'
//           },
//         body: JSON.stringify(data) 
//     })
// }









// async function createAccount(first_name, last_name, country, birthday, email, password, phone, verify_with) {
//   }

// form.addEventListener('submit', function(e) {
//     e.preventDefault();
    
//     // fetch(appleAccount.save, {
//     //         method: 'POST',
//     //         headers: {
//     //             'Accept': 'application/json',
//     //             'Content-Type': 'application/json'
//     //         },
//     //         body: payload,
//     //     })
//             // .then(res => res.json())
//             // .then(data => console.log(data))
//             // .catch(err => console.log(err));
// })

// function createAccount() {
//     var btnCreate = event.target.parentElement
//     console.log(btnCreate)
// }

// async function createAccount(first_name, last_name, country, birthday, email, password, phone, verify_with, announcements, ads) {
//    const data = new FormData(document.getElementById('form'))
//    console.log(data)
    // const data = {
    //     first_name: first_name,
    //     last_name: last_name,
    //     country: country,
    //     birthday: birthday,
    //     email: email,
    //     password: password,
    //     phone: phone,
    //     verify_with: verify_with,
    //     announcements: announcements,
    //     ads: ads,
    // }
    // console(data)
    // const response = await fetch(appleAccount.save, {
    //     method: 'POST',
    //     headers: {
    //         'Accept': 'application/json',
    //         'Content-Type': 'application/json'
    //     },
    //     body: JSON.stringify(data)
    // });
    // return response.json()
// }