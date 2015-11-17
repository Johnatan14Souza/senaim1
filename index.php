
 <?php 
 

include './includes/global.php';
include './template/footer.php';

$title = "Controle de Estoque"; ?><div class='center'>
<form class='center' method="post">
    Nome:<input type='text' name='nome'>
    Valor:<input type='text' name='valor'>
    Quantidade:<input type='text' name='quantidade'>
    Data de Validade:<input type='text' name='data_de_validade'>
    <input type='submit' value='Enviar'>
   
</form></div>

<?php
       include './template/header.php';    
        
        ?>
