<h1>Listado proveedor</h1>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>ciudad</th>
        <th>direccion</th>
    </tr>

    <?php foreach ($proveedores as $proveedor):?>
        <tr>
            <td><?= $proveedor["nombre"]?> </td>
            <td><?= $proveedor["ciudad"]?> </td>
            <td><?= $proveedor["direccion"]?> </td>
        </tr>
    <?php endforeach; ?>
</table>