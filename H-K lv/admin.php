<?php
	ob_start();
	session_start();
	require_once 'connect.php';
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: login.php");
		exit;
	}
	// select logged-in users detail
	$res=mysqli_query($conn, "SELECT * FROM admin WHERE adminId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>

    <title>H&K</title>
	<link rel="stylesheet" type="text/css" href="crud.css">
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>
<body>
	
	<header id="header" class="">
		<div>
			<nav class="navbar navbar-expand-md bg-info navbar-dark">
		      <a class="navbar-brand name" >
		        <h2 class="shop">我的小店</h2>
		      </a>
		      <div class="">
		        <ul class="navbar-nav">
		          <li class="nav-item">
		          	 <a class="navbar-right" href="#">你好 <?php echo $userRow['userEmail']; ?></a>
		          </li>
		          <li>
		          	<a class="sign" href="logout.php?logout">退出</a>
		          </li>
		        </ul>
		  
		      </div>  
		    </nav>
		</div>
	</header><!-- /header -->

	<div class="container">
		<h2>Allerlei / 个种小东西</h2>
	    <a href="Allerlei/create.php"><button type="button" class="btn btn-primary">添加产品</button></a>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>名字</th>
	                <th>描述</th>
	                <th>照片</th>
	                <th>老价</th>
	                <th>新价</th>
	            </tr>
	        </thead>
	        <tbody>
				<?php

		            $sql = "SELECT * FROM allerei";
		            $result = $conn->query($sql);

		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                        <td>".$row['hName']."</td>
		                        <td class='beschreibung'>".$row['beschreibung']."</td>
		                        <td><img src='".$row['Foto']."'' alt=''></td>
		                        <td>".$row['alterPreis']."</td>
		                        <td>".$row['neuerPreis']."</td>
		                        <td>
		                            <a href='Allerlei/update.php?id=".$row['aId']."'><button type='button' class='btn btn-info'>编辑</button></a>
		                            <a href='Allerlei/delete.php?id=".$row['aId']."'><button type='button' class='btn btn-danger'>删除</button></a>
		                        </td>
		                    </tr>";
		                }
		            } else {
		                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		            }
	            ?>
	        </tbody>
	    </table>

	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	    <h2>Deko / 装饰</h2>
	    <a href="Deko/create.php"><button type="button" class="btn btn-primary">添加产品</button></a>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>名字</th>
	                <th>描述</th>
	                <th>照片</th>
	                <th>老价</th>
	                <th>新价</th>
	            </tr>
	        </thead>
	        <tbody>
				<?php

		            $sql = "SELECT * FROM deko";
		            $result = $conn->query($sql);

		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                        <td>".$row['hName']."</td>
		                        <td class='beschreibung'>".$row['beschreibung']."</td>
		                        <td><img src='".$row['Foto']."'' alt=''></td>
		                        <td>".$row['alterPreis']."</td>
		                        <td>".$row['neuerPreis']."</td>
		                        <td>
		                            <a href='Deko/update.php?id=".$row['dId']."'><button type='button' class='btn btn-info'>编辑</button></a>
		                            <a href='Deko/delete.php?id=".$row['dId']."'><button type='button' class='btn btn-danger'>删除</button></a>
		                        </td>
		                    </tr>";
		                }
		            } else {
		                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		            }
	            ?>
	        </tbody>
	    </table>

	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	    <h2>Drogerie&Kosmetik / 折扣</h2>
	    <a href="diskont/create.php"><button type="button" class="btn btn-primary">添加产品</button></a>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>名字</th>
	                <th>描述</th>
	                <th>照片</th>
	                <th>老价</th>
	                <th>新价</th>
	            </tr>
	        </thead>
	        <tbody>
				<?php

		            $sql = "SELECT * FROM diskont";
		            $result = $conn->query($sql);

		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                        <td>".$row['disName']."</td>
		                        <td class='beschreibung'>".$row['beschreibung']."</td>
		                        <td><img src='".$row['Foto']."'' alt=''></td>
		                        <td>".$row['alterPreis']."</td>
		                        <td>".$row['neuerPreis']."</td>
		                        <td>
		                            <a href='diskont/update.php?id=".$row['disId']."'><button type='button' class='btn btn-info'>编辑</button></a>
		                            <a href='diskont/delete.php?id=".$row['disId']."'><button type='button' class='btn btn-danger'>删除</button></a>
		                        </td>
		                    </tr>";
		                }
		            } else {
		                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		            }
	            ?>
	        </tbody>
	    </table>

	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	    <h2>Haushalt / 家庭用品</h2>
	    <a href="haushalt/create.php"><button type="button" class="btn btn-primary">添加产品</button></a>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>名字</th>
	                <th>描述</th>
	                <th>照片</th>
	                <th>老价</th>
	                <th>新价</th>
	            </tr>
	        </thead>
	        <tbody>
				<?php

		            $sql = "SELECT * FROM haushalt";
		            $result = $conn->query($sql);

		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                        <td>".$row['hName']."</td>
		                        <td class='beschreibung'>".$row['beschreibung']."</td>
		                        <td><img  src='".$row['Foto']."'' alt=''></td>
		                        <td>".$row['alterPreis']."</td>
		                        <td>".$row['neuerPreis']."</td>
		                        <td>
		                            <a href='haushalt/update.php?id=".$row['hId']."'><button type='button' class='btn btn-info'>编辑</button></a>
		                            <a href='haushalt/delete.php?id=".$row['hId']."'><button type='button' class='btn btn-danger'>删除</button></a>
		                        </td>
		                    </tr>";
		                }
		            } else {
		                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		            }
	            ?>
	        </tbody>
	    </table>

	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	    <h2>Kleidung / 衣服</h2>
	    <a href="kleidung/create.php"><button type="button" class="btn btn-primary">添加产品</button></a>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>名字</th>
	                <th>描述</th>
	                <th>照片</th>
	                <th>老价</th>
	                <th>新价</th>
	            </tr>
	        </thead>
	        <tbody>
				<?php

		            $sql = "SELECT * FROM kleidung";
		            $result = $conn->query($sql);

		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                        <td>".$row['hName']."</td>
		                        <td class='beschreibung'>".$row['beschreibung']."</td>
		                        <td><img src='".$row['Foto']."'' alt=''></td>
		                        <td>".$row['alterPreis']."</td>
		                        <td>".$row['neuerPreis']."</td>
		                        <td>
		                            <a href='kleidung/update.php?id=".$row['kId']."'><button type='button' class='btn btn-info'>编辑</button></a>
		                            <a href='kleidung/delete.php?id=".$row['kId']."'><button type='button' class='btn btn-danger'>删除</button></a>
		                        </td>
		                    </tr>";
		                }
		            } else {
		                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		            }
	            ?>
	        </tbody>
	    </table>

	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	    

	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	    <h2>Taschen & Schuhe / 包和鞋</h2>
	    <a href="taschen/create.php"><button type="button" class="btn btn-primary">添加产品</button></a>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>名字</th>
	                <th>描述</th>
	                <th>照片</th>
	                <th>老价</th>
	                <th>新价</th>
	            </tr>
	        </thead>
	        <tbody>
				<?php

		            $sql = "SELECT * FROM taschen";
		            $result = $conn->query($sql);

		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                        <td>".$row['hName']."</td>
		                        <td class='beschreibung'>".$row['beschreibung']."</td>
		                        <td><img src='".$row['Foto']."'' alt=''></td>
		                        <td>".$row['alterPreis']."</td>
		                        <td>".$row['neuerPreis']."</td>
		                        <td>
		                            <a href='taschen/update.php?id=".$row['tId']."'><button type='button' class='btn btn-info'>编辑</button></a>
		                            <a href='taschen/delete.php?id=".$row['tId']."'><button type='button' class='btn btn-danger'>删除</button></a>
		                        </td>
		                    </tr>";
		                }
		            } else {
		                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		            }
	            ?>
	        </tbody>
	    </table>
	</div>

</body>
</html>


<?php ob_end_flush(); ?>