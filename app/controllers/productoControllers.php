<?php

require_once __DIR__ . "/../models/producto.php";

class ProductoController
{
    public function index()
    {
        $productoModel = new producto();

        $productos = $productoModel->getAll();
       
        $productoConsultado = $productoModel->getByid(5);

         $productosPorCategoria = $productoModel->getByCategoria("ropa");


        require_once __DIR__ . "/../views/producto/index.php";
    }
}

       

        
