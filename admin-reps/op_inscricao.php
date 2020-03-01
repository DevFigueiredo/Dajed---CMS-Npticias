<?php 
include "Model/crud.php";

if(isset($_GET['op']) && isset($_GET['id'])):
$id=$_GET['id'];
if($_GET['op']=='excluir'){

deletar("republica_contato","id=$id");

header("Location: inscricoes.php");
}


endif;