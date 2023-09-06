<?php

    include("../Conection/conexao.php");
    include("../Crud/CrudUsuario/protectSession.php");

    $idUsuario = $_SESSION['id'];
    $vPesquisar = $_POST['pesquisar-livro'];

    $sql = "select * from livros where idLivro = '$vPesquisar' and idUser = '$idUsuario'";

    $result = $mysqli -> query($sql);

    $dados_livro = mysqli_fetch_assoc($result);

    if(mysqli_affected_rows($mysqli) > 0){?>

    <html>
    <head>
        <meta charset = "UTF-8">
        <title>MyLibrary</title>
        <link rel = "stylesheet" href = "../Style/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
        <body>

            <?php include("menuSup.php")?>

            <div class="nav-corpo">
                <div class="div-corpo">
                    <div class="modal-content">
        
                        <section class = "up-titulo">
                            <h2>Pesquisar</h2>
                        </section>
        
                        <p align = "center">Dados do livro</p>

                        <form class = "form-corpo">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">ID:</label>
                                <label for="exampleFormControlInput1" class="form-label"><?php echo $dados_livro['idLivro']?></label>
                                </br>
                                <label for="exampleFormControlInput1" class="form-label">Título:</label>
                                <label for="exampleFormControlInput1" class="form-label"><?php echo $dados_livro['titulo']?></label>
                                </br>
                                <label for="exampleFormControlInput1" class="form-label">Autor:</label>
                                <label for="exampleFormControlInput1" class="form-label"><?php echo $dados_livro['autor']?></label>
                                </br>
                                <label for="exampleFormControlInput1" class="form-label">Quantidade:</label>
                                <label for="exampleFormControlInput1" class="form-label"><?php echo $dados_livro['qtd']?></label>
                                </br>
                                <label for="exampleFormControlInput1" class="form-label">Preço:</label>
                                <label for="exampleFormControlInput1" class="form-label"><?php echo $dados_livro['prc']?></label>
                                </br>
                                <label for="exampleFormControlInput1" class="form-label">Data:</label>
                                <label for="exampleFormControlInput1" class="form-label"><?php echo $dados_livro['data']?></label>
                            </div>
                        </form>
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
            <link rel = "stylesheet" href = "../Style/style.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        </head>
        <body>

            <?php include("menuSup.php")?>

            <div class="nav-corpo-log">
                <div class="div-corpo">
                    <div class="modal-content">
    
                        <section class = "up-titulo">
                            <h2>Pesquisar</h2>
                        </section>
    
                        <p align = "center">Dados do livro</p>
                        <p align = "center">Erro ao retornar dados do livro</p>
                    </div>
                </div>
            </div>
        </body>
        </html>
        <?php
        }
    ?>