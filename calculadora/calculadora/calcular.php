<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculador</title>
    <link rel="stylesheet" href="/css/bootstrap-reboot.min.css">
            <link rel="stylesheet" href="/css/style.css">
            <link rel="stylesheet" href="/css/bootstrap.min.css">
            <link rel="stylesheet" href="/css/bootstrap-grid.min.css">

            <script src="/js/jquery.min.js"></script>
            <script src="/js/bootstrap.min.js"></script>
            <script src="/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="row">
    <header class="col-md-12">
    <h1>Calculadora</h1>
    </header>
    </div>
    </div>
    <section class="col-md-12">
    <?php 
        $calculo;
        echo 'A conta:' . $_GET['numero1'] . $_GET['operacao'] . $_GET['numero2'].'<br>';

        switch ($_GET['operacao']){


            case "+":
                $calculo=$_GET['numero1']+$_GET['numero2'];
                echo("O valor da:" . $calculo);
                break;

            case "-":
            $calculo=$_GET['numero1']-$_GET['numero2'];
            echo("O valor da:" . $calculo);
            break;

            case "*":
            $calculo=$_GET['numero1']*$_GET['numero2'];
            echo("O valor da:" . $calculo);
            break;

            case "/":
            $calculo=$_GET['numero1']/$_GET['numero2'];
            echo("O valor da:" . $calculo);
            break;
        }
    ?>
    </section>
</body>
</html>