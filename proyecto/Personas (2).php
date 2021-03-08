<?php
require 'conexion.php';
$sql ="Select Cod_Per,Cod_Rol,Cod_Prog,Per_Nombres,Per_Apellids,Per_CorS,Per_Tel,Per_FecN fROM Personas Where activo=1";
 $resultado =mysiqli ->query($sql);


?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>

    <title>Control de Acceso </title>

    <script>

      $(document).ready(function() {
    $('#Tabla').DataTable();
    } );
    </script>
  </head>
  <body>
    <div class ="container">
      <div class ="row">
    
        <h1>Control de Acceso</h1>
      </div>
   
        <table id="Tabla" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Codigo Per</th>
                <th>Codigo Rol</th>
                <th>Codigo Programa</th>
                <th>Nombres</th>
                <th>Apellidos </th>
                <th>Correo Intitucional</th>
                <th>Telefono</th>
                <th>Fecha nacimeinto</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
          <?php while ($fila=$resultado->fecth_assoc()){?>
            <tr>
                <td> <?php echo $fila ['Codigo_Per'];?></td>
                <td> <?php echo $fila ['Codigo_Rol'];?></td>
                <td> <?php echo $fila ['Codigo_Programa'];?></td>
                <td> <?php echo $fila ['Nombres'];?></td>
                <td> <?php echo $fila ['Apellidos'];?></td>
                <td> <?php echo $fila ['Correo_Institucional';?></td>
                <td> <?php echo $fila ['Telefono'];?></td>
                <td> <?php echo $fila ['Fecha_Nacimiento'];?></td>
                <td> <a href"editar.php?id=<?php echo $fila ['id'];?>"class="btn btn-warning"> Editar </a></td>
                <td> <a href"eliminar.php?id=<?php echo $fila ['id'];?>"class="btn btn-danger"> Eliminar </a></td>
                
           </tr>
         <?php }?>
                
        </tbody> 
      </table>     

    </div>
  </div>

   
  </body>
</html>
