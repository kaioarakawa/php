<?php
function death($nome){
$arr = file('Dados.txt');

    foreach($arr as $k=>$linha){
        if(stripos($linha,$nome) !== false){
            for($i=0;$i<6;$i++){
                unset($arr[$k+$i]);
                
            }
            break;
        }
    }

    file_put_contents('Dados.txt',$arr);
}




    death($_GET['Nome']);
    echo "<script>
    alert('Contato Excluido');

    window.location.href='/../inicial.php';
    </script>";


    

    
?>