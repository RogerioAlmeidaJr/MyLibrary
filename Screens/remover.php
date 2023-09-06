<?php include("../Crud/CrudUsuario/protectSession.php")?>

<html>
<body>

    <!-- Menu Superior -->
    <?php include("menuSup.php")?>

    <!-- Corpo do site -->
    <div class = "nav-corpo">
        <div class = "div-corpo">

            <section class = "up-titulo">
                <h2>Remover</h2>
            </section>

            <form class = "form-corpo" method="post" action="../Crud/CrudLivros/removerLivro.php">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "id-livro" placeholder="insira o id do livro">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" id = "remover">Remover</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>