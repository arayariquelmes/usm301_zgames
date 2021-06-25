//ESTE ARCHIVO VA A TENER LAS OPERACIONES TIPICAS PARA COMUNICARSE CON EL CONTROLADOR

//getConsolas
const getConsolas = async ()=>{
    let resp = await axios.get("api/consolas/get");
    return resp.data;
};
//crearConsola

const crearConsola = async (consola)=>{ //arrow functions
    
    //Estructura de peticion post al servidor con axios
    let resp = await axios.post("api/consolas/post", consola, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};