// const elemento = document.getElementById('titulo');
// elemento.innerHTML = "Listado de Categorías";

async function get(api) {
    const respuesta = await fetch(api, {
        method: "GET"
    });
    
    const data = await respuesta.json();
    return data;
}
//ruta de categorias
const api = "../../server/api/Categoria.php"

const categorias = await get(api)


const tabla = document.getElementById("lista-categorias");

tabla.innerHTML += `
    <tr>
        <td>${categorias[0].ID}</td>
        <td>${categorias[0].nombre}</td>
        <td></td>
    </tr>
`;