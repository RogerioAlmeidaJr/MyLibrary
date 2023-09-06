<?php

    include("../../Conection/conexao.php");
    include("../CrudUsuario/protectSession.php");

    $vIdUsuario = $_SESSION['id'];
    $vTitulo = $_POST["titulo-livro"];
    $vAutor = $_POST["autor-livro"];
    $vQtd = $_POST["qtd-livro"];
    $vPreco = $_POST["preco-livro"];
    $vData = $_POST["data-livro"];

    $sql = "insert into livros (iduser, titulo, autor, qtd, prc, data) values ('$vIdUsuario', '$vTitulo', '$vAutor', '$vQtd', '$vPreco', '$vData')";

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
                            <h2>Inserir</h2>
                        </section>
    
                        <p align = "center">Livro inserido com sucesso</p>
    
                        <p align="center"><a href="../../Screens/inserir.php"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button></a></p>
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
                            <h2>Inserir</h2>
                        </section>
    
                        <p align = "center">Erro ao inserir dados</p>
    
                        <p align="center"><a href="../../Screens/inserir.php"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button></a></p>
                    </div>
                </div>
            </div>
        </body>
        </html>
        <?php
        }
    ?>