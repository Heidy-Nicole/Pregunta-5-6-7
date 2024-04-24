<!--mostrar los datos-->
<!DOCTYPE html>
<html>
<head>
    <title>Director</title>
</head>
<body>
    <h1>Director</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>Fecha de fallecimiento</th>
            <th>Biografía</th>
        </tr>
        <tr>
            <td><?php echo $data['nombre']; ?></td>
            <td><?php echo $data ['ap_paterno']; ?></td>
            <td><?php echo $data ['ap_materno']; ?></td>
            <td><?php echo $data ['correo']; ?></td>
            <td><?php echo $data ['rol']; ?></td>
            <td><?php echo $data ['departamento']; ?></td>
        </tr>
    </table>








