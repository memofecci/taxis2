<h1>Buscar  de Clientes</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">

        <li><a href=<?php echo (base_url() . 'index.php/clientes/nuevo') ?>>Nuevo Clientes</a></li>
    </ul>
</div>
<form method="post" action="">
    <div class="form-group">
        <label for="buscar">Buscar</label>
        <input type="text" class="form-control" name="buscar" id="buscar" placeholder="Ingrese Palabra a Buscar">
    </div>
    <button type="submit" class="btn btn-info">Buscar</button>

    <table class="table table-striped">

        <head>
        <th>id</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        </head>
        <tbody>
            <?php foreach ($Clientes as $data) { ?>

                <tr>     
                    <td><?php echo $data->clientes_id; ?></td>
                    <td><?php echo $data->nombre; ?></td>
                    <td><?php echo $data->direccion; ?></td>
                    <td><?php echo $data->telefono; ?></td>
                <?php } ?> 
        </tbody>

    </table>
</form>
