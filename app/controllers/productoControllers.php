<?php

require_once __DIR__ . "/../models/producto.php";

class ProductoController
{
    public function index()
    {
        $productoModel = new producto();

        $productos = $productoModel->getALL();

        require_once __DIR__ . "/../views/producto/index.php";
    }
}
?>

       

        
