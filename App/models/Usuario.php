<?php

class Usuario
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerUsuarios()
    {
        $this->db->query("SELECT * FROM usuarios");

        return $this->db->registros();
    }
}
