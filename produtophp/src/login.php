<?php

function login($login,$senha){


    if($login=='admin' and $senha==1234){
        echo "<script>
        alert('Acesso permitido!!');

        window.location.href='/inicial.php';
        </script>";
    }else{
        echo "<script>
        window.location.href='/index.php';
        alert('Login ou senha errado tente novamente!!!');

        
        </script>";
    }
}

login($_GET['Usuario'],$_GET['Senha']);
?>