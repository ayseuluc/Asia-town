<?php

require_once 'db_connect.php';

	if($_POST) {
	    $name = $_POST['hName'];
	    $beschreibung = $_POST['beschreibung'];
	    $foto = $_POST['Foto'];
	    $alterPreis = $_POST['alterPreis'];
	    $neuerPreis = $_POST['neuerPreis'];

	    $tId = $_POST['tId'];

	    $sql = "UPDATE taschen SET hName = '$name', beschreibung = '$beschreibung', Foto = '$foto', alterPreis = '$alterPreis', neuerPreis = '$neuerPreis' WHERE tId = {$tId}";

	    if($connect->query($sql) === TRUE) {
	        echo "<p>成功更新</p>";
	        echo "<a href='../update.php?id=".$tId."'><button type='button'>回去</button></a>";
	     
	    } else {
	        echo "Erorr while updating record : ". $connect->error;
	    }

	    $connect->close();

	}

?>