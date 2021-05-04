const btnmenu = document.getElementById('btn')
const nav = document.getElementById('nav')
const title = document.getElementById('title')

const btnC = document.getElementById('Pmostrar')
const btnCo = document.getElementById('mostrar')

btnC.addEventListener('click',function(){
    btnCo.classList.toggle('ul_users-active')
})





btnmenu.addEventListener('click',function(){
    nav.classList.toggle('mostrar')
    title.classList.toggle('title-active')
    btnmenu.classList.toggle('btn-active')
})

//ventana modal del registro_users en el usuario
let cerrar1 = document.querySelectorAll(".cerrar1")[0];
let abrir1 = document.querySelectorAll(".crear-user")[0];
let modal1 = document.querySelectorAll(".modal1")[0];
let modalC1 = document.querySelectorAll(".ventana-modal1")[0];

abrir1.addEventListener("click", function (e) {
    e.preventDefault();
    modalC1.style.opacity = "1";
    modalC1.style.visibility = "visible";
    modal1.classList.toggle("modal-close1");
});
cerrar1.addEventListener("click", function () {
    modal1.classList.toggle("modal-close1");
    setTimeout(function () {
        modalC1.style.opacity = "0";
        modalC1.style.visibility = "hidden";
    }, 850)
})
window.addEventListener("click", function (e) {
    console.log(e.target)
    if (e.target == modalC1) {
        modal1.classList.toggle("modal-close1");
        setTimeout(function () {
            modalC1.style.opacity = "0";
            modalC1.style.visibility = "hidden";
            alert("Digite Su Opcion Correctamente");
        }, 250)
    }
})

//ventana modal del registro_users para el registro de un nuevo documento
let cerrar = document.querySelectorAll(".cerrar")[0];
let abrir = document.querySelectorAll(".crear-doc")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalC = document.querySelectorAll(".ventana-modal")[0];

abrir.addEventListener("click", function (e) {
    e.preventDefault();
    modalC.style.opacity = "1";
    modalC.style.visibility = "visible";
    modal.classList.toggle("modal-close");
});
cerrar.addEventListener("click", function () {
    modal.classList.toggle("modal-close");
    setTimeout(function () {
        modalC.style.opacity = "0";
        modalC.style.visibility = "hidden";
    }, 850)
})
window.addEventListener("click", function (e) {
    console.log(e.target)
    if (e.target == modalC) {
        modal.classList.toggle("modal-close");
        setTimeout(function () {
            modalC.style.opacity = "0";
            modalC.style.visibility = "hidden";
            alert("Digite Su Opcion Correctamente");
        }, 250)
    }
})





























