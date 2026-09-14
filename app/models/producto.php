<?php
require_once __DIR__ ."/../../config/database.php";

class producto{
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->connect();
    }

    public function getAll()
{
    $sql = "SELECT 
    p.nombre,
    p.precio,
    c.nombre AS categoria,
    pr.nombre AS proveedor
    FROM productos p 
    JOIN categorias c ON p.categoria_id = c.id
    JOIN proveedores pr ON p.proveedor_id = pr.id";
    $consulta = $this->connection->query($sql);
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}

public function getByid($id)
{
    $sql = "SELECT 
    p.id,
    p.nombre,
    p.precio,
    c.nombre AS categoria,
    pr.nombre AS proveedor
    FROM productos p
    JOIN categorias c ON p.categoria_id = c.id
    JOIN proveedores pr ON p.proveedor_id = pr.id
    WHERE p.id = :id";
    $stmt = $this->connection->prepare($sql);
    $stmt->execute(['id' => $id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
     public function getByCategoria($categoria)
    {
        $sql = "SELECT * FROM productos WHERE categoria = :categoria";
        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':categoria', $categoria, PDO::PARAM_STR);
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
};



