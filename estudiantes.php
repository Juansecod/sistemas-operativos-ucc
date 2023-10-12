<html>
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
        $SERVER = getenv("SERVER");
        $USER = getenv("USER");
        $PASS = getenv("PASS");
        $DB = getenv("DATABASE");

        $conn = new mysqli($SERVER, $USER, $PASS, $DB);

        if($conn->connect_error){
                die('Could not connect: '.$conn->connect_error);
        }

        $query = "SELECT * FROM estudiante";

        $result = $conn->query($query);

        if($result->num_rows > 0){
                echo '<table class="table table-bordered">';

                echo '<thead>';
                $th = '<th scope="col">';
                echo '<tr class="table-secondary">'.$th."ID</th>".$th."Nombre</th>".$th."Apellido</th>".$th."Correo</th>".$th."Cargo</th>".$th."Ciudad</th></tr>";
                echo '</thead>';

                echo '<tbody class="table-group-divider">';

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
                echo '</tbody>';
                echo "</table>";
        }else{
                echo "No se encontraron resultados";
        }

        $conn->close();
?>
</div>
</body>
</html>
