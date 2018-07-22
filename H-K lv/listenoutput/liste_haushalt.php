<?php

	$localhost = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "hk_shop";

	// create connection
	$connect = new mysqli($localhost, $username, $password, $dbname);

	// check connection
	if($connect->connect_error) {
	    die("connection failed: " . $connect->connect_error);
	} else {
	   // echo "Successfully Connected";
	}

	$sql= "SELECT * FROM haushalt Order by hId DESC";
	$result = mysqli_query($connect, $sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="row">
			<?php 
				while ($row = mysqli_fetch_assoc($result)) {
					echo 
						"<div class='col-md-4 col-lg-4 col-4 col'>
							<div class='kard'>
								<div class='plac_img'>
									<img src='img/".$row["Foto"]."' class='images'>
								</div>
								<div>
									<h3>".$row["hName"]."</h3>
									<p>".$row["beschreibung"]."</p>";
									if($row["alterPreis"]>0){
										echo "<p>".$row["alterPreis"]."</p>
										
									<p>".$row["neuerPreis"]."</p>
								</div>
							</div>
						</div>";
									}else{
										echo "<p>".$row["neuerPreis"]."</p>
								</div>
							</div>
						</div>";
									};
									
				};
			?>
			
		</div>
	</div>
</body>
</html>