<?php
require '../vendor/autoload.php';

//arquivo de conexão com o banco de dados
require_once('conexao.php');

use Google\Client as GoogleClient;

// key do google developers
$client = new Google_Client(['client_id' => '733877546290-k75j4flh07fc4g6k1gitktcdseaure79.apps.googleusercontent.com']);  // Specify the CLIENT_ID of the app that accesses the backend
$payload = $client->verifyIdToken($_POST['credential']);


//Verifica se existe o token do google
if (isset($payload['email'])) {
  //faz a contagem de emails cadastrados com essa conta, se for igual a 0 salva no banco, se não faz login.
  $query_email = "SELECT COUNT(email) as count_email FROM login_google.usuarios WHERE email='$payload[email]';";
  $count = mysqli_query($conexao, $query_email) or die(mysqli_error($conexao));
  foreach ($count as $values) {
    var_dump($values['count_email']);
  }
//se não existir o email do google no banco, ele salva nome e email na session e manda para a tela de cadastro
  if ($values['count_email'] < 1) {
    session_start();
    $_SESSION['logado']=0;
    $_SESSION['nome']=$payload['name'];
    $_SESSION['email']=$payload['email'];
    session_write_close();
    header('Location:../cadastro.php');
  }else{
    //caso já exista, quer dizer que já está cadastrado e o login com o google funcionou
    session_start();
    $_SESSION['logado']=1;
    session_write_close();
    header('Location:../home.php');
  }
} else {

}
