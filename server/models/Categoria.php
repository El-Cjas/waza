<?php
require_once 'interfaces/crudInterface.php';
require_once '../config/funciones_comunes.php';
class Categoria implements crudInterface {
    private $id, $nombre, $descripcion;

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getNombre(): ?string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getDescripcion(): ?string {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): void {
        $this->descripcion = $descripcion;
    }

    
    public function crear(): bool {
        $sql = "INSERT INTO categoria (nombre, descripcion) VALUES (:nombre, :descripcion)";
        $params = [
            ':nombre' => $this->nombre,
            ':descripcion' => $this->descripcion
        ];
        return ejecutarSQL($sql, $params);
    }

    public function leer(): array {
        $sql = "SELECT * FROM categoria";
        
        return seleccionar($sql);
    }

    public function leer1(): array {
        $sql = "SELECT * FROM categoria WHERE id = :id";
        $params = [
            ':id' => $this->id
        ];
        return seleccionar($sql, $params);
    }

    public function actualizar(): bool {
        $sql = "UPDATE categoria SET nombre = :nombre, descripcion = :descripcion WHERE id = :id";
        $params = [
            ':nombre' => $this->nombre,
            ':descripcion' => $this->descripcion,
            ':id' => $this->id
        ];
        return ejecutarSQL($sql, $params);
    }

    public function eliminar(): bool {
        $sql = "DELETE FROM categoria WHERE id = :id";
        $params = [
            ':id' => $this->id
        ];
        return ejecutarSQL($sql, $params);
    }

}

?>