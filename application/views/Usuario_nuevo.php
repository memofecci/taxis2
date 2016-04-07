<a href="index">Volver</a><br>

<form method="post" action="save">

Nombre:<input type="text" name="nombre"><br>
Apepat:<input type="text" name="apepat"><br>
Ciudad_id:<select name="ciudad_id">
                    <?php foreach ($ciudad as $ciu) { ?>
    <option value=<?php echo $ciu->ciudad_id?>><?php echo $ciu->nombre; ?></option>
    
                    <?php } ?>
                    </select>
<input type="submit" value="guardar">

</form>
