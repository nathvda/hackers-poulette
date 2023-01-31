let lastName = document.getElementById('lastNamejdke');

lastName.addEventListener('keyup', () => {

    if (lastName.value.length < 2 || lastName.value.length > 255){


        lastName.style.border = "1px solid red";


    } else { 
        lastName.style.border = "1px solid var(--mainColor)";
    }

});


let firstName = document.getElementById('firstNamejdke');

firstName.addEventListener('keyup', () => {

    if (firstName.value.length < 2 || firstName.value.length > 255){
    

        firstName.style.border = "1px solid red";


    } else { 
        firstName.style.border = "1px solid var(--mainColor)";

    }

});

let email = document.getElementById('emailjdke');

email.addEventListener('keyup', () => {

    if (email.value.length < 2 || email.value.length > 255){
        email.style.border = "1px solid red";

    } else { 
        email.style.border = "1px solid var(--mainColor)";
        
    }

});

let comment = document.getElementById('commentjdke');

comment.addEventListener('keyup', () => {

        console.log(comment.value);

    if (comment.value.length < 250 || comment.value.length > 1000){

        comment.style.border = "1px solid red";

    } else { 
        comment.style.border = "1px solid var(--mainColor)";
        
    }

});