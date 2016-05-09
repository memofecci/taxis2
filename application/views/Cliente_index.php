<h1>Listado de Clientes</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">

        <li><a href=<?php echo (base_url(). 'index.php/clientes/nuevo')?>>Nuevo Clientes</a></li>
        <li><a href=<?php echo (base_url(). 'index.php/clientes/buscar')?>>Buscar</a></li>
    </ul>
</div>

<table class="table table-striped">
    
        <head>
        <th>id</th>
        <th>Nombre</th>
        <th>Opciones</th>
    </head>
    <tbody>
        <?php foreach ($Clientes as $data){?>
                
        <tr>     
            <td><?php echo $data->clientes_id; ?></td>
            <td><?php echo $data->nombre; ?></td>
            <td><a href="<?php echo (base_url(). 'index.php/Clientes/detail/'.$data->clientes_id);?>">Ver Detalle</a>/<a href="<?php echo (base_url(). 'index.php/Clientes/edit/'.$data->clientes_id);?>">Modificar</a></td>
        <?php } ?> 
    </tbody>
     
</table>