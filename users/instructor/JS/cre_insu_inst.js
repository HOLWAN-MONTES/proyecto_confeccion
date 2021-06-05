const ajax = ({ url, data, succes })=>{
    const option = {
        method: "POST",
        headers: {
            'Content-type': 'application/json',
        },
        body: JSON.stringify(data)
    }
    fetch(url, option)
     .then(res => res.ok ? res.json() : Promise.reject(res))
     .then(data => succes(data))
     .catch(err => console.error(err));
}

window.addEventListener('submit', (e)=> {
    e.preventDefault();
    if(e.target.matches('#form_insum')){
        ajax({
            url: "../../php/crear_insumo_instru/formu_ingreso_instru.php", 
            data: {
                insumo: document.getElementById('insumo').value,
                cant_insumo: document.getElementById('cant_insumo').value,
                mate_textil: document.getElementById('mate_textil').value,
                cant_m_textil: document.getElementById('cant_m_textil').value,
                maquinaria: document.getElementById('maquinaria').value,
                cant_maquinaria: document.getElementById('cant_maquinaria').value,
            },
            succes: (data) => {
                alert("Correcto");
            }
        })
    }
})