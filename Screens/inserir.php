<?php include("../Crud/CrudUsuario/protectSession.php")?>

<html>
<body>

    <!-- Menu Superior -->
    <?php include("menuSup.php")?>

    <!--Corpo do site-->
    <div class = "nav-corpo">
        <div class = "div-corpo">

            <section class = "up-titulo">
                <h2>Inserir</h2>
            </section>

            <form class = "form-corpo" method="post" action="../Crud/CrudLivros/inserirLivro.php">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Título</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "titulo-livro" placeholder="insira o titulo do livro">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Autor</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "autor-livro" placeholder="insira o autor do livro">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Quantidade</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "qtd-livro" placeholder="insira a quantidade em estoque">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "preco-livro" placeholder="insira o preço do livro">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Data</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name = "data-livro" placeholder="insira a data de lançamento">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" id = "btnInserirLivro">Inserir</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>