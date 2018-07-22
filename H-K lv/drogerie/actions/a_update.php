<?php

require_once 'db_connect.php';

	if($_POST) {
	    $name = $_POST['drName'];
	    $beschreibung = $_POST['beschreibung'];
	    $foto = $_POST['Foto'];
	    $alterPreis = $_POST['alterPreis'];
	    $neuerPreis = $_POST['neuerPreis'];

	    $drId = $_POST['drId'];

	    $sql = "UPDATE drogerie SET drName = '$name', beschreibung = '$beschreibung', Foto = '$foto', alterPreis = '$alterPreis', neuerPreis = '$neuerPreis' WHERE drId = {$drId}";

	    if($connect->query($sql) === TRUE) {
	        echo "<p>成功更新</p>";
	        echo "<a href='../update.php?id=".$drId."'><button type='button'>回去</button></a>";
	       
	    } else {
	        echo "Erorr while updating record : ". $connect->error;
	    }

	    $connect->close();

	}

?>