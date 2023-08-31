<?php

    include("../Conection/conexao.php");

    $vId = $_POST["id-livro"];

    $sql = "delete from livros where id = '$vId'";

    $result = $mysqli -> query($sql) or trigger_error($mysqli -> error);

    if(mysqli_affected_rows($mysqli) > 0){?>
        <div class="modal" id = "myModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Remover</h5>
                    </div>
                    <div class="modal-body">
                        <p>Cadastro removido com sucesso</p>
                    </div>
                    <div class="modal-footer">
                        <a href="../Screens/remover.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }else{
        echo "Erro ao Remover dados";
    }
?>