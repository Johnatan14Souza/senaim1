<html>
  <head>
        <title><?php echo $title ?></title>
        <link type='text/css'  rel="stylesheet" href="/template/style/app.css" />
        <style>
            
            .b{
             text-decoration: none;
             border: 9px;
             border-radius: 5px;
             background: gray;
             color: white;
       
             float:right;
             }
             
        </style>
 
        <?php if(empty($_SESSION)){
       echo ' <a class="b" href="Session.php"><?php ?>Logar</a>' ;
            
            
        }elseif(!empty ($_SESSION)){
         echo '<a class="b" href="Deslogar.php"><?php ?>Deslogar</a>';
        }
        
        ?>
           
    </head>  <body background="trabalho.jpg">
    <center>
        
<?php
//
//if(file_exists("global.php")){
//include_once './global.php';
//}else if(file_exists("includes/global.php")){
//include_once './includes/global.php';
//}
//     $SQL = "SELECT * FROM usuario WHERE = $_SESSION = idusuario;";
//     $preparo = conexao()->prepare($SQL);
//     $preparo->execute();
//     
//setcookie("Temporario", $_GET['Nome']);
//echo  "Bem Vindo " . $_COOKIE['Temporario'];
//?>
    </center>
    
    
    
<!--        http://blog.thiagobelem.net/trabalhando-com-cookies-no-php/-->