<html>
<head>
    <meta charset = "UTF-8">
    <title>MyLibrary</title>
    <link rel = "stylesheet" href = "../Style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src = "../Script/script.js"></script>
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
        <form class="d-flex" role="search" method = "post" action = "pesquisarLivro.php">
            <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search" name = "pesquisar-livro">
            <button class="btn btn-success" type="submit">Buscar</button>
        </form>
        </div>
    </div>
    </nav>

</body>
</html>