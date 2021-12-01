<?php
// Controlador principal de todos los controladores
// Se encarga de cargar los modelos y las vistas

class Controller
{
    // cargar modelo
    public function modelo($modelo)
    {
        require_once  '../App/models/' . $modelo . '.php';
        return new $modelo;
    }

    // cargar vista
    public function vista($vista, $datos = [])
    {
        // comprobamos si existe el archivo
        if (file_exists('../App/views/' . $vista . '.php')) {
            require_once '../App/views/' . $vista . '.php';
        } else {
            die('la vista no existe');
        }
    }
}
