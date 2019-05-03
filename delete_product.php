<?php
$codigo = $_GET['cod'];

//1.conectarme a la base de datos
include("database.php");
//2. crear sql eliminar
$sql ="DELETE FROM productos WHERE codigo_prod=$codigo";
//3.
$conn->query($sql);
//4. confirmar trasaccion
echo "<script language='javascript'>alert('::: Producto eliminado con exito :::')</script>";
header("Refresh:0;url=index.php");

 ?>
