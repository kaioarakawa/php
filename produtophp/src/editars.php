<?php

function editar($nome,$preço,$codigodebarras,$quantidade,$lote,$validade){

$arr = file('Dados.txt');

foreach($arr as $k=>$linha){
    if(stripos($linha, $_GET['NomeAlt']) !== false){
        $cont++;
        for($i=0;$i<6;$i++){
            unset($arr[$k+$i]);
        }
        break;
    }
}
file_put_contents('Dados.txt',$arr);
if($cont==0){


    echo "<script>
    alert('Nome Não Encontrado');

    window.location.href='/../editar.php';
    </script>";

}else{
    $arquivo = "Dados.txt";
    $fp = fopen($arquivo, "a+");

    fwrite($fp,$nome."\r\n".$preço."\r\n".$codigodebarras."\r\n".$quantidade."\r\n".$lote."\r\n".$validade."\r\n");


    fclose($fp);
    echo "<script>
    alert('Efetuado Com Sucesso!');
    window.location.href='/../editar.php';
    </script>";
}

}

editar($_GET['Nome'],$_GET['preço'],$_GET['codigodebarras'],$_GET['quantidade'],$_GET['lote'],$_GET['validade']);


?>