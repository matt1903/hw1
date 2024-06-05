fetch("cart-extract.php")
    .then(onSuccess, onError)
    .then(onJson);


function onSuccess(response){
    return response.json();
}

function onError(error){
    console.log('Error: ' + error);
}

function onJson(json){
    console.log('JSON ricevuto');
    console.log(json);

    if(json !== 0){
            const hid = document.querySelector("#hid-cart");
            const show = document.querySelector("#shop-container");
            hid.classList.add('hidden');
            show.classList.remove('hidden');
    }

    let tot = 0;

    const container = document.querySelector("#shop-container");
    json.forEach(prod =>
        {
            const head_container = document.createElement('div');
            head_container.id = 'head-container';
                const your_cart = document.createElement('h1');
                your_cart.classList.add('h1-style');
                your_cart.textContent = 'Your Cart';
                const payment_info = document.createElement('div');
                payment_info.id = 'payment_info';
                    const div_total = document.createElement('div');
                    div_total.id = 'div-total';
                        const h1_total = document.createElement('h1');
                        h1_total.classList.add('h1-style');
                        const total = document.createElement('h1');
                        tot = `${ prod.price }` * `${ prod.quantity }`;
                        total.textContent = "€" + tot;
                    const check_out_btn = document.createElement('a');
                    check_out_btn.href = 'cart-delete.php';
                    check_out_btn.textContent = 'CHECK OUT';
                    check_out_btn.id = 'check-out-btn';

           
            //new_img.src = 'data:image/jpeg;base64,' + prod.img; --> modo per codificare l'immagine
            
        }
    )
    
}