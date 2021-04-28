
/* $(".submenu").click(function(){
    $(this).children("ul").slideToggle();
})


$("ul").click(function(a){
    a.stopPropagation();
})
 */

const btnmenu = document.getElementById('btn')
const nav = document.getElementById('nav')
const title = document.getElementById('title')

/* const subm = document.getElementById('subm')
const id = document.getElementById('mos')

subm.addEventListener('click',function(){
   // id.classList.toggle('mos'); 
    id.style.display = 'block'

}) */


btnmenu.addEventListener('click',function(){
    nav.classList.toggle('mostrar')
    title.classList.toggle('title-active')
    btnmenu.classList.toggle('btn-active')
})





























