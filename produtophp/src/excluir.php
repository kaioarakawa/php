<?php
$cont=0;
function death(){
$arr = file('Dados.txt');

    foreach($arr as $k=>$linha){
        if(stripos($linha,$_GET['Nome']) !== false){
           
            for($i=0;$i<6;$i++){
                unset($arr[$k+$i]);
                $cont++;
              
            }
            break;
        }
    }

    file_put_contents('Dados.txt',$arr);
    if($cont==0){
        echo "<script>
        alert('Contato Inexistente');
    
        window.location.href='/../inicial.php';
        </script>";
    
    }else{

        echo "<script>
        alert('Contato Excluido');

        window.location.href='/../inicial.php';
        </script>";

    }

}




    death();

    

    
?>