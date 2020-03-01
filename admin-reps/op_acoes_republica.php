<?php 
include "validaSessao.php";
 if(isset($_GET['id']) && (isset($_GET['opcao']) || isset($_POST['opcao']))){
  $opcao = $_GET['opcao'];
  $id = $_GET['id'];

  if($opcao=="excluir"){
    deletar("republica_tags","fk_republica=$id");
    deletar("republica_regras","fk_republica=$id");
    deletar("republica_imagens","fk_republica=$id");
    deletar("republica_info","id=$id");
   
    
    
  }
  if($opcao=="alterar") {
   
  }
header("Location: republicas.php");
}


?>