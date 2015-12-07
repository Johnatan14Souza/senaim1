<style> .a{
             text-decoration: none;
             border: 9px;
             border-radius: 5px;
             background: gray;
             color: white;
       
             
             }</style>
<a class="a" href="Administrador.php">Visualizar Filmes</a>
        
 <?php 
 
 
include './includes/global.php';
include './Registrarlogin.php';
$title = "Registrar";
include './template/header.php';

$title = "Registrar"; ?><div class='center'>

    <?php 
     salvar2();
    ?>
    
    <form class='center' method="post"></br>
    <h2 style="text-align: center;">Registrar</h2>
    Nome:<input type='text' name='email'>
    Senha:<input type='password' name='senha'>
    <center>
    </br></br></br></br><input type='submit' value='Registrar'>
   
</form></div>
</center>
<?php
     
       include './template/footer.php';    
        
        ?>
