<?php include("../Crud/CrudUsuario/protectSession.php")?>

<html>
<head>
    <meta charset = "UTF-8">
    <title>MyLibrary</title>
    <link rel = "stylesheet" href = "../Style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

    <!-- Menu Superior -->
    <?php include("menuSup.php")?>

    <!-- Corpo do site -->
    <div class = "nav-corpo">
        <div class = "div-corpo">

            <section class = "up-titulo">
                <h2>Remover</h2>
            </section>

            <form class = "form-corpo" method="post" action="../Crud/CrudLivros/removerLivro.php">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "id-livro" placeholder="insira o id do livro">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" id = "remover">Remover</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>