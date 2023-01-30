
let lastName = document.getElementById('lastName');

lastName.addEventListener('keyup', () => {

    if (lastName.value.length < 2 || lastName.value.length > 255){

        if (/^[a-zA-ZÀ-ù-]{2,255}$/.test(lastName.value) === false){

        lastName.style.border = "1px solid red";

        }

    } else { 
        lastName.style.border = "border: 1px solid var(--mainColor);";
    }

});


let firstName = document.getElementById('firstName');

firstName.addEventListener('keyup', () => {

    if (firstName.value.length < 2 || firstName.value.length > 255){
        firstName.style.border = "1px solid red";

    } else { 
        firstName.style.border = "border: 1px solid var(--mainColor);";

    }

});

let email = document.getElementById('email');

email.addEventListener('keyup', () => {

    if (email.value.length < 2 || email.value.length > 255){
        email.style.border = "1px solid red";

    } else { 
        email.style.border = "border: 1px solid var(--mainColor);";
        
    }

});