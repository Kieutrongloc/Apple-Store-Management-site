const appleAccount = {
    'save': 'http://127.0.0.1:5500/sign-up/rest-api/user-account-save.php',
}

const form = document.getElementById('form');

form.addEventListener('submit', function(e) {
    e.preventDefault();
    
    fetch(appleAccount.save, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: payload,
        })
            // .then(res => res.json())
            // .then(data => console.log(data))
            // .catch(err => console.log(err));
})

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