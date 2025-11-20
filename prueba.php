<?php
class Usuario {
    private ?int $id = null; // puede ser entero o null

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }
}

$usuario = new Usuario();
var_dump($usuario->getId()); // null (porque no se ha asignado todavía)

$usuario->setId(5);
var_dump($usuario->getId()); // int(5)
