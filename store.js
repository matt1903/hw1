fetch("store-prod.php")
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

    const container = document.querySelector("#product-container");
    json.forEach(prod =>
        {
            const new_div_img = document.createElement('div');
            new_div_img.classList.add('product');
            const new_img = document.createElement('img');
            new_img.classList.add('img-style');
            new_img.src = 'data:image/jpeg;base64,' + prod.img;
            new_div_img.appendChild(new_img);
            container.appendChild(new_div_img);

            //creazione del div per le info
            const new_div_info = document.createElement('div');
            const new_div_codes = document.createElement('div');
            const new_div_quantity = document.createElement('div');
            new_div_codes.classList.add('codes-container');
            new_div_info.classList.add('info-container');
            new_div_quantity.classList.add('quantity-container');
           
            //definizione costanti 
            const new_h1 = document.createElement('h1');
            new_h1.textContent = `${ prod.NOME }`;
            const new_SKU = document.createElement('span');
            new_SKU.textContent = "SKU: " + `${ prod.SKU }`;
            const new_barcode = document.createElement('span');
            new_barcode.textContent = "Barcode: " + `${ prod.BARCODE }`;
            const new_weight = document.createElement('span');
            new_weight.textContent = "Weight: " + `${ prod.PESO }` + "Kg";
            const new_price = document.createElement('h1');
            new_price.textContent = "€" + `${ prod.PRICE }`;
            const new_button = document.createElement('a');
            new_button.textContent = "ADD TO CART";
            const new_box = document.createElement('input');
            new_box.type = "number";
            new_box.id = "quantity-box";
            new_box.min = 1;
            new_box.value = 1;

            new_button.addEventListener('click', () => {
                const quantity = new_box.value;

                new_button.href = `cart-insert.php?ID=${ prod.ID }&PREZZO=${ prod.PRICE }&QUANTITY=${ quantity }`;
            })
            //aggiungo lo stile agli elementi creati
            new_SKU.classList.add('span-style');
            new_barcode.classList.add('span-style');
            new_weight.classList.add('span-style');
            new_h1.classList.add('h1-style');
            new_price.classList.add('h1-style');
            new_button.classList.add('button-style');
            //aggiungo al contenitore di info i vari codici e info del prodotto
            new_div_codes.appendChild(new_SKU);
            new_div_codes.appendChild(new_barcode);
            new_div_codes.appendChild(new_weight);
            //aggiungo gli elementi al container principale
            new_div_info.appendChild(new_h1);
            new_div_info.appendChild(new_div_codes);
            new_div_info.appendChild(new_price);
            new_div_quantity.appendChild(new_box);
            new_div_quantity.appendChild(new_button);
            new_div_info.appendChild(new_div_quantity);

            new_div_img.appendChild(new_div_info);
        }
    )
}
