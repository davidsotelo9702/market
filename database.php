<?php
      //credenciales de conexion de BD
      //127.0.0.1/market/database.php
      $username = "root";
      $servername = "localhost"; //127.0.0.1
      $password = "";
      $dbname = "market";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("Error: ".$conn->ect_error);
      }else {
        //die("Conexion exitosa a Market");
      }





 ?>
