<form method="post" action="update">

<table>
    <?php foreach($usuario as $row){ ?>
    <tr>
        <td>Nombre</td><td><input type="text" name="nombre" value="<?php echo $row->nombre; ?>"></td>
    </tr>
    <tr>
        <td>Apepat</td><td><input type="text" name="apepat" value="<?php echo $row->apepat; ?>"></td>
    </tr>
    <tr>
        <td>Ciudad</td><td>
            <select name="ciudad_id">
            <?php
            foreach ($ciudad as $ciudadlista) {
                if($row->ciudad_id == $ciudadlista->ciudad_id) {
                    echo '<option selected value="' . $ciudadlista->ciudad_id . '">' . $ciudadlista->nombre . '</option>';
                } else {
                    echo '<option value="' . $ciudadlista->ciudad_id . '">' . $ciudadlista->nombre . '</option>';
                }
            }
            ?>
        </select>        
        
        </td>
    </tr>
    <tr>
        <td><input type="submit" value="guardar"></td>
    </tr>
    <?php } ?>
</table>
</form>

