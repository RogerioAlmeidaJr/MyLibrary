<?php

    include("../../Conection/conexao.php");

    $nome = $_POST["nome-user"];
    $email = $_POST["email-user"];
    $senha = $_POST["senha-user"];

    $sql = "insert into user (nome, email, senha) values ('$nome', '$email', '$senha')";

    $result = $mysqli -> query($sql) or trigger_error($mysqli -> error);

    if(mysqli_affected_rows($mysqli) > 0){?>
        <div class="modal" id = "myModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastro</h5>
                    </div>
                    <div class="modal-body">
                        <p>Cadastro realizado com sucesso</p>
                    </div>
                    <div class="modal-footer">
                        <a href="../../index.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Logar</button></a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <?php
    }else{
        echo "Erro ao cadastrar";
    }
?>