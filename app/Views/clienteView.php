<!-- mostrar los datos de cliente-->

<!DOCTYPE html>
<html>
<head>
    <title>Cliente</title>
</head>
<body>
    <h1>Cliente</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido pat</th>
            <th>apellido mat</th>
            <th>correo</th>
            <th>telefono</th>
            <th>departamento</th>
        </tr>
        <tr>
            <td><?php echo $datos['nombre']; ?></td>
            <td><?php echo $datos ['ap_paterno']; ?></td>
            <td><?php echo $datos ['ap_materno']; ?></td>
            <td><?php echo $datos ['correo']; ?></td>
            <td><?php echo $datos ['departamento']; ?></td>
        </tr>
    </table>
</body>
</html>



