 <?php 
include './includes/global.php';
include './includes/Estoque.php';
$title = "Listagem de Estoque";
include './template/header.php';

?>
<div class="center">
    <table style="width: 100%">
        <tr style="background: #CCC; ">
<th>Acao</th>
<th>Id</th>
<th>Nome</th>
<th>Valor</th>
<th>Quantidade</th>
<th>Data de Validade</th>


        </tr> <tr style="background: #CCC; ">
<?php listar();
include './template/footer.php';
?></tr> 
            </table>
<?php excluir(); ?>