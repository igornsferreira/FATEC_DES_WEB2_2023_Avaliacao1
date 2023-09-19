<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $login = $_POST['login'];
   $senha = $_POST['senha'];

   if ($login === 'portaria' && $senha === 'FatecAraras') {
       $_SESSION['loggedin'] = true;
       $_SESSION['username'] = $login;
       header("Location: dashboard.php");
       exit();
   } else {
       $error = "Login ou senha incorretos.";
   }
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
<title>Login</title>
</head>
<body>
<center>
<h1>Login</h1>
<form method="POST">
       Login: <input type="text" name="login" required><br><br>
       Senha: <input type="password" name="senha" required><br><br>
<input type="submit" value="Entrar" class="btn btn-primary">
</form>
<?php if (isset($error)) { echo "<p>$error</p>"; } ?>
</center>
</body>
</html>