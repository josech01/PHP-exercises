<?php
if (isset($_SESSION['contadorC'])) {
    $_SESSION['contadorC'] ++;
} else {
    $_SESSION['contadorC'] = 1;
}
include 'contenidos/cabecera.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pagina C
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">


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
                    <td><?php echo $_SESSION['contadorC']; ?></td>
                </tr>

            </tbody>
        </table>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php include 'contenidos/pie.php'; ?>