<h1>Listado de Choferes Inactivo</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">

        <li><a href=<?php echo (base_url() . 'index.php/choferes') ?>>Menu Choferes</a></li>
    </ul>
    
</div>

<table class="table table-striped">
    
        <head>
        <th>id</th>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Apepat</th>
        <th>Apemat</th>
        <th>Direccion</th>
        <th>Telefono</th>
    </head>
    <tbody>
        <?php foreach ($Choferes as $data){?>
                
        <tr>     
            <td><?php echo $data->chofer_id; ?></td>
            <td><?php echo $data->rut; ?></td>
            <td><?php echo $data->nombre; ?></td>
            <td><?php echo $data->apepat; ?></td>
            <td><?php echo $data->apemat; ?></td>
            <td><?php echo $data->direccion; ?></td>
            <td><?php echo $data->celular; ?></td>
        <?php } ?> 
    </tbody>
     
</table>