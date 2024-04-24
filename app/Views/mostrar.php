<!--aqui mostraremos los datos del controlador mostrarcontroller-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Datos</title>
</head>

<body>
    <h1>Personas</h1>
    <table border="1">
        <tr>
            <th>persona_id</th>
            <th>nombre</th>
            <th>ap_paterno</th>
            <th>ap_materno</th>
            <th>rol</th>
            <th>departamento</th>
        </tr>
        <?php foreach ($personas as $persona) : ?>
            <tr>
                <td><?= $persona['persona_id'] ?></td>
                <td><?= $persona['nombre'] ?></td>
                <td><?= $persona['ap_paterno'] ?></td>
                <td><?= $persona['ap_materno'] ?></td>
                <td><?= $persona['rol'] ?></td>
                <td><?= $persona['departamento'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h1>Cuentas</h1>
    <table border="1">
        <tr>
            <th>cuentabancaria_id</th>
            <th>numero_cuenta</th>
            <th>saldo</th>
            <th>persona_id</th>
            <th>tipo</th>
        </tr>
        <?php foreach ($cuentas as $cuenta) : ?>
            <tr>
                <td><?= $cuenta['cuentabancaria_id'] ?></td>
                <td><?= $cuenta['numero_cuenta'] ?></td>
                <td><?= $cuenta['saldo'] ?></td>
                <td><?= $cuenta['persona_id'] ?></td>
                <td><?= $cuenta['tipo'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <form action="<?= base_url('/mostrar/eliminar') ?>" method="post">
        <input type="text" name="id" placeholder="ID de la cuenta a eliminar">
        <button type="submit">Eliminar</button>
    </form>

    <!-- boton para el login -->
    <form action="login" method="post">
        <button type="submit">Login</button>
    </form>
</body>
</html>