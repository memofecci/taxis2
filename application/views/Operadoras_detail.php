
<h1>detalle Operadora</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url(). 'index.php/operadoras')?>>Menu Operadora</a></li>
    </ul>
</div><!--/.nav-collapse -->

<table class="table table-striped">
    
        <head>
        <th>Id</th>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Apepat</th>
        <th>Apemat</th>
        <th>Dirreccion</th>
        <th>Celular</th>
        <th>Usuaria</th>
        <th>Clave</th>
        <th>Estado</th>
    </head>
    <tbody>
        <?php foreach ($Operadoras as $data){?>
                
        <tr>            
            <td><?php echo $data->operadora_id; ?></td>
            <td><?php echo $data->rut; ?></td>
            <td><?php echo $data->nombre; ?></td>
            <td><?php echo $data->apepat; ?></td>
            <td><?php echo $data->apemat; ?></td>
            <td><?php echo $data->direccion; ?></td>
            <td><?php echo $data->celular; ?></td>
            <td><?php echo $data->username; ?></td>
            <td><?php echo $data->password; ?></td>
            <td><?php echo $data->estado; ?></td>
        <?php } ?> 
    </tbody>
     
</table>
