<?php

class Usuarios extends Controller
{
    public function __construct()
    {
        $this->usuarioModelo = $this->modelo('Usuario');
    }

    public function index()
    {
        $usuarios = $this->usuarioModelo->obtenerUsuarios();

        $datos = [
            'titulo' => 'Usuarios de mi MVC',
            'usuarios' => $usuarios
        ];

        $this->vista('usuarios/inicio', $datos);
    }

    public function actualizar($id = -1)
    {
        if ($id < 0) echo 'Usuario desconocido';
        else print_r($id);
    }
}
