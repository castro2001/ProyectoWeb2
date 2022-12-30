<?php
// Create connection
try {
    // lenando los campo
    $servername = "localhost";
    $username = "root";
    $password = "2001";
    $dbname ='santaelena';
    // set the PDO error mode to exception
    $conexion= mysqli_connect($servername,$username,$password,$dbname);




}
 catch(PDOException $e) {
  echo 'Conexion fallida';
}