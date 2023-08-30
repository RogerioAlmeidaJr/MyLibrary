<!-- Conexão ao BD -->
<?php include("../Conection/conexao.php")?>

<html>
<head>
    <meta charset = "UTF-8">
    <title>CRUD_Livraria_Remover</title>
    <link rel = "stylesheet" href = "../Style/style.css">
</head>
<body>

    <!-- Menu Superior -->
    <nav class = "nav-menu-sup">

        <ul class = "ul-menu-sup">
            <li><a href = "listar.php">Listar</a></li>
            <li><a href = "cadastrar.php">Cadastrar</a></li>
            <li><a href = "alterar.php">Alterar</a></li>
            <li><a href = "remover.php">Remover</a></li>
        </ul>

    </nav>

    <!-- Corpo do site -->
    <nav class = "nav-corpo">

        <div class = "div-corpo">

            <section class = "up-titulo">
                <h2>Remover</h2>
            </section>

            <form class = "form-corpo">
                <div class = "div-form">

                <label>ID</label>
                <input type = "text" id = "id" name = "id-livro" class = "form-input">

                <button type = "submit" id = "cadastrar">Remover</button>

                </div>
            </form>
        </div>

    </nav>

</body>
</html>