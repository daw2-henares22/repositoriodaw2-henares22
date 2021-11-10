<html>
 <head>
  <title>Multipurpose Form</title>
  <style type="text/css">
  <!--
td {vertical-align: top;}
  -->
  </style>
 </head>
 <body>
 <?php
 echo "<h1>Añadir Opinión Sobre " . $_POST['nombre'] . "</h1>";
 ?>

  <form action="N4P116formprocess.php" method="post">
   <table>
    <tr>
     <td>Nombre</td>
     <td>
      <?php echo $_POST['nombre']; ?>
      <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']; ?>"/>
     </td>
    </tr>

    <tr>
     <td>Tipo De Pelicula</td>
     <td>
      <?php echo $_POST['tipo_pelicula']; ?>
      <input type="hidden" name="tipo_pelicula"
       value="<?php echo $_POST['tipo_pelicula']; ?>"/>
     </td>
    </tr><tr>
    <td>Usuario</td>
    <td><input type="text" name="usuario" /></td>
    </tr><tr>
     <td>Calificación</td>
     <td><input type="number" name="calificacion" min="0" max="5" /></td>
    </tr><tr>
     <td>Opinión Sobre La Pelicula</td>
     
     <td><textarea name="extra" rows="5" cols="60"></textarea></td>
    </tr><tr>
     <td colspan="2" style="text-align: center;">

      <input type="submit" name="submit" value="Añadir" />
     </td>
    </tr>
   </table>
  </form>
<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

?>
 </body>
</html>

