 <?php 
if(file_exists("global.php")){
include_once './global.php';
}else if(file_exists("includes/global.php")){
include_once './includes/global.php';
}

function salvar2(){
    if(
        isset($_POST['email']) and                  
        isset($_POST['senha']) 
    )        
        {
        
$email =($_POST['email']);              
$senha = ($_POST['senha']);              

$SQL ="INSERT INTO `usuario`(`email`, `senha`) values (:email, :senha);";
$preparo = conexao()->prepare($SQL);
$preparo->bindValue(":email", $email);
$preparo->bindValue(":senha", $senha);
$preparo->execute();
         
if($preparo->rowCount()== 1){
    echo "Sucesso";
} else{
    echo 'Erro!';
}
}

}