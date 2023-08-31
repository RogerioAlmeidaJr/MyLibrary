<?php

    include("../Conection/conexao.php");

    $vId = $_POST["id-livro"];
    $vTitulo = $_POST["titulo-livro"];
    $vAutor = $_POST["autor-livro"];
    $vQtd = $_POST["qtd-livro"];
    $vPreco = $_POST["preco-livro"];
    $vData = $_POST["data-livro"];

    $sql = "update livros set nome = '$vTitulo', autor = '$vAutor', quantidade = '$vQtd', preco = '$vPreco', data = '$vData' where id = '$vId'";

    $result = $mysqli -> query($sql) or trigger_error($mysqli -> error);

    if(mysqli_affected_rows($mysqli) > 0){?>
        <div class="modal" id = "myModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Alterar</h5>
                    </div>
                    <div class="modal-body">
                        <p>Cadastro alterado com sucesso</p>
                    </div>
                    <div class="modal-footer">
                        <a href="../Screens/alterar.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }else{
        echo "Erro ao Alterar dados";
    }
?>