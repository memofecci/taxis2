<h1>Buscar  de Carreras</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">

        <li><a href=<?php echo (base_url(). 'index.php/carreras')?>>Menu Carreras</a></li>
    </ul>
</div>
<form method="post" action="">
    <div class="form-group">
        <label for="buscar">Buscar</label>
        <input type="text" class="form-control" name="buscar" id="buscar" placeholder="Ingrese Palabra a Buscar">
    </div>
    <button type="submit" class="btn btn-default">Buscar</button>

    <table class="table table-striped">

        <head>
        <th>id</th>
        <th>Pasajero</th>
        <th>Direccion</th>
        <th>Hora inicio</th>
        <th>Hora termino</th>
        <th>Observacion</th>
        <th>Movil</th>
        <th>Operadora</th>
        <th>Cliente</th>
        </head>
        <tbody>
            <?php foreach ($Carreras as $data){?>

                <tr>     
                    <td><?php echo $data->carrera_id; ?></td>
                    <td><?php echo $data->pasajero; ?></td>
                    <td><?php echo $data->direccion; ?></td>
                    <td><?php echo $data->horainicio; ?></td>
                    <td><?php echo $data->horatermino; ?></td>
                    <td><?php echo $data->observacion; ?></td>
                    <td><?php echo $data->movil_id; ?></td>
                    <td><?php echo $data->operadora_id; ?></td>
                    <td><?php echo $data->clientes_id; ?></td>
                <?php } ?> 
        </tbody>

    </table>
</form>