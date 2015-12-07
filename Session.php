
<style> .e{
             text-decoration: none;
             border: 9px;
             border-radius: 5px;
             background: gray;
             color: white;
       
             
             }</style>
<a class="e" href="registrar.php">Registrar</a><?php
$title = "Login";
include_once("includes/global.php");


if(
    isset($_POST['email']) and
    isset($_POST['senha'])
) {
    $SQL = "SELECT email, idusuario FROM `usuario` WHERE `email`=:email and `senha` = :senha;";
    $preparo = conexao()->prepare($SQL);
    $preparo->bindValue(":email", $_POST['email']);
    $preparo->bindValue(":senha", $_POST['senha']);
    $preparo->execute();

    if ($preparo->rowCount() == 1) {
        $linha = $preparo->fetch(PDO::FETCH_ASSOC);
        $_SESSION['usuario'] = $linha;
}}  
if(isset($_SESSION['usuario'])){
    header("Location: /Listagem.php");
}

    if (
        isset($_POST['email']) and
        isset($_POST['senha'])
    ) {
        $SQL = "SELECT email, idadmin FROM `admin` WHERE `email`=:email and `senha` = :senha;";
        $preparo = conexao()->prepare($SQL);
        $preparo->bindValue(":email", $_POST['email']);
        $preparo->bindValue(":senha", $_POST['senha']);
        $preparo->execute();

        if ($preparo->rowCount() == 1) {
            $linha = $preparo->fetch(PDO::FETCH_ASSOC);
            $_SESSION['admin'] = $linha;
    }}
    if(isset($_SESSION['admin'])){header("Location: /index.php");
}
?>

<?php include_once ("template/header.php"); ?>

<?php  if(isset($msg)){ ?>
    <div data-alert class="alert-box alert">
        <?= $msg ?>
        <a href="#" class="close">&times;</a>
    </div>
<?php } ?>
<center>
    <form method="post" class="log">
        <div class="row">
       
            </br>
                <label>
                    Login:
                    <input   type="text" name="email" />
                </label>
       
                <label>
                    Senha:
                    <input     type="password" name="senha" />
                </label>
         
                <input class="button tiny" type="submit" value="Entrar" />
        
        </div>
    </form>

</center>
<?php include_once ("template/footer.php"); 


    include './Incluir.php';

?>
