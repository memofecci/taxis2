<h1>Listado de Operadoras</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">

        <li><a href=<?php echo (base_url(). 'index.php/operadoras/nuevo')?>>Nueva Operadoras</a></li>
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
        <?php foreach ($Operadoras as $data){?>
                
        <tr>     
            <td><?php echo $data->operadora_id; ?></td>
            <td><?php echo $data->rut; ?></td>
            <td><?php echo $data->nombre; ?></td>
            <td><?php echo $data->apepat; ?></td>
            <td><?php echo $data->apemat; ?></td>
            <td><a href="<?php echo (base_url(). 'index.php/Operadoras/detail/'.$data->operadora_id);?>">Ver Detalle</a>/<a href="<?php echo (base_url(). 'index.php/Operadoras/edit/'.$data->operadora_id);?>">Modificar</a></td>
        <?php } ?> 
    </tbody>
     
</table>