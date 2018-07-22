<!DOCTYPE html>
<html>
<head>

    <title>H&K</title>

    <link rel="stylesheet" type="text/css" href="create.css">
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

   <style type="text/css">
    	body{
  		background-color:#e1f4f5;
		}
	
		fieldset {
			margin: auto;
		    margin-top: 100px;
		    width: 80%;
		    border: 70px solid white;
		    text-align: left;
		    padding: 8px;
		    background-color: white;
		  }
		legend{
			font-size: 25px;
			text-align: center;
			color:#0885f1;
		}

		label{
			font-size: 18px;
		}
		
		.knopf1{
		    font-size: 17px;
		    border-radius: 5px;
		    width: 60px;
		    margin: 0px 0px 10px 0px;
		    
		}

		.knopf2{
		    font-size: 17px;
		    border-radius: 5px;
		    width: 100px;
		    margin: 0px 0px 10px 10px;
		}
		</style>
</head>
<body>

	<fieldset>

	    <legend>加新产品</legend>

	    
	    <form action="actions/a_create.php" method="post">
	        <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-2 col-form-label">产品名字</label>
			    <div class="col-sm-10">
			      <input type="text" name="hName"  class="form-control" placeholder="名字">
			    </div>
			</div>

			<div class="form-group row">
			    <label for="inputEmail3" class="col-sm-2 col-form-label">描述产品</label>
			    <div class="col-sm-10">
			      <input type="text" name="beschreibung" placeholder="描述产品"  class="form-control">
			    </div>
			</div>
			
			<div class="form-group row">
			    <label for="inputEmail3" class="col-sm-2 col-form-label">照片</label>
			    <div class="col-sm-10">
			      <input type="text" name="Foto" placeholder=".jpg/.png"  class="form-control">
			    </div>
			</div>
			
			<div class="form-group row">
			    <label for="inputEmail3" class="col-sm-2 col-form-label">老价</label>
			    <div class="col-sm-10">
			      <input type="text" name="alterPreis"  placeholder="老价"  class="form-control">
			    </div>
			</div>

			<div class="form-group row">
			    <label for="inputEmail3" class="col-sm-2 col-form-label">新价</label>
			    <div class="col-sm-10">
			      <input type="text" name="neuerPreis"  placeholder="新价"  class="form-control">
			    </div>
			</div>

			<hr>

			<div class="form-group">
			    <tr>
	           
	                <td><a href="../admin.php" ><button type="button" class="btn btn-primary col-sm-2 knopf1">回去</button></a></td>

	                <td><button type="submit" class="btn btn-warning col-sm-12 knopf2">加入产品</button></td>

	            </tr>

			</div>

	    </form>

	</fieldset>

</body>
</html>