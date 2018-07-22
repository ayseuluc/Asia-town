<?php
require_once 'actions/db_connect.php';


if($_GET['id']) {
    $hId = $_GET['id'];

    $sql = "SELECT * FROM haushalt WHERE hId = {$hId}";
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

?>

<!DOCTYPE html>
<html>
<head>

    <title>Edit Product</title>

    <link rel="stylesheet" type="text/css" href="crud.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }

        table tr th {
            padding-top: 20px;
        }
    </style>
</head>
<body>

<fieldset>
    <legend>更新家务用品</legend>

    <form action="actions/a_update.php" method="post">
              <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">产品名字</label>
            <div class="col-sm-10">
              <input type="text" name="hName"  class="form-control" placeholder="名字" value="<?php echo $data['hName'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">描述产品</label>
            <div class="col-sm-10">
              <input type="text" name="beschreibung" placeholder="描述产品"  class="form-control" value="<?php echo $data['beschreibung'] ?>">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">照片</label>
            <div class="col-sm-10">
              <input type="text" name="Foto" placeholder=".jpg/.png"  class="form-control" value="<?php echo $data['Foto'] ?>" >
            </div>
        </div>
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">老价</label >
            <div class="col-sm-10">
              <input type="text" name="alterPreis"  placeholder="老价"  class="form-control" value="<?php echo $data['alterPreis'] ?>" >
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">新价</label>
            <div class="col-sm-10">
              <input type="text" name="neuerPreis"  placeholder="新价"  class="form-control" value="<?php echo $data['neuerPreis'] ?>">
            </div>
        </div>

        <hr>

        <div class="form-group">
            <tr>
                <input type="hidden" name="hId" value="<?php echo $data['hId']?>"  />

                <td><a href="../admin.php" ><button type="button" class="btn btn-primary col-sm-2 knopf1">回去</button></a></td>

                <td><button type="submit" class="btn btn-warning col-sm-12 knopf2">保存更改</button></td>

            </tr>

        </div>

    </form>
</fieldset>

</body>
</html>

<?php
}
?>