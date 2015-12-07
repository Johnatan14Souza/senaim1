<?php
include_once("includes/global.php");
include_once("template/footer.php");
include_once("template/header.php");
//include_once("include/Menu.php");
  
     
    if(isset($_SESSION['usuario'])){
        header("Location: /listagem.php");
    }
    if(
        isset($_POST['Nome']) and
        isset($_POST['Senha'])
    ){
        $sql = "SELECT Nome, Id FROM `usuario` WHERE `nome`=:Nome and `senha` =:Senha;";
        $preparo = conexao()->prepare($sql);
        $preparo->bindValue(":Nome", $_POST['Nome']);
        $preparo->bindValue(":Senha", $_POST['Senha']);
        $preparo->execute();
        if($preparo->rowCount() == 1){ //1 o usuario logou, 0 Nome ou Senha invalidos
            $linha = $preparo->fetch(PDO::FETCH_ASSOC);
            $_SESSION['usuario'] = $linha;
        }
        }
        elseif(
        !isset($_SESSION['usuario'])
        ){
            $msg = "Usuario ou Senha InvÃ¡lidos";
        }else{
           
            if(isset($_SESSION['usuario'])){
                header("Location: /index.php");
            }
        }
   
?>

<?php include_once ("template/header.php"); ?>

<?php  if(isset($msg)){ ?>
    <div data-alert class="alert-box alert">
        <?= $msg ?>
        <a href="#" class="close">&times;</a>
    </div>
<?php } ?>

<form method="post">
    <div class="row login">
        <div class="large-12 small-12 medium-12 columns">
            <label>
                Nome:
                <input type="text" value="ois" name="Nome" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <label>
                Senha:
                <input type="password" name="Senha" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <input class="button tiny" type="submit" value="Entrar" />
        </div>
    </div>
</form>


<?php include_once ("include/Footer.php"); ?>