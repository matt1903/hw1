function checkEmail(email) {
    var good = true;

    if(!/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(email.value).toLowerCase())) {
        good = false;
    } 

    return good;
}


function checkPassword(psw){
    console.log("sono nel checkpsw");
    var strenght = 0;

    //controllo sulla lunghezza della password
    if(psw.value.length < 8){
        console.log("Password troppo corta.");
    }
    else
        strenght++;


    //controllo se ci sono caratteri minuscoli nella psw
    if(/[a-z]/.test(psw.value) === true){
        console.log("La password contiene caratteri minuscoli");
        strenght++;
    }
    else
        console.log("La password non contiene caratteri minuscoli");

    //controllo se ci sono caratteri maiuscoli nella psw
    if(/[A-Z]/.test(psw.value) === true){
        console.log("La password contiene caratteri maiuscoli");
        strenght++;
    }
    else
        console.log("La password non contiene caratteri maiuscoli");

    //controllo se ci sono numeri nella psw
    if(/\d/.test(psw.value) === true){
        console.log("La password contiene numeri");
        strenght++;
    }
    else
        console.log("La password non contiene numeri");

    //controllo se ci sono caratteri speciali nella password
    if(/[^a-zA-Z0-9]/.test(psw.value) === true){
        console.log("La password contiene caratteri speciali");
        strenght++;
    }
    else
        console.log("La password non contiene caratteri speciali");

    return strenght;
}

function onSubmit(event){
    const email = document.querySelector("#email");
    const psw = document.querySelector("#password");
    const goodEmail = checkEmail(email);
    const strg = checkPassword(psw);

    if(strg !== 5){
        console.log("Password troppo debole");
        //mostro messaggio di errore
        const errPass = document.querySelector("#err-ps");
        errPass.classList.remove("hidden");
        event.preventDefault();
    }
    else if(goodEmail === false){
        console.log("Email non conforme");

        const errEmail = document.querySelector("#err-email");
        errEmail.classList.remove("hidden");
        event.preventDefault();
    }
}

const form = document.querySelector("#reg-form");
form.addEventListener("submit", onSubmit);