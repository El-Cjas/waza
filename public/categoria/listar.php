<?php
// Incluye el archivo del encabezado
include '../layout/header.php';
?>

<h2 id="titulo">Listado de categorias</h2>
    <table border="1" id="lista-categorias">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
        <!-- Las filas de la tabla se generarán dinámicamente aquí -->
    </table>



<script type="module" src="js/listar.js"></script>

<?php
// Incluye el archivo del pie de página
include '../layout/footer.php';
?>