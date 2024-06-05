function scroll2Top(event)
{
    window.scrollTo({top: 0});      /*Funzione per scrollare fino all'inizio della pagina*/
}
const clickTop = document.querySelector('.back-top');
clickTop.addEventListener('click', scroll2Top);     /*attende un click sul bottone 'back-to-top*/

//far comparire una modale per la policy dei cookie
function cookieOnclick(event){
    cookie_modal.classList.remove('hidden');
    document.body.classList.add('no-scroll');
    cookieModalView.style.top = window.scrollY + 'px';        //scrollY --> equivalente di pageYOffset (deprecato)
}

//tornare indietro dalla modale
function backCookieOnClick(event){
    cookie_modal.classList.add('hidden');
    document.body.classList.remove('no-scroll');
}

const cookie = document.querySelector('#cookie-settings');
const back_cookie = document.querySelector('#cookie-arrow');
const cookie_modal = document.querySelector('#modal-hidden');
const cookieModalView = document.querySelector('#cookie-modal-container');
const cookie_continue = document.querySelector('#snc-button');
//const option = document.querySelector('.option-all');
cookie_continue.addEventListener('click', backCookieOnClick);
back_cookie.addEventListener('click', backCookieOnClick);
cookie.addEventListener('click', cookieOnclick);