<h1>Buscar  de Clientes</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">

        <li><a href=<?php echo (base_url(). 'index.php/moviles')?>>Menu Moviles</a></li>
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
        <th>Numero</th>
        <th>Patente</th>
        <th>Chofer</th>
        </head>
        <tbody>
            <?php foreach ($Moviles as $data){?>

                <tr>     
                    <td><?php echo $data->movil_id; ?></td>
                    <td><?php echo $data->numero; ?></td>
                    <td><?php echo $data->patente; ?></td>
                    <td><?php echo $data->chofer_id; ?></td>
                <?php } ?> 
        </tbody>

    </table>
</form>