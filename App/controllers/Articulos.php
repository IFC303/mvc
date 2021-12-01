<?php

class Articulos extends Controller
{
    public function __construct()
    {
        $this->articuloModelo = $this->modelo('Articulo');
    }

    public function index()
    {
        $articulos = $this->articuloModelo->obtenerArticulos();

        $datos = [
            'titulo' => 'Artículos de mi MVC',
            'articulos' => $articulos
        ];

        $this->vista('articulos/inicio', $datos);
    }

    public function actualizar($id = -1)
    {
        if ($id < 0) echo 'Articulo desconocido';
        else print_r($id);
    }
}
