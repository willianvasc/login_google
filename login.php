<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <div class="wrapper fadeInDown d-flex justify-content-center align-items-center" style="height:100vh; background-color:#8080800a">
        <div id="formContent">

            <form>
                <div class="card">
                    <div class="card-body text-center">
                        <input type="email" id="email" class="form-control my-2" name="email" placeholder="email">
                        <input type="text" id="password" class="form-control my-2" name="senha" placeholder="senha">
                        <input type="submit" class=" btn btn-success my-2" value="Log In">
                        <script src="https://accounts.google.com/gsi/client" async defer></script>
                        <div id="g_id_onload" data-client_id="733877546290-k75j4flh07fc4g6k1gitktcdseaure79.apps.googleusercontent.com" data-login_uri="/login%20com%20o%20google/login_google/login_back.php" data-auto_prompt="false">
                        </div>
                        <div class="g_id_signin" data-type="standard" data-size="large" data-theme="outline" data-text="sign_in_with" data-shape="rectangular" data-logo_alignment="left">
                        </div>
                    </div>
                </div>

            </form>

            <script> 
                // Função de autenticação do google
                function handleCredentialResponse(response) {
                    console.log("Encoded JWT ID token: " + response.credential);
                }
                window.onload = function() {
                    google.accounts.id.initialize({
                        client_id: "733877546290-k75j4flh07fc4g6k1gitktcdseaure79.apps.googleusercontent.com",
                        callback: handleCredentialResponse
                    });
                    google.accounts.id.renderButton(
                        document.getElementById("buttonDiv"), {
                            theme: "outline",
                            size: "large"
                        } // customization attributes
                    );
                    google.accounts.id.prompt(); // also display the One Tap dialog
                }
            </script>
        </div>
    </div>
</body>

</html>