<?php
function aprint(){
    $arquivo = "Dados.txt";
    //Variável $fp armazena a conexão com o arquivo e o tipo de ação.

    $data = Array();
    if($fp = fopen($arquivo,"r")) {
        while($line = fgets($fp,"1024")) {
            $data[] = $line;
        
        }
    
    } else {
        echo 'Erro ao tentar abrir o arquivo!';
    }

    for($i=0;$i<sizeof($data);$i++)
    {
      
        echo "<th>$data[$i]</th>";
        if(($i+1) % 6 ==0){
            echo "<tr></tr>";
        }
}
}    
    echo "<table border=1 style=width:100%>";
    echo        "<thead>";
    echo           "<tr>";
    echo                "<th>Nome</th>";
    echo                "<th>preço</th>";
    echo                "<th>Codigo De Barras</th>";
    echo                "<th>Quantidade</th>";
    echo                "<th>Lote</th>";
    echo                "<th>Validade</th>";
    echo            "</tr>";
    echo        "</thead>";
    

    aprint();
    echo "</table>";
?>

