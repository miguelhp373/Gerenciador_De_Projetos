<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Projetos - Login</title>
    <link rel="stylesheet" href="../styles/registrar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Criar Um Conta</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
    <form action="../../src/view/new_account.php" method="POST">
            <div class="container_login">
                <br>
                <h1 class="d-flex flex-row justify-content-center title_container">Criar Conta</h1>

                <div class="container_components d-flex flex-row justify-content-center mt-5">
                    <input type="email" name="emailcreate" id="emailcreate" class="email_login_field" placeholder="Email:" required maxlength="200">
                </div>

                <div class="container_components d-flex flex-row justify-content-center mt-5">
                    <input type="text" name="usercreate" id="usercreate" class="email_login_field" placeholder="Usuário:" required maxlength="200">
                </div>

                <div class="container_components d-flex flex-row justify-content-center mt-5">
                    <input type="password" name="passcreate" id="passcreate" class="pass_login_field" placeholder="Senha:" required maxlength="200">
                </div>

                <div class="container_components d-flex flex-row justify-content-center mt-5">
                    <button type="submit" id="button_login" class="button_login">Pronto</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>