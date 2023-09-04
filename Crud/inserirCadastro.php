<?php

    include("../Conection/conexao.php");

    $vTitulo = $_POST["titulo-livro"];
    $vAutor = $_POST["autor-livro"];
    $vQtd = $_POST["qtd-livro"];
    $vPreco = $_POST["preco-livro"];
    $vData = $_POST["data-livro"];

    $sql = "insert into livros (nome, autor, quantidade, preco, data) values ('$vTitulo', '$vAutor', '$vQtd', '$vPreco', '$vData')";

    $result = $mysqli -> query($sql) or trigger_error($mysqli -> error);

    if(mysqli_affected_rows($mysqli) > 0){?>
        <div class="modal" id = "myModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastro</h5>
                    </div>
                    <div class="modal-body">
                        <p>Livro cadastrado com sucesso</p>
                    </div>
                    <div class="modal-footer">
                        <a href="../Screens/cadastrar.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <?php
    }else{
        echo "Erro ao inserir";
    }
?>