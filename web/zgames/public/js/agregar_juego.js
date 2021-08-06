
const cargarConsolas = async()=>{
    let consolas = await getConsolas();
    let consolaSelect = document.querySelector("#consola-select");
    consolas.forEach(c=>{
        let option = document.createElement("option");
        option.value = c.id;
        option.innerText = c.nombre;
        consolaSelect.appendChild(option);
    });
};


document.addEventListener("DOMContentLoaded", ()=>{
    cargarConsolas();
});

document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let descripcion = document.querySelector("#descripcion-txt").value.trim();
    let consolaId = document.querySelector("#consola-select").value;
    let fechaLanzamiento = document.querySelector("#fecha-txt").value;
    let precio = +document.querySelector("#precio-txt").value.trim();

    let aptoNinios = document.querySelector("#apto-si-rb").checked ? 1: 0; //Operador ternario

    let juego = {};
    juego.nombre = nombre;
    juego.fechaLanzamiento = fechaLanzamiento;
    juego.descripcion = descripcion;
    juego.consolaId = consolaId;
    juego.precio = precio;
    juego.aptoNinios = aptoNinios;
    await crearJuego(juego);
    Swal.fire("Juego Ingresado");

});