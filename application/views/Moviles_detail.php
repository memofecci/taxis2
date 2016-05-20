
<h1>detalle Movil</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url(). 'index.php/moviles')?>>Menu Moviles</a></li>
    </ul>
</div><!--/.nav-collapse -->

<table class="table table-striped">
    
        <head>
        <th>Id</th>
        <th>Numero Movil</th>
        <th>Patente</th>
        <th>Chofer</th>
    </head>
    <tbody>
        <?php foreach ($Moviles as $data){?>
                
        <tr>            
            <td><?php echo $data->movil_id; ?></td>
            <td><?php echo $data->numero; ?></td>
            <td><?php echo $data->patente; ?></td>
            <td><?php echo $data->nombre; ?></td>
        <?php } ?> 
    </tbody>
     
</table>
