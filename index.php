<?php


 ?>
<html>

  <head>
    <title> Market </title>
    <link rel="icon" type="image/ico" href= "icons\logo.jpg" />
  </head>

  <body >

<form name="frm1" action="insert_prod.php" method="POST">


<table border="0" align="center">
<tr>
    <td align="center" ><H1><font face="Times New Roman" size="6" color="black"<b><b>Bienvenidos</font></H1> </td>
</tr>

  <tr>

  </tr>
      <tr>
      <td > <font face="Times New Roman" name="codpro" size="3" color="black"<b><b>Codigo producto: </b></b></td></font>
      <td> <input type="text" name="codprod" placeholder="Codigo" required><br></td>
      <br> <br>
      </tr>
      <tr>
      <td> <font face="Times New Roman" name="nomprod" size="3" color="black"<b><b> Nombre producto: </b></b><br></td></font>
      <td> <input type="text" name="nomprod" placeholder="Nombre" required><br></td>
      </tr>

      <tr>
      <td> <font face="Times New Roman" name="cantprod" size="3" color="black"<b><b> Cantidad: </b></b><br></td></font>
      <td> <input type="text" name="cantprod" placeholder="Cantidad" required><br></td>
      </tr>


      <tr>
      <tr>
      <td> <font face="Times New Roman" size="3" color="black"<b><b>Estado: <font color="codigocolor">*</b></b></td></font>
      <td> <select name="estprod">
      <option >Estado</option>
      <option value="0">Hay</option>
      <option value="1">No hay</option>


      </select>
      </tr>
      </tr>



      <tr>
      <td align=center><input type="submit" value="Registrar producto"></td>
      </tr>





        </tr>
</form>
</body>
</html>

<table border=1 align ="center">
  <tr><th>CÒDIGO</th><th>NOMBRE</th><th>CANTIDAD</th><th>.</th><th>.</th></tr>

<?php
  //1. coneccion a base de datos
  include("database.php");
  //2. crear sql y ejecuto el sql
  $sql ="SELECT * FROM productos";
  $result= $conn->query($sql);

  //3. Mostrar informacion
  if($result->num_rows >0){
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row["codigo_prod"]."</td>";
      echo "<td>".$row["nombre_prod"]."</td>";
      echo "<td>".$row["cantidad"]."</td>";
      echo "<td><img src='icons/editar.png'
      width= '20' ></td>";
      echo "<td><a href='delete_product.php?cod=".$row["codigo_prod"]."'><img src='icons/delete.png'
      width= '25' ></td>";
      echo "</tr>";
    }
  }else {
    echo "::: No hay productos registrados :::";
  }

?>
