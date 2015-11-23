<?php 
if(file_exists("global.php")){
include_once './global.php';
}else if(file_exists("includes/global.php")){
include_once './includes/global.php';
}

function salvar(){
    if(
        isset($_POST['Nome']) and                  
        isset($_POST['Valor']) and                  
        isset($_POST['Quantidade']) 
    )        
        {
        
$Nome =($_POST['Nome']);              
$Valor = ($_POST['Valor']);              
$Quantidade =($_POST['Quantidade']);
$Data_de_validade = (isset($_POST['Data_de_validade']) ? $_POST['Data_de_validade'] : "");


$SQL ="INSERT INTO produto(Nome, Valor, Quantidade, Data_de_validade) values (:Nome, :Valor, :Quantidade, :Data_de_validade);";
$preparo = conexao()->prepare($SQL);
$preparo->bindValue(":Nome", $Nome);
$preparo->bindValue(":Valor", $Valor);
$preparo->bindValue(":Quantidade", $Quantidade);
$preparo->bindValue(":Data_de_validade", $Data_de_validade);
$preparo->execute();
         
if($preparo->rowCount()== 1){
    echo "Sucesso";
} else{
    echo 'Erro!';
}
}

}
function listar(){
    $SQL = "SELECT * FROM produto WHERE 1;";
    $preparo = conexao()->prepare($SQL);
    $preparo->execute();
    while ($linha = $preparo->fetch(PDO::FETCH_ASSOC)){
      echo "<tr style='background: #CCC; '>";
        echo "<td> <a  value='Excluir' href='?Excluir".$linha["idProduto"]."'>Excluir</a></td>";
       echo "<td>".$linha["idProduto"]."</td>";
        echo "<td>".$linha['Nome']."</td>";
        echo "<td>".$linha['Valor']."</td>";
        echo "<td>".$linha['Quantidade']."</td>";
        echo "<td>".$linha['Data_de_validade']."</td>";
        echo "</tr>";       
    }
}

function excluir(){
     $SQL1 = "Delete FROM produto WHERE idProduto = :idProduto";
    $preparo = conexao()->preparo($SQL1);
    $preparo->bindValue(":idProduto", $_GET["Excluir"]);
   $preparo->execute();
   



     


}