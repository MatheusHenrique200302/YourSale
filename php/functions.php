<?php
include 'conexao.php';
echo "<a href='conexao.php'>testar Conexao com BD</a>";
echo "<br>";
$cont = 0;
$sql = $pdo->prepare("SELECT * FROM tbl_produto");
$sql->execute();

foreach($sql as $res){
    extract($res);
    $nome = $prod_nome;
    $id = $prod_id;
    $preco = $prod_preco;
    if($cont == 0){
        echo "abri a div <br>";
        echo "nome:".$nome."  Preco: R$".$preco."<br>";
        $cont++;
    }else if($cont == 3){
        echo "nome:".$nome."  Preco: R$".$preco."<br>";
        echo "fechei a div";
        $cont = 0;
    }else{
        echo "nome:".$nome."  Preco: R$".$preco."<br>";
        $cont++;
    }
    
    
  
}

?>