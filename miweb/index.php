<?php

echo "Bienvenidos<br>";

$conn = new mysqli("bd_mysql", "root", ".mysqlpwd.", "my_db1");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
 
$sql = "SELECT CONCAT(nombres, ' ', paterno, ' ', materno) as nombre_completo FROM persona";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row['nombre_completo']."&lt;br>";
	}
} else {
	echo "0 results";
}
$conn->close();

?>
