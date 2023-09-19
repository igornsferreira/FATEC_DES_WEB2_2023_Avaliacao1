<!DOCTYPE html>
<html lang="pt-BR">

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    <title>Dashboard</title>
</head>

<body>
    <center>
    <h1>Dashboard</h1><br>
    <p>Seja bem-vindo, <?php
                        session_start();
                        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                            header("location: login.php");
                            exit;
                        }
                        echo $_SESSION['username']; ?>!</p><br><br><br>
    <a href="cadastro.php" class="btn btn-primary">Cadastrar Aluno </a><br><br>
    <a href="registros.php" class="btn btn-primary">Ver Registros</a><br><br>
    <form method="POST" action="logout.php">
        <input type="submit" value="Sair" class="btn btn-primary">
    </form>
    </center>
</body>

</html>