<style> .d{
             text-decoration: none;
             border: 9px;
             text-align: 90px;
             background: gray;
             color: white;
             padding-right: 70%;
             
             }</style>

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
        isset($_POST['tresd']) and
            isset($_POST['Classificao']) and 
        isset($_POST['Quantidade']) 
    )        
        {
        
$Nome =($_POST['Nome']);              
$Valor = ($_POST['Valor']);              
$Quantidade =($_POST['Quantidade']);
$Classificao =($_POST['Classificao']);
$tresd =($_POST['tresd']);
$Data_de_validade = (isset($_POST['Data_de_validade']) ? $_POST['Data_de_validade'] : "");


$SQL ="INSERT INTO produto(Nome, Valor, Quantidade, Data_de_validade, Classificao,tresd) values (:Nome, :Valor, :Quantidade, :Data_de_validade,:Classificao,:tresd);";
$preparo = conexao()->prepare($SQL);
$preparo->bindValue(":Nome", $Nome);
$preparo->bindValue(":Valor", $Valor);
$preparo->bindValue(":Quantidade", $Quantidade);
$preparo->bindValue(":Classificao", $Classificao);
$preparo->bindValue(":Data_de_validade", $Data_de_validade);
$preparo->bindValue(":tresd", $tresd);
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
      
        echo "<td> <a   value='Excluir' href='?Excluir=".$linha["idProduto"]."'>Excluir</a></td>";
                echo "<td> <a   value='editar' href='?editar=".$linha["idProduto"]."'>editar</a></td>";
        echo "<td>".$linha["idProduto"]."</td>";
        echo "<td>".$linha['Nome']."</td>";
        echo "<td>".$linha['Valor']."</td>";
        echo "<td>".$linha['Quantidade']."</td>";
        echo "<td>".$linha['Data_de_validade']."</td>";
        echo "<td>".$linha['tresd']."</td>";
        echo "<td>".$linha['Classificao']."</td>";
        
        echo "</tr>";       
    }
}
function listar2(){
    $SQL = "SELECT * FROM produto WHERE 1;";
    $preparo = conexao()->prepare($SQL);
    $preparo->execute();
    while ($linha = $preparo->fetch(PDO::FETCH_ASSOC)){
      echo "<tr style='background: #CCC; '>";
              
        echo "<td>".$linha["idProduto"]."</td>";
        echo "<td>".$linha['Nome']."</td>";
        echo "<td>".$linha['Valor']."</td>";
        echo "<td>".$linha['Quantidade']."</td>";
        echo "<td>".$linha['Data_de_validade']."</td>";
        echo "<td>".$linha['tresd']."</td>";
        echo "<td>".$linha['Classificao']."</td>";
        
        echo "</tr>";       
    }
}
function excluir(){
 if(isset($_GET['Excluir'])){
    $sql2 = "DELETE FROM produto WHERE `idProduto` = :idProduto;";
    $preparo = conexao()->prepare($sql2);
    $preparo->bindValue(":idProduto", $_GET["Excluir"]);
   $preparo->execute();
   
}}


function editar(){
   
    if(isset($_GET['editar'])){
        $id = $_GET['editar'];

        $SQL = "SELECT * FROM produto WHERE id =:id;";
        $prepare = conexao()->prepare($SQL);
        $prepare->bindValue(":id",$id);
        $prepare->execute();
        if($linha = $prepare->fetch(PDO::FETCH_ASSOC)){
               ?>
<form method="post">
    <input type="hidden" name="editar" value="<?= $linha['id'] ?>"/></br>
    Nome:</br>
    <input type="text" name="Nome" value="<?= $linha['Nome'] ?>"/></br>
    Valor:</br>
   <input type="text" name="Valor" value="<?= $linha['Valor'] ?>"></br>
    Quantidade:</br>
   <input type="text" name="Quantidade" value="<?= $linha['Quantidade'] ?>"/></br>
     Validade:  </br>
   <input type="text" name="Data_de_validade" value="<?= $linha['Data_de_validade'] ?>"/></br>
   
    <input type="submit" value="editar" />
 
</form>
       <?php     
        }
           
}}
    
function editar2(){

    if(
    isset($_POST['editar']) and
    isset($_POST['Nome']) and
    isset($_POST['Valor']) and
    isset($_POST['Quantidade']) and
    isset($_POST['Data_de_validade'])
    ){

        $SQL = "UPDATE produto SET Nome = :Nome, Valor=:Valor, Quantidade=:Quantidade, Data_de_validade=:Data_de_validade Where id=:id;";
        $preparo = conexao()->prepare($SQL);
         $preparo->bindValue("id", $_POST['editar']);
        $preparo->bindValue(":Nome", $_POST['Nome']);
        $preparo->bindValue(":Valor", $_POST['Valor']);
        $preparo->bindValue(":Quantidade", $_POST['Quantidade']);
        $preparo->bindValue(":Data_de_validade", $_POST['Data_de_validade']);
        $preparo->execute();
    if($preparo->rowCount() == 1){
    header("Location: /listagem.php");
    }
    }
}