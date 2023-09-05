<!-- Conexão ao BD -->
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
    <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MyLibrary</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="listar.php">Listar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="inserir.php">Inserir</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="alterar.php">Alterar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="remover.php">Remover</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
            <button class="btn btn-success" type="submit">Buscar</button>
        </form>
        </div>
    </div>
    </nav>

    <!-- Corpo do site -->
    <div class = "nav-corpo">
        <div class = "div-corpo">

            <section class = "up-titulo">
                <h2>Alterar</h2>
            </section>

            <form class = "form-corpo" method="post" action="../Crud/CrudLivros/alterarLivro.php">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "id-livro" placeholder="insira o id do livro">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Título</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "titulo-livro" placeholder="insira o novo titulo do livro">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Autor</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "autor-livro" placeholder="insira o novo autor do livro">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Quantidade</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "qtd-livro" placeholder="insira a nova quantidade em estoque">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "preco-livro" placeholder="insira o novo preço do livro">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Data</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name = "data-livro" placeholder="insira a nova data de lançamento">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" id = "alterar">Alterar</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>