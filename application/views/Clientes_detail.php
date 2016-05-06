
<h1>detalle Cliente</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url(). 'index.php/clientes')?>>Menu Clientes</a></li>
    </ul>
</div><!--/.nav-collapse -->

<table class="table table-striped">
    
        <head>
        <th>Id</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Estado</th>
    </head>
    <tbody>
        <?php foreach ($Clientes as $data){?>
                
        <tr>            
            <td><?php echo $data->clientes_id; ?></td>
            <td><?php echo $data->nombre; ?></td>
            <td><?php echo $data->direccion; ?></td>
            <td><?php echo $data->telefono; ?></td>
            <td><?php echo $data->estado; ?></td>
        <?php } ?> 
    </tbody>
     
</table>