<?php
function editar(){
$arr = file('Dados.txt');

foreach($arr as $k=>$linha){
    if(stripos($linha, 'yaki') !== false){
        for($i=0;$i<6;$i++){
            unset($arr[$k+$i]);
        }
    }
}
file_put_contents('Dados.txt',$arr);

$arquivo = "Dados.txt";
$fp = fopen($arquivo, "a+");

fwrite($fp,"\r\n"."1\r\n"."2\r\n"."3\r\n"."4\r\n"."5\r\n"."6\r\n");


fclose($fp)
}

editar();
?>