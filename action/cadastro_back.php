<?php
require_once('conexao.php');

//faz a contagem de emails cadastrados com essa conta, se for igual a 0 salva no banco, se não faz login.
$query_email = "SELECT COUNT(email) as count_email FROM login_google.usuarios WHERE email='$_POST[email]';";
$count = mysqli_query($conexao, $query_email) or die(mysqli_error($conexao));
foreach ($count as $values) {
}
if (isset($_POST['cadastrar'])) {
    //se o email não estiver cadastrado no banco de dados, ele cairá no if
    if ($values['count_email'] < 1) {
        //criptografia de senha
        $senha = base64_encode($_POST['senha']);
        //insert no banco de dados
        $query = "INSERT INTO login_google.usuarios(nome_complet,email,senha,telefone,cpf) VALUES('$_POST[nome]','$_POST[email]','$senha','$_POST[telefone]','$_POST[cpf]')";
        mysqli_query($conexao, $query) or die(mysqli_error($conexao));
        session_start();
        $_SESSION['logado'] = 1;
        session_write_close();
        header('Location:../home.php');
    } else {
        //aviso de email já cadastrado
        $_SESSION['logado']=0;
        echo "Email já cadastrado";
    }
}
