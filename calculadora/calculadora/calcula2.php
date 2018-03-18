<?php
    require_once "src/Calculator.php";

    $calculator = new Calculator();




    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $operacao = $_GET['operacao'];


    $result = Calculator::calculate($numero1, $numero2, $operacao);

     include_once "src/partials/_head.php";
     include_once "src/partials/_header.php";

       echo "O resultado da operação $numero1 $operacao $numero2 é $result";


?>