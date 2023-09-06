<?php

    include("../../Conection/conexao.php");
    include("../CrudUsuario/protectSession.php");

    $vIdUser = $_SESSION['id'];
    $vId = $_POST["id-livro"];

    $sql = "delete from livros where idLivro = '$vId' and idUser = '$vIdUser'";

    $result = $mysqli -> query($sql) or trigger_error($mysqli -> error);

    if(mysqli_affected_rows($mysqli) > 0){?>
    <html>
    <head>
        <meta charset = "UTF-8">
        <title>MyLibrary</title>
        <link rel = "stylesheet" href = "../../Style/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <div class="nav-corpo-log">
            <div class="div-corpo">
                <div class="modal-content">

                    <section class = "up-titulo">
                        <h2>Remover</h2>
                    </section>

                    <p align = "center">Livro removido com sucesso</p>

                    <p align="center"><a href="../../Screens/remover.php"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button></a></p>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
    }else{?>
    <html>
    <head>
        <meta charset = "UTF-8">
        <title>MyLibrary</title>
        <link rel = "stylesheet" href = "../../Style/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <div class="nav-corpo-log">
            <div class="div-corpo">
                <div class="modal-content">

                    <section class = "up-titulo">
                        <h2>Remover</h2>
                    </section>

                    <p align = "center">Erro ao remover dados</p>

                    <p align="center"><a href="../../Screens/remover.php"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button></a></p>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
    }
?>