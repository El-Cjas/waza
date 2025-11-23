// const elemento = document.getElementById('titulo');
// elemento.innerHTML = "Listado de Categorías";
console.log("xd");

const respuesta = await fetch("../../server/api/Categoria.php", {
    method: "GET"
});

const data = await respuesta.json();
console.log(data);
