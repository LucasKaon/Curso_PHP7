<?php

 $file = scandir("C:\Users\Lucas A");

$data = array();

 foreach ($file as $key) {
 	
 	if (!in_array($key, array(".",".."))) {
 		
 		$filename = "C:\Users\Lucas A".DIRECTORY_SEPARATOR.$key;

 		$info = pathinfo($filename);
 		$info["size"] = filesize($filename);
 		$info["adress"] = "C:\Users\Lucas A\\".str_replace("\\","/",$filename);

 		array_push($data, $info);


 	}

 }

 echo json_encode($data);
?>