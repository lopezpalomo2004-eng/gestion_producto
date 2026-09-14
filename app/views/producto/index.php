<h1>Listado productos</h1>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>proveedor</th>
    </tr>

    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= $producto["nombre"] ?></td>
            <td><?= $producto["precio"] ?></td>
            <td><?= $producto["categoria"] ?></td>
            <td><?= $producto["proveedor"] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h1>Producto Consultado</h1>
<table border="1">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Categoria
            </td>
            <td>Proveedor</td>
        </tr>

        <?php foreach ($productoConsultado as $producto): ?>
        <tr>
            <td><?= $producto["id"] ?></td>
            <td><?= $producto["nombre"] ?></td>
            <td><?= $producto["precio"] ?></td>
            <td><?= $producto["categoria"] ?></td>
            <td><?= $producto["proveedor"] ?></td>
        </tr>
        <?php endforeach; ?>
</table>

<h1>Producto por categoria</h1>
<table border="1">
        <tr>
            <td>ID</td>
            <td>nombre</td>
            <td>precio</td>
            <td>categoria</td>
         </tr>
    <?php foreach ($productosPorCategoria as $item): ?>
        <tr>
            <td><?= $item["id"] ?></td>
            <td><?= $item["nombre"] ?></td>
            <td><?= $item["precio"] ?></td>
            <td><?= $item["categoria"] ?></td>
        </tr>
    <?php endforeach; ?>
        
</table>



