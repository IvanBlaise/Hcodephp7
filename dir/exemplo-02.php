<?php 

$images = scandir("images");

//var_dump($images); 

$data = array();

foreach ($images as $img) {
	
	if(!in_array($img, array(".",".."))){ // in_array faz uma busca dentro do array

		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost:8080/dir/".str_replace("\\","/",$filename);

		array_push($data, $info);
	}
}



echo json_encode($data);

 ?>