<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com o google</title>
</head>
<body>
    <?php
    session_start();
    //se não estiver logado, será redirecionado para a tela de login
    if($_SESSION['logado']==0){
        header('Location:login.php');
    }
    session_write_close();
    ?>
    <h1>Logado</h1>
</body>
</html>