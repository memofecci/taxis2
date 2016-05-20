<h1>Buscar  de Choferes</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">

        <li><a href=<?php echo (base_url() . 'index.php/choferes') ?>>Menu Choferes</a></li>
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
        <th>Rut</th>
        <th>Nombre</th>
        <th>Apepat</th>
        <th>Apemat</th>
        </head>
        <tbody>
            <?php foreach ($choferes as $data) { ?>

                <tr>     
                    <td><?php echo $data->chofer_id; ?></td>
                    <td><?php echo $data->rut; ?></td>
                    <td><?php echo $data->nombre; ?></td>
                    <td><?php echo $data->apepat; ?></td>
                    <td><?php echo $data->apemat; ?></td>
                <?php } ?> 
        </tbody>

    </table>
</form>


