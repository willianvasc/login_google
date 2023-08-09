<?php
require_once('conexao.php');

if (isset($_POST['login'])) {
  //criptografia da senha 
  $senha = base64_encode($_POST['password']);
  //verifica usuário e senha no banco
  $query_email = "SELECT COUNT(email) as count_email FROM login_google.usuarios WHERE email='$_POST[email]' and senha='$senha';";
  $count = mysqli_query($conexao, $query_email) or die(mysqli_error($conexao));
  foreach ($count as $values) {
  }
  //se usuário e senha existirem no banco de dados, ele manda para a home.
  if ($values['count_email'] == 1) {
    session_start();
    $_SESSION['logado']=1;
    session_write_close();
    header('Location:../home.php');
  } else {
    $_SESSION['logado']=0;
    echo "Usuário ou senha incorretos!";
  }
}
