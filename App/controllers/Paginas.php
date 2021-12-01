<?php

class Paginas extends Controller
{
    public function __construct()
    {
        // echo "Paginas controlador cargado<br>";
    }

    public function index()
    {
        $datos = array(
            '17-GUIDO HUMBERTO -3 ',
            '2-José-3',
            '18-juan andres-3'
        );
        $this->vista('paginas/inicio', $datos);
    }
}
