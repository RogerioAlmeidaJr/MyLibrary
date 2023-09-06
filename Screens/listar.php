<!-- Conexão ao BD -->
<?php

    include("../Conection/conexao.php");
    include("../Crud/CrudUsuario/protectSession.php");

    $idUsuario = $_SESSION['id'];

    $sql = "select * from livros where idUser = '$idUsuario'";

    $result = $mysqli -> query($sql);

?>

<html>
<body>

    <!-- Menu Superior -->
    <?php include("menuSup.php")?>

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
                echo "<td>".$dados_livro['idLivro']."</td>";
                echo "<td>".$dados_livro['titulo']."</td>";
                echo "<td>".$dados_livro['autor']."</td>";
                echo "<td>".$dados_livro['qtd']."</td>";
                echo "<td>".$dados_livro['prc']."</td>";
                echo "<td>".$dados_livro['data']."</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>

    </nav>

</body>
</html>