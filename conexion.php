<?php


$host = "localhost";

$user = "root";

$pw = "";

$db = "inicial";

$conn = mysqli_connect($host, $user, $pw, $db);

	// Crear abse de datos --------------------------------------------------------
	$sql2 = "CREATE DATABASE IF NOT EXISTS db";

	if (mysqli_query($conn, $sql2)) {
	    //echo "Base de datos creada<br>";
	} else {
	    echo "Error creando BD: " . mysqli_error($conn) . "<br>";
	}

	mysqli_select_db ( $conn , $db);

	if (!$conn) {
	    die("select db connection failed: " . mysqli_connect_error());
	}

	//crear tabla------------------------------------------------
	$sql2 = "CREATE TABLE IF NOT EXISTS `datos_medidos` (
	  `temperatura` VARCHAR(50) NOT NULL,
	  `humedad` VARCHAR(50) NOT NULL,
      `presion` VARCHAR(50) NOT NULL,
      `altitud` VARCHAR(50) NOT NULL,
	  `id` INT NOT NULL AUTO_INCREMENT,
	  PRIMARY KEY (`id`))";

	if(mysqli_query($conn, $sql2)){
	    //echo "Tabla creada<br>";
	} else {
	    echo "Error creando tabla: " . mysqli_error($conn). "<br>";
	}
			
	$query = "INSERT INTO datos_medidos (temperatura, humedad, presion, altitud) VALUES
	('1', '2', '3', '4'), ('4', '5', '2', '2') ,('3', '5', '2', '2'),('6', '7','2','2'),('2', '4','2', '2'),('0', '3','2','2'),('3', '2', '2', '2')";
	
	$conn->query($query);
	mysqli_close($conn);

?>
