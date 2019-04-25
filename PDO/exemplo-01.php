<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

 $stmt = $conn->prepare("select * from tb_usuarios ORDER BY idusuario");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); // já traz do banco as linhas 

foreach ($results as $row) {
	
	foreach ($row as $key => $value) {
		
		echo "<strong>".$key.":</strong>".$value."<br/>";
	}
	echo "===============================================================<br/>";

}

//echo json_encode($results);

//var_dump($results);

 ?>