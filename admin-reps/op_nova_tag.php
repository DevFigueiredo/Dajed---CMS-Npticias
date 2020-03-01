<?php 
include "validaSessao.php";



echo '<br/>'.$tag = $_POST['tag'];
echo '<br/>'.$id = $_POST['republica'];

$dados=array(
    "nome_tag"=>$tag,
    "fk_republica" =>$id
);

$op = inserir("republica_tags",$dados);

if($op){
    echo "<script>alert('TAG Cadastrada com Sucesso');</script>";
    header("Location: tags.php");
}else{
    echo "<script>alert('ERRO!!! PROBLEMA AO INSERIR!');</script>";
    header("Location: tags.php");
}

?>