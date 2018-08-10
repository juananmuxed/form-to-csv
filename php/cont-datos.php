<?php
if(empty($_SERVER['CONTENT_TYPE']))
{ 
  $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded"; 
}
if(isset($_POST['submit'])){
    $email = $_POST['correo'];
    $acepta = $_POST['aceptacion'];
    $hora = date('Y/m/d H:i:s');
    $fp = fopen('../csv/listado.csv',"a");
    $no_rows = count(file('../csv/listado.csv'));
    if($no_rows > 1)
    {
        $no_rows = ($no_rows - 1) + 1;
    }
    $csvData = array(
        'timestamp' => $hora,
        'correo' => $email,
        'aceptacion' => $acepta
    );
    fputcsv($fp, $csvData);
    fclose($fp);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Exo:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i" rel="stylesheet">
        <link rel="stylesheet" href="../css/main.css">
        <title>|Sended| RGPD Privacy Policy</title>
    </head>
    <body>
        <div class="color container-fluid">
            <div class="row">
                <div class="col-lg-9 col-sm-12"><h3>RGPD Privacy Policy Form</h3></div>
                <div class="col-lg-3 col-sm-12"><img height="30" class="float-right" src="http://via.placeholder.com/350x150" alt="Company Name"></div>
            </div>
        </div>
        <div class="formulario container-fluid">
            <div class="row">
                <div class="col">
                    <h2>You confirm your suscription.</h2></br>
                    Thank you for taking this time to continue being able to communicate with you in the future.</br>
                </div>
            </div>
          </div>
        </div>
        <div class="p-4 container-fluid foot">2018 Company Name™. All rights reserved.</div>
        <script type="text/javascript" src="../main.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    </body>
</html>