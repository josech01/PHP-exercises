<?php
if (isset($_SESSION['contadorA'])) {
    $_SESSION['contadorA'] ++;
} else {
    $_SESSION['contadorA'] = 1;
}
?>

<a href="contenidos/cerrarSession.php">cerrar Sessión</a>

<table border="1">
    <thead>
        <tr>
            <th>Nro</th>
            <th>Variable de Session</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Id</td>
            <td><?php echo session_id(); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Usuario</td>
            <td><?php echo $_SESSION['usuario']; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Clave</td>
            <td><?php echo $_SESSION['clave']; ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Nro Visitas a Pagina A</td>
            <td><?php echo $_SESSION['contadorA']; ?></td>
        </tr>

    </tbody>
</table>