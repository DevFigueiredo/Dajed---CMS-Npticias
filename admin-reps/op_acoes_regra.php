<?php 
include "validaSessao.php";
 if(isset($_GET['id']) && (isset($_GET['opcao']) || isset($_POST['opcao']))){
  $opcao = $_GET['opcao'];
  $id = $_GET['id'];

  if($opcao=="excluir"){
    $op = deletar("republica_regras","id=$id");
 echo $op; 
   
    
    
  }
  if($opcao=="alterar") {
   
  }
header("Location: regras.php");
}


?>