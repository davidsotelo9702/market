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
      <td align=center><input type="submit" value="Registrar"></td>
      </tr>





        </tr>
</form>

  </body>

</html>
