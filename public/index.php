<?php

require_once __DIR__ . "/../app/controllers/productoControllers.php";

$ProductoController = new ProductoController();
$ProductoController->index();

require_once __DIR__ . "/../app/controllers/clienteControllers.php";

$clienteController = new clienteController();
$clienteController->index();

require_once __DIR__ . "/../app/controllers/proveedorControllers.php";

$proveedorController = new proveedorController();
$proveedorController->index();



?>