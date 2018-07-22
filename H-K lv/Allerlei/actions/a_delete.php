<?php

require_once 'db_connect.php';


if($_POST) {

    $aId = $_POST['aId'];

    $sql = "DELETE FROM allerei WHERE aId = {$aId}";

    if($connect->query($sql) === TRUE) {
        echo "<h1>成功删除!!!</h1>";
        echo "<a href='../../admin.php'><button type='button'>回去</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}

?>
