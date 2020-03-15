<?php

$mysql_pass = getenv('MYSQL_PASSWORD');
$mysql_user = getenv('MYSQL_USER');
$mysql_root_pass = getenv('MYSQL_ROOT_PASSWORD');
$mysql_bd = getenv('MYSQL_DATABASE');

echo "DB:\t" . $mysql_bd . "<br/>";
echo "USER:\t" . $mysql_user . "<br/>";
$enlace = mysqli_connect('bd_mysql', 'root', $mysql_root_pass, $mysql_bd);
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL . "<br/>";
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL. "<br/>";
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL. "<br/>";
    exit;
}

echo "Se realizó una conexión apropiada a MySQL! La base de datos $mysql_bd es genial." . PHP_EOL . "<br/>";
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL . "<br/>";


$sql = "SELECT CONCAT(nombres, ' ', paterno, ' ', materno) as nombre_completo FROM persona";
$result = mysqli_query($enlace, $sql);

echo "<br/><b>Lista de Personas</b><br/>";
echo "<ul>";
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<li>";
			echo $row['nombre_completo'];
		echo "</li>";
	}
} else {
	echo "No hay registros";
	
}
echo "</ul>";
$result->close();
mysqli_close($enlace);

?>
