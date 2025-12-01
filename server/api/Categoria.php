<?php
include_once '../models/Categoria.php';
header("Content-Type: application/json");

$metodo = $_SERVER['REQUEST_METHOD'];

$datos_json = file_get_contents('php://input',);

$datos = json_decode($datos_json, true);
//print_r($datos_json);

$categoria = new Categoria();

switch ($metodo) {
    case 'GET':
        if (isset($_GET['id'])) {
            $categoria->setId($_GET['id']);
            $resultado = $categoria->leer1();
            echo json_encode($resultado);
        }
        else {
            $resultado = $categoria->leer();
            echo json_encode($resultado);
        }
        break;
    
    case 'POST':
        print_r($datos);
        $categoria->setNombre($datos['nombre']);
        $categoria->setDescripcion($datos['descripcion']);
        echo $categoria->crear();
        break;

    case 'PUT':
        $categoria->setId($datos['id']);
        $categoria->setNombre($datos['nombre']);
        $categoria->setDescripcion($datos['descripcion']);
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