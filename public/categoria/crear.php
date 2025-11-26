<?php
// Incluye el archivo del encabezado
include '../layout/header.php';
?>

<form id="categoria" name="categoria">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion">
    <input type="submit" value="enviar"></input>
    
</form>

<script src="js/crear.js"></script>   
<?php
// Incluye el archivo del pie de página
include '../layout/footer.php';
?>