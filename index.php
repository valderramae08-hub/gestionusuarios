<?php include("conexion.php"); ?>

<h2>Lista de usuarios</h2>
<a href="crear.php">Crear usuario</a>

<table border="1">
<tr>
    <th>Nombre</th>
    <th>Cédula</th>
    <th>Teléfono</th>
    <th>Acciones</th>
</tr>

<?php
$resultado = $conexion->query("SELECT * FROM usuarios");

while($fila = $resultado->fetch_assoc()){
?>
<tr>
    <td><?= $fila['nombre'] ?></td>
    <td><?= $fila['cedula'] ?></td>
    <td><?= $fila['telefono'] ?></td>
    <td>
        <a href="editar.php?id=<?= $fila['id'] ?>">Editar</a>
        <a href="eliminar.php?id=<?= $fila['id'] ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>
</table>
