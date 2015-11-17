<?php 
if(file_exists("global.php")){
    include_once './global.php';
}else if(file_exists("includes/Global.php")){
      include_once '.includes/global.php';
}

function salvar(){
    if(
        isset($_POST['nome']) and                  
        isset($_POST['valor']) and                  
        isset($_POST['quantidade'])                 
    ){
$nome =($_POST['nome']);              
$valor = ($_POST['valor']);              
$quantidade =($_POST['quantidade']);     
    }
}

$SQL ="";
$preparo = conexao()->prepare($SQL);
$preparo->execute();
if($preparo-rowCount()==1){
    echo "Sucesso";
}
else{
    echo 'Erro!';
}