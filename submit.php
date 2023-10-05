<?php
	$SERVER = getenv("SERVER");
	$USER = getenv("USER");
	$PASS = getenv("PASS");
	$DB = getenv("DATABASE");

	$conn = new mysqli($SERVER,$USER,$PASS,$DB);
	if ($conn->connect_error) {
	    die('Could not connect: '.$conn->connect_error);
	}
	
	$rows = "";
	$values = "";
	foreach($_POST as $key => $value){
		if(isset($key,$value) && $key != "" && $value != ""){
			$rows = $rows.$key.",";
			$values = $values."'".$value."'".",";
		}
	}
	
	$rows = substr_replace($rows,"",-1);
	$values = substr_replace($values,"",-1);	

	$query = "INSERT INTO estudiante ($rows) VALUES ($values);";
	$result = $conn->query($query);	

	$conn->close();

	if($result === true){
		echo "Se ha registrado exitosamente!<br>";
		echo "Redireccionando...";
		header("Location: estudiantes.php");
		
	}else{
		echo "Ups! Algo salio mal<br>";
	}
?>
