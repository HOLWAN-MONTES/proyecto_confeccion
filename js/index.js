//botones de las paginas 
const boton_Sobre = document.getElementById("dos");
const boton_servicios = document.getElementById("tres");
const boton_contactenos = document.getElementById("cuatro");

//imagen y div principal
const princi = document.getElementById("princi");
const imagen = document.getElementById("imagen");

//contenido de las paginas 
const sobre_noso = document.getElementById("sobrenoso");
const servicios = document.getElementById("servicios");
const contactar = document.getElementById("contactar");

boton_Sobre.addEventListener('click', (e)=>{
    e.preventDefault();
    sobre_noso.style.visibility="visible"; 
    sobre_noso.style.opacity= "1";
    sobre_noso.style.display = "block";
    princi.style.display="none";
    imagen.style.display = "none";
    servicios.style.display="none";
    contactar.style.display="none";    
});

boton_servicios.addEventListener('click', (e)=>{
    e.preventDefault();
    servicios.style.display="block";
    servicios.style.opacity = "1";
    servicios.style.visibility="visible";
    princi.style.display="none";
    imagen.style.display="none";
    sobre_noso.style.display="none";
    contactar.style.display="none";
});

boton_contactenos.addEventListener('click', (e)=>{
    contactar.style.display="block";
    contactar.style.opacity="1";
    contactar.style.visibility="visible";
    princi.style.display="none";
    imagen.style.display="none";
    sobre_noso.style.display="none";
    servicios.style.display="none";

});



