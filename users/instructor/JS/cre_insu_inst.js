const ajax = ({ url, data, succes, method })=>{
    const option = {
        method,
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
    if(e.target.matches('#form_ingreso')){
        ajax({
            url: "../../php/crear_insumo_instru/formu_ingreso_instru.php", 
            data: {
                doc_pro: document.getElementById('doc_prove').value,
                insumo: document.getElementById('insumo').value,
                cant_insumo: document.getElementById('cant_insumo').value,
                mate_textil: document.getElementById('mate_textil').value,
                cant_m_textil: document.getElementById('cant_m_textil').value,
                maquinaria: document.getElementById('maquinaria').value,
                cant_maquinaria: document.getElementById('cant_maquinaria').value,
                user: parseInt(document.getElementById('user').value),
            },
            succes: (data) => {
                alert("Correcto");
                document.getElementById('form_ingreso').reset();
            },
            method: "POST"
        })
    }
    else if(e.target.matches('#form_ins')){
        ajax({
            url: "../../php/crear_insumo_instru/rval_insumos_inst.php", 
            data: {
                tip_ins: document.getElementById('tipo_insumos').value,
                nom_insu: document.getElementById('nom_insumo').value,
                marc_insu: document.getElementById('marca_insu').value,
                col_insu: document.getElementById('color_insu').value,
            },
            succes: (data) => {
                alert("Correcto, Insumo Registrado");
                document.getElementById('form_ins').reset();
                const selec = document.getElementById('insumo');
                ajax({
                    url: "../../php/crear_insumo_instru/rval_insumos_inst.php?tabla=insumo",
                    succes: ({data}) => {
                        let html = "";
                        html+=`<option>SELECCIONAR</option>`;
                        data.forEach((e,i) => {
                            html+=`<option value="${data[i].ID_INSUMOS}" style="text-transform:uppercase">${data[i].NOM_INSUMOS}</option>`;

                        });
                        selec.innerHTML = html;
                    },
                    method: "GET"
                })
            },
            method: "POST"
        })
    }
    else if(e.target.matches('#mat_textil')){
        ajax({
            url: "../../php/crear_mtextil_instru/val_material_instru.php", 
            data: {
                nom_mat: document.getElementById('nom_material').value,
                tipo_tela: document.getElementById('tipo_tela').value,
                marc_tel: document.getElementById('marca_tex').value,
                col_tel: document.getElementById('color_tex').value,
                metraje: document.getElementById('metraje').value,
                cant_rol: document.getElementById('cant_rollos').value,
            },
            succes: (data) => {
                alert("Correcto, Material Textil Registrado");
                document.getElementById('mat_textil').reset();
            },
            method: "POST"
        })
    }
    else if(e.target.matches('#form_maqui')){
        ajax({
            url: "../../php/crear_maqui_instru/val_maqui_instru.php", 
            data: {
                serial: document.getElementById('serial').value,
                tipo_maqui: document.getElementById('tipo_maqui').value,
                marc_maqui: document.getElementById('marca').value,
                col_maqui: document.getElementById('color').value,
            },
            succes: (data) => {
                alert("Correcto, Maquinaria Registrada");
                document.getElementById('form_maqui').reset();
            },
            method: "POST"
        })
    }
})