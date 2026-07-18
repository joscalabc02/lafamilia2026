<?php
include("conexion.php");

$sql = "SELECT * FROM contactos";
$result = $conn->query($sql);
?>

<h2>Lista de Contactos</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Teléfono</th>
    <th>Dirección</th>
    <th>Fecha</th>
    <th>Mensajes</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['nombre']."</td>
        <td>".$row['correo']."</td>
        <td>".$row['telefono']."</td>
        <td>".$row['direccion']."</td>
        <td>".$row['fecha_registro']."</td>
        <td>".$row['mensaje']."</td>
    </tr>";
}
?>

</table>