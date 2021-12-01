<?php

class Core
{

    /**
     * mapear la url ingresada en el navegador
     * 1- controlador
     * 2- metodo
     * 3- parametros
     * Ejemplo: /articulo/actualizar/4
     */

    protected $controladorActual = 'Paginas';
    protected $metodoActual = 'index';
    protected $parametros = [];

    public function __construct()
    {
        $url = $this->getUrl();
        // buscamos en controladores si el controlador existe
        if (isset($url[0]) && file_exists('../App/controllers/' . ucwords($url[0]) . '.php')) {
            // Si existe, se configura como controloador por defecto
            $this->controladorActual = ucwords($url[0]);
            // eliminamos la primera posicion de $url
            unset($url[0]);
        }

        require_once('../App/controllers/' . $this->controladorActual . '.php');
        $this->controladorActual = new $this->controladorActual;

        if (isset($url[1])) {
            if (method_exists($this->controladorActual, $url[1])) {
                $this->metodoActual = $url[1];
                unset($url[1]);
            }
        }

        // Obtenemos los parámetros
        $this->parametros = $url ? array_values($url) : [];

        // Llamamos al metodo del controlador
        call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);

        // echo $this->metodoActual;

        // print_r($url);

        // // echo "<br>" . $this->controladorActual;
        // echo "<br>" . $this->metodoActual . "<br>";
        // print_r($this->parametros);
    }

    public function getUrl()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
