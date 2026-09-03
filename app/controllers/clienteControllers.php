<?php

require_once __DIR__ . "/../models/cliente.php";

class clienteController
{
    public function index()
    {
        $clienteModel = new cliente();

        $clientes = $clienteModel->getALL();

        require_once __DIR__ . "/../views/cliente/index.php";
    }
}
?>