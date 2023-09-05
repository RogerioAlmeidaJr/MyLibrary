<?php

    include("../../Conection/conexao.php");

    if(isset($_POST['email-user']) || isset($_POST['senha-user'])){

        $email = $mysqli -> real_escape_string($_POST['email-user']);
        $senha = $mysqli -> real_escape_string($_POST['senha-user']);

        $sql_code = "select * from user where email = '$email' and senha = '$senha'";
        $sql_query = $mysqli -> query($sql_code) or die("falha no login" . $mysqli -> error);

        $qtd = $sql_query -> num_rows;

        if($qtd == 1){
            $user = $sql_query -> fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['email'] = $user['email'];

            header("Location: ../../Screens/home.php");

        }else{
            echo "Falha ao logar! email ou senha incorretos";
        }

    }

?>