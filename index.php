<!-- Conexão ao BD -->
<?php include("Conection/conexao.php")?>

<html>
<head>
    <meta charset = "UTF-8">
    <title>MyLibrary</title>
    <link rel = "stylesheet" href = "Style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

    <div class = "nav-corpo-log">
        <div class = "div-corpo">

            <section class = "up-titulo">
                <h2>Login</h2>
            </section>

            <form class = "form-corpo" method="post" action="Crud/CrudUsuario/logarUsuario.php">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "email-user" placeholder="insira o email cadastrado">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Senha</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "senha-user" placeholder="insira sua senha">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" id = "logarBtn">Entrar</button>
                </div>
                <p></p>
                <p align = "center"><a>Não possui um cadastro?</a></br><a class="link-offset-2 link-underline link-underline-opacity-100" href="Screens/cadastrar.php">Cadastrar</a></p>
            </form>
            
        </div>
    </div>

</body>
</html>