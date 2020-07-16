<?php include_layout_template('../vistas/encabezado.php'); ?>
<?php include ('../vistas/barra_navegacion.php'); ?>
<a href="../controladores/pagina_principal.php" class="btn btn-large btn-primary pull-right">&laquo; <?php echo "Regresar"; ?></a>
<div class="panel panel-default">
  
    <h2 class="text-left"><?php echo "Venezuela" ?></h3>
    <h3 class="text-center"><?php echo "Reporte Noticias"; ?></h2>

    <table class="table table-striped">
        <tr class="success">
            <th><?php echo "Titulo"; ?></th>
            <th><?php echo "Fuente"; ?></th>
            <th><?php echo "Fecha"; ?></th>
        </tr>
 <?php   
    $contador=count($titulos);
    for ($i=0; $i < $contador; $i++) {
        $output = "<tr><td>".$titulos[$i]."</td>";
        $output .= "<td>".$fuente[$i]."</td>";
        $output .= "<td>".$fecha[$i*2]."</td></tr>";
        echo $output;
    }
?>
    </table>

</div>
<?php include_layout_template('../vistas/pie.php');?>