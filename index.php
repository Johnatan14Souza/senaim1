
 <?php 
 
include './includes/global.php';
include './includes/Estoque.php';
$title = "Controle de Estoque";
include './template/header.php';

$title = "Controle de Estoque"; ?><div class='center'>
    
    <?php 
     salvar();
    ?>
    
<form class='center' method="post">
    <h2 style="text-align: center;"> Cadastro de Produtos</h2>
    Nome:<input type='text' name='Nome'>
    Valor:<input type='text' name='Valor'>
    Quantidade:<input type='text' name='Quantidade'>
    Data de Validade:<input type='text' name='Data_de_validade'>
    <input type='submit' value='Enviar'>
   
</form></div>

<?php
     
       include './template/footer.php';    
        
        ?>
