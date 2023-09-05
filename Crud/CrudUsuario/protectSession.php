<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        echo "É necessário estar logado para acessar esta página";
    }

?>