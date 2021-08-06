const cargarMarcas = async (select)=>{
    //1. Ir a buscar el filtro-cbx
    let filtroCbx = select;
    //2. Ir a buscar las marcas
    let marcas = await getMarcas();
    marcas.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        option.value = m;
        filtroCbx.appendChild(option);
    });
};

const actualizar = async function(){
    let idConsola = this.idConsola;
    let consola = await findById(idConsola);
    let molde = this.parentNode.parentNode;
    consola.nombre = molde.querySelector(".nombre-txt").value;
    consola.marca = molde.querySelector(".marca-select").value;
    consola.anio = molde.querySelector(".anio-txt").value;
    await actualizarConsola(consola);
    await Swal.close();
    let filtro = document.querySelector("#filtro-cbx").value;
    let consolas = await getConsolas(filtro);
    cargarTabla(consolas);
};

const iniciarActualizacion = async function(){
    let idConsola = this.idConsola;
    let consola = await findById(idConsola);
  
    let molde = document.querySelector(".molde-actualizar").cloneNode(true);
    molde.querySelector(".nombre-txt").value = consola.nombre;
    molde.querySelector(".marca-select").value = consola.marca;
    molde.querySelector(".anio-txt").value = consola.anio;
    //TODO: Mejorar esto, te ahorrai arta pega
    molde.querySelector(".actualizar-btn").idConsola = idConsola;
    molde.querySelector(".actualizar-btn").addEventListener("click", actualizar);
    await Swal.fire({
        title:"Actualizar",
        html: molde,
        confirmButtonText: "Cerrar"
    });
  
};

const iniciarEliminacion = async function(){
    //1. Obtener el id a eliminar
    let id = this.idConsola;
    let resp = await Swal.fire({title:"Esta seguro?", text:"Esta operacion es irreversible"
    , icon:"error", showCancelButton:true});
    if(resp.isConfirmed){

        //1. Eliminar
        if(await eliminarConsola(id)){
            //2. Si la eliminacion fue exitosa, recargar la tabla
            let consolas = await getConsolas();
            cargarTabla(consolas);
            Swal.fire("Consola Eliminada", "Consola eliminada exitosamente", "info");
        }else {
        
            //3. Si no fue exitosa, mostrar un mensaje de error
            Swal.fire("Error", "No se pudo atender la solicitud", "error");
        }
    } else {
        Swal.fire("Cancelado", "Cancelado a peticion del usuario", "info");
    }
};

const cargarTabla = (consolas)=>{
    //1. Obtener una referencia al cuerpo de la tabla
    let tbody = document.querySelector("#tbody-consola");
    tbody.innerHTML = "";
    //2. Recorrer todas las consolas
    for(let i=0; i < consolas.length; ++i){
        //3. Por cada consola generar una fila
        let tr = document.createElement("tr");
        //4. Generar por cada atributo de la consola, un td
        let tdNombre = document.createElement("td");
        tdNombre.innerText = consolas[i].nombre;
        let tdMarca = document.createElement("td");
        tdMarca.innerText = consolas[i].marca;
        let tdAnio = document.createElement("td");
        tdAnio.innerText  = consolas[i].anio;
        let tdAcciones = document.createElement("td");

        let botonActualizar = document.createElement("button");
        botonActualizar.innerText = "Actualizar";
        botonActualizar.classList.add("btn","btn-info");
        botonActualizar.idConsola = consolas[i].id;
        botonActualizar.addEventListener("click", iniciarActualizacion);
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText= "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idConsola = consolas[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAcciones.appendChild(botonEliminar);
        tdAcciones.appendChild(botonActualizar);
        //5. Agregar los td al tr
        tr.appendChild(tdNombre);
        tr.appendChild(tdMarca);
        tr.appendChild(tdAnio);
        tr.appendChild(tdAcciones);
        //6. Agregar el tr al cuerpo de la tabla
        tbody.appendChild(tr);
    }

};
//El listener change sirve para cuando quieres ejecutar algo cuando el valor cambia
document.querySelector("#filtro-cbx").addEventListener("change", async ()=>{
    let filtro = document.querySelector("#filtro-cbx").value;
    let consolas = await getConsolas(filtro);
    cargarTabla(consolas);
});

document.addEventListener("DOMContentLoaded", async ()=>{
    //Aqui voy a cargar la tabla de consolas, porque si entra aqui
    //lo que haga en esta parte estoy seguro que se esta ejecutando
    //cuando la pagina esta totalmente cargada
    await cargarMarcas(document.querySelector("#filtro-cbx"));
    await cargarMarcas(document.querySelector(".marca-select"));
    let consolas = await getConsolas();
    cargarTabla(consolas);
});