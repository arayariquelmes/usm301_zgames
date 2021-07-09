const getMarcas = async ()=>{
    let resultado = await axios.get("api/marcas/get");
    return resultado.data;
};