<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$registros = file_get_contents('alunos.txt');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    <title>Registros</title>
</head>

<body>
    <center>
    <h1>Registros de Alunos</h1>
    <pre><?php echo $registros; ?></pre>
    <a href="dashboard.php" class="btn btn-primary">Voltar</a>
    </center>
</body>

</html>