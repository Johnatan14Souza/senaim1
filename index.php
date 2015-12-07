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
include './includes/Estoque.php';
$title = "Controle de Estoque";
include './template/header.php';

$title = "Controle de Estoque"; ?><div class='center'>
<?php 
if(isset($_SESSION['usuario'])){
    header("location:Listagem.php");
}
if(empty($_SESSION)){
      header("location:Session.php"); 
}
?>
  
    <?php 
     salvar();
    ?>
    
    <form class='center' method="post"></br>
    <h2 style="text-align: center;">Cadastrar Serie de The Walking Dead</h2>
    Nome:<input type='text' name='Nome'>
    Numero do episodio<input type='text' name='Valor'>
    Temporada<input type='text' name='Data_de_validade'>
    Horario:<input type='text' name='Quantidade'>

    <center>Terceira Dimensao</br>
        Sim<input   type='radio' name='tresd' value='Sim'>
   <input type='radio' name='tresd' value='Nao'> Nao</br></br>
   Classificacao de Idade</br>
   Adulto<input   type='radio' name='Classificao' value='Adulto'>
   <input type='radio' name='Classificao' value='Livre'>Livre</br>
    </br></br></br></br><input type='submit' value='Enviar'>
   
</form></div>
</center>
<?php
     
       include './template/footer.php';    
        
        ?>
    <h2<?php  
    if(isset($_COOKIE["nome"])){
     echo "Bem Vindo ". $_COOKIE["nome"]; 
    }
     ?>></h2>