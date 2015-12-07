 <?php 
 
include './includes/global.php';
include './includes/Estoque.php';
$title = "Listagem de Filmes";
include './template/header.php';

?>
<?php 

excluir();

if(isset($_SESSION['usuario'])){
    header("location:Listagem.php");
}
if(empty($_SESSION)){
      header("location:Session.php"); 
}
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
<th>Excluir</th>
<th>Editar</th>
<th>Id</th>
<th>Nome</th>
<th>Numero do episodio</th>
<th>Horario</th>
<th>Temporada</th>
<th>3D</th>
<th>Classificacao de Idade</th>


        </tr> <tr style="background: #CCC; ">
            
<?php

listar();
editar();
editar2();

include './template/footer.php';


?></tr> 
            </table>  