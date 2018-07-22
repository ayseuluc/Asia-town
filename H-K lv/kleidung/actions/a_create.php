<?php

	require_once 'db_connect.php';

	if($_POST) {

	    $name = $_POST['hName'];
	    $beschreibung = $_POST['beschreibung'];
	    $foto = $_POST['Foto'];
	    $alterPreis = $_POST['alterPreis'];
	    $neuerPreis = $_POST['neuerPreis'];

	 
	    $sql = "INSERT INTO kleidung (hName, beschreibung, Foto, alterPreis, neuerPreis) VALUES ('$name', '$beschreibung', '$foto', '$alterPreis', '$neuerPreis')";

	    if($connect->query($sql) === TRUE) {
	        echo "<p>新记录成功创建</p>";
	        echo "<a href='../create.php'><button type='button'>回去</button></a>";
	    } else {
	        echo "Error " . $sql . ' ' . $connect->connect_error;
	    }
	    $connect->close();
	}
?>