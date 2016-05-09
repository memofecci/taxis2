<h1>Buscar  de Clientes</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">

        <li><a href=<?php echo (base_url(). 'index.php/operadora')?>>Menu Operadora</a></li>
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
        <th>Rut</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Direccion</th>
        <th>Celular</th>
        <th>Usuario</th>
        <th>Clave</th>
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
                <?php } ?> 
        </tbody>

    </table>
</form>