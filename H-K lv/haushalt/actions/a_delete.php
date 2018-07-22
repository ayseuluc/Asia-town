<?php

	require_once 'db_connect.php';


	if($_POST) {

	    $hId = $_POST['hId'];

	    $sql = "DELETE FROM haushalt WHERE hId = {$hId}";

	    if($connect->query($sql) === TRUE) {
	        echo "<p>成功删除!!!</p>";
	        echo "<a href='../../admin.php'><button type='button'>回去</button></a>";
	    } else {
	        echo "Error updating record : " . $connect->error;
	    }

	    $connect->close();
	}

?>

