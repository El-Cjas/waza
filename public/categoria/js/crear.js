function post(datos, url) {
    fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(datos)
    })
    
}
api = "../../server/api/Categoria.php";

document.getElementById("categoria").addEventListener("submit", function(e) {
    e.preventDefault();

    const categoria = {
        nombre: document.getElementById("nombre").value,
        descripcion: document.getElementById("descripcion").value
    }

    post(categoria, api)
    

})