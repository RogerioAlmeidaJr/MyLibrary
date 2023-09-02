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
</head>
<body bgcolor="#D5D5D5">

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