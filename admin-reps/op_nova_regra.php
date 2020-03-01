<?php 
include "validaSessao.php";



echo '<br/>'.$regra = $_POST['regra'];
echo '<br/>'.$id = $_POST['republica'];

$dados=array(
    "regra"=>$regra,
    "fk_republica" =>$id
);

$op = inserir("republica_regras",$dados);

if($op){
    echo "<script>alert('REGRA Cadastrada com Sucesso');</script>";
    header("Location: regras.php");
}else{
    echo "<script>alert('ERRO!!! PROBLEMA AO INSERIR!');</script>";
    header("Location: regras.php");
}

?>