<h1>Listado de Choferes</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url() . 'index.php/home') ?>>Home</a></li>
        <li><a href=<?php echo (base_url() . 'index.php/choferes/nuevo') ?>>Nuevo Chofer</a></li>
        <li><a href=<?php echo (base_url() . 'index.php/choferes/buscar') ?>>Buscar</a></li>
        <li><a href=<?php echo (base_url() . 'index.php/choferes/history') ?>>Historial</a></li>
    </ul>

</div>

<table class="table table-striped">

    <head>
    <th>id</th>
    <th>Rut</th>
    <th>Nombre</th>
    <th>Apepat</th>
    <th>Apemat</th>
    <th>Opciones</th>
</head>
<tbody>
    <?php foreach ($Choferes as $data) { ?>

        <tr>     
            <td><?php echo $data->chofer_id; ?></td>
            <td><?php echo $data->rut; ?></td>
            <td><?php echo $data->nombre; ?></td>
            <td><?php echo $data->apepat; ?></td>
            <td><?php echo $data->apemat; ?></td>
            <td><a href="<?php echo (base_url() . 'index.php/Choferes/detail/' . $data->chofer_id); ?>">Ver Detalle</a>/<a href="<?php echo (base_url() . 'index.php/Choferes/edit/' . $data->chofer_id); ?>">Modificar</a></td>
        <?php } ?> 
</tbody>

</table>

