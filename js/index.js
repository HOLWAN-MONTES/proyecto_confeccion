const boton_Sobre = document.getElementById("dos")
const sobre_noso = document.getElementById("sobrenoso")
const princi = document.getElementById("princi")

boton_Sobre.addEventListener('click', (e)=>{
    e.preventDefault();
    // fond.style.opacity="0";
    // mostrardoc.style.background="#238276";
    sobre_noso.style.visibility="visible"; 
    princi.style.visibility="hidden" ;
})



