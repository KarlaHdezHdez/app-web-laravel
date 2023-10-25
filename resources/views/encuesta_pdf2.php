<?php
require_once('./base_de_datos.php');
    // Logica
    $query = $base_datos->query("SELECT * FROM tblusuarios");
    $lista= $query->fetchAll();

?>

<h1>Mi primer reporte</h1>
<p>Hemos creado nuestro reporte usando PHP y HTML :).</p>

<table>
    <thead>
        <tr>
            <th >Apellido P</th>
            <th >Apellido M</th>
            <th >Nombre</th>
            <th >Usuario</th>
        </tr>
    </thead>
    <?php foreach($lista as $key =>$val):
        ?>
        <tr>
            <td><?=$val['vchapeidop']; ?></td>
            <td><?= $val['vchapeidom']; ?></td>
            <td><?=$val['vchnombre'];?></td>
            <td><?= $val['vchusuario']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
