<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
   header("location: login.php");
   exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $nome = $_POST['nome'];
   $ra = $_POST['ra'];
   $placa = $_POST['placa'];

   $registro = "$nome|$ra|$placa" . PHP_EOL;

   file_put_contents('alunos.txt', $registro, FILE_APPEND);
   header("Location: dashboard.php");
   exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
   <title>Cadastro de Alunos</title>
</head>

<body>
   <center>
   <h1>Cadastro de Alunos</h1>
   <form method="POST">
      Nome Completo: <input type="text" name="nome" required><br><br>
      Registro Acadêmico (R.A.): <input type="text" name="ra" required><br><br>
      Placa do Carro ou Moto: <input type="text" name="placa" required><br><br>
      <input type="submit" value="Cadastrar" class="btn btn-primary"><br><br>
   </form>
   <a href="dashboard.php" class="btn btn-primary">Voltar</a>
   </center>
</body>

</html>