// const elemento = document.getElementById('titulo');
// elemento.innerHTML = "Listado de Categorías";

async function get(api) {
    const respuesta = await fetch(api, {
        method: "GET"
    });
    
    const data = await respuesta.json();
    return data;
}

function insertarFilaCategoria(idTabla, categorias) {
    const tabla = document.getElementById(idTabla);
    
    categorias.forEach(categoria => {
        tabla.innerHTML += `
            <tr>
                <td>${categoria.ID}</td>
                <td>${categoria.nombre}</td>
                <td>${categoria.descripcion}</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        `;
    });

}

//ruta de categorias
const api = "../../server/api/Categoria.php";

const categorias = await get(api);


insertarFilaCategoria("lista-categorias", categorias);


