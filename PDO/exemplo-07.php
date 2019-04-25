<?php 

// Conectar banco SQL SERVER REMOTO E COM A PORTA DIFERENTE DA PADRÃO

$conn = new PDO("sqlsrv:Database=FLUXO2018;server=192.168.0.4,1156\SRVSSA04;ConnectionPooling=0","STARSOFT","LUAN2830LU");

 $stmt = $conn->prepare("select TOP 10  * from J07 ");

 //$ficha = "FSASB13030028      ";

//$stmt->bindParam(":FICHA", $ficha);

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