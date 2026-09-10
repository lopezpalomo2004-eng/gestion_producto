<?php

require_once __DIR__ . "/../models/proveedor.php";

class ProveedorController
{
    public function index()
    {
        $proveedorModel = new proveedor();

        $proveedores = $proveedorModel->getALL();

        require_once __DIR__ . "/../views/proveedor/index.php";
    }
}
?>

