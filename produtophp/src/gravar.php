
<?php
    //Criamos uma função que recebe um texto como parâmetro.
    function gravar($nome,$preço,$codigodebarras,$quantidade,$lote,$validade){
        $arquivo = "Dados.txt";
        //Variável $fp armazena a conexão com o arquivo e o tipo de ação.
        $fp = fopen($arquivo, "a+");
        //Escreve no arquivo aberto.
        fwrite($fp,$nome."\r\n".$preço."\r\n".$codigodebarras."\r\n".$quantidade."\r\n".$lote."\r\n".$validade."\r\n");
        //Fecha o arquivo.
        fclose($fp);
    }
    
    gravar($_GET['Nome'],$_GET['preço'],$_GET['codigodebarras'],$_GET['quantidade'],$_GET['lote'],$_GET['validade']);
    echo "<script>
    alert('Efetuado Com Sucesso!');
    window.location.href='/../inicial.php';
    </script>";

?>



