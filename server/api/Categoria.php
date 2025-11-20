<?php
include_once '../models/Categoria.php';
header("Content-Type: application/json");

$metodo = $_SERVER['REQUEST_METHOD'];

$categoria = new Categoria();

switch ($metodo) {
    case 'GET':
        $categoria->leer();
        break;
    
    case 'POST':
        $categoria->setNombre($_POST['nombre']);
        $categoria->setDescripcion($_POST['descripcion']);
        $categoria->crear();
        break;

    case 'PUT':
        $categoria->setId($_GET['id']);
        $categoria->setNombre($_GET['nombre']);
        $categoria->setDescripcion($_GET['descripcion']);
        $categoria->actualizar();
        break;
    
    case 'DELETE':
        $categoria->setId($_GET['id']);
        $categoria->eliminar();
        break;

    default:
        echo json_encode(["mensaje" => "Método no permitido"],);
        break;
}


?>