<html>
<head>
	<style>
		table, tr, th, td{
			border: 1px solid;
		}
	</style>
</head>
<body>
<?php

	$host = 'localhost';
	$user = 'root';
	$pass = 'root1234';
	$database = 'universidad';

	$conn = new mysqli($host, $user, $pass, $database);

	if($conn->connect_error){
		die('Could not connect: '.$conn->connect_error);
	}

	$query = "SELECT * FROM estudiante";

	$result = $conn->query($query);

	if($result->num_rows > 0){
		echo "<table>";
		echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Correo</th><th>Cargo</th><th>Ciudad</th></tr>";
		
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";	
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["last_name"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["position"]."</td>";
			echo "<td>".$row["city"]."</td>";
			echo "</tr>";	
		}
		echo "</table>";
	}else{
		echo "No se encontraron resultados";
	}

	$conn->close();
?>
</body>
</html>
