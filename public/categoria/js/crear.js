function post(params) {
    fetch("", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify()
    })
    
}


document.getElementById("categoria").addEventListener("submit", function(e) {
    e.preventDefault();

    const melo = {
        nombre: document.getElementById("nombre").value,
        descripcion: document.getElementById("descripcion").value
    }

    const lista =  [];
    

})