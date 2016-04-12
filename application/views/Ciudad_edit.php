<form method="POST" action="../update">
    
    <?php foreach ($ciudad as $ciu) { ?>
    
    id:<input type="text" name="ciudad_id" value=<?php echo $ciu->ciudad_id; ?>>
    <br>
    Nombre:<input type="text" name="nombre" value=<?php echo $ciu->nombre; ?>>
    <br>
    <input type="submit" value="Editar Ciudad">
    
    <?php } ?>
</form>

