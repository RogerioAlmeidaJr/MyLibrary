<?php include("../Crud/CrudUsuario/protectSession.php")?>

<html>
<body>

    <!-- Menu Superior -->
    <?php include("menuSup.php")?>

    <!-- Corpo do site -->
    <div class = "nav-corpo">
        <div class = "div-corpo">

            <section class = "up-titulo">
                <h2>Bem vindo</h2>
            </section>

            <form class = "form-corpo" method="post" action="../Crud/inserirCadastro.php">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID de usuário:</label>
                    <label for="exampleFormControlInput1" class="form-label"><?php echo $_SESSION['id']?></label>
                    </br>
                    <label for="exampleFormControlInput1" class="form-label">Nome de usuário:</label>
                    <label for="exampleFormControlInput1" class="form-label"><?php echo $_SESSION['nome']?></label>
                    </br>
                    <label for="exampleFormControlInput1" class="form-label">Email:</label>
                    <label for="exampleFormControlInput1" class="form-label"><?php echo $_SESSION['email']?></label>
                    <p align = "center"></br><a class="link-offset-2 link-underline link-underline-opacity-100" href="../Crud/CrudUsuario/logoutUsuario.php">Sair</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>