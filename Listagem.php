 <?php 
include './includes/global.php';
include './includes/Estoque.php';
$title = "Listagem de Filmes";
include './template/header.php';
listar2();



?>

<style> .c{
             text-decoration: none;
             border: 9px;
             border-radius: 5px;
             background: gray;
             color: white;
       
             
             }</style>
  <a class="c" href="index.php">Administrar</a>
<div class="center">
    <table style="width: 100%">
        <tr style="background: #CCC; ">
<th>Id</th>
<th>Nome</th>
<th>Numero do episodio</th>
<th>Temporada</th>
<th>Horario</th>
<th>3D</th>
<th>Classificacao de Idade</th>


        </tr> <tr style="background: #CCC; ">
            
<?php

include './template/footer.php';
include './Incluir.php';

?></tr> 
            </table>  
    
 <h2<?php  
    
     echo "Bem Vindo ". $_COOKIE["nome"]; 

     ?>></h2>