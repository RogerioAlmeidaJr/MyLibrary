<!-- Conexão ao BD -->
<?php

    include("../Conection/conexao.php");

    $sql = "select * from livros order by id desc";

    $result = $mysqli -> query($sql);

?>

<html>
<head>
    <meta charset = "UTF-8">
    <title>CRUD_Livraria_Listar</title>
    <link rel = "stylesheet" href = "../Style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

    <!-- Menu Superior -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WebLivraria</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="listar.php">Listar</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cadastrar.php">Cadastrar</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="alterar.php">Alterar</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="remover.php">Remover</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <!-- Corpo do site -->
    <nav class = "nav-corpo-listar">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                <th scope="col">Lançamento</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($dados_livro = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$dados_livro['id']."</td>";
                echo "<td>".$dados_livro['nome']."</td>";
                echo "<td>".$dados_livro['autor']."</td>";
                echo "<td>".$dados_livro['quantidade']."</td>";
                echo "<td>".$dados_livro['preco']."</td>";
                echo "<td>".$dados_livro['data']."</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>

    </nav>

</body>
</html>