// const elemento = document.getElementById('titulo');
// elemento.innerHTML = "Listado de Categorías";

async function get(apiUrl) {
    const respuesta = await fetch(api, {
        method: "GET",
    });
    
    const data = await respuesta.json();
    return data;
}

async function delet(apiUrl) {
    const respuesta = await fetch(api, {
        method: "DELETE",
        body: JSON.stringify(datos)
    });
}

function insertarFilaCategoria(idTabla, categorias) {
    const tabla = document.getElementById(idTabla);
    
    categorias.forEach(categoria => {
        tabla.innerHTML += `
            <tr>
                <td>${categoria.ID}</td>
                <td>${categoria.nombre}</td>
                <td>${categoria.descripcion}</td>
                <td><button>Editar</button> </td>
                <td><button>Eliminar</button></td> 
            </tr>
        `;
    });

}

//ruta de categorias
const api = "../../server/api/Categoria.php";

const categorias = await get(api);


insertarFilaCategoria("lista-categorias", categorias);


