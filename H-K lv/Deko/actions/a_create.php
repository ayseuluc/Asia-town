<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
		<style type="text/css">
	    	body{
	  		background-color:#e1f4f5;
			}
			
			.knopf1{
			    font-size: 17px;
			    border-radius: 5px;
			    width: 60px;
			    margin: 0px 0px 10px 0px;
			    
			}

		</style>

	</head>
	<body>
		<?php

			require_once 'db_connect.php';

			if($_POST) {

			    $name = $_POST['hName'];
			    $beschreibung = $_POST['beschreibung'];
			    $foto = $_POST['Foto'];
			    $alterPreis = $_POST['alterPreis'];
			    $neuerPreis = $_POST['neuerPreis'];

			 
			    $sql = "INSERT INTO deko (hName, beschreibung, Foto, alterPreis, neuerPreis) VALUES ('$name', '$beschreibung', '$foto', '$alterPreis', '$neuerPreis')";

			    if($connect->query($sql) === TRUE) {
			        echo "<p>新记录成功创建</p>";
			        echo "<a href='../create.php'><button type='button'>回去</button></a>";
			 
			    } else {
			        echo "Error " . $sql . ' ' . $connect->connect_error;
			    }
			    $connect->close();
			}
		?>
	</body>
</html>

