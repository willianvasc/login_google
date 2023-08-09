<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com o google</title>
    <link rel="stylesheet" href="/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
    <?php
    session_start();
    ?>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <div class="wrapper fadeInDown d-flex justify-content-center align-items-center" style="height:100vh; background-color:#8080800a">
        <div id="formContent">

            <form method="post" action="action/cadastro_back.php">
                <div class="card">
                    <div class="card-body text-center">
                        <input type="text" id="nome" class="form-control my-2" name="nome" placeholder="nome" value="<?= $_SESSION['nome'] ?>">
                        <input type="text" id="cpf" class="form-control my-2" name="cpf" placeholder="cpf" value="">
                        <input type="email" id="email" class="form-control my-2" name="email" placeholder="Email" value="<?= $_SESSION['email'] ?>">
                        <input type="password" id="password" class="form-control my-2" name="senha" placeholder="Senha">
                        <input type="tel" id="telefone" class="form-control my-2" name="telefone" placeholder="Telefone">
                        <input type="submit" name="cadastrar" class=" btn btn-success my-2" value="Log In">
                    </div>
                </div>

            </form>
        </div>
    </div>
    <?php
    session_write_close();
    ?>
</body>

</html>