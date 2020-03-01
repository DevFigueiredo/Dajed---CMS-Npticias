<?php 
include "validaSessao.php";

$ativo = $_POST['ativo'];
if($ativo=='on')
$ativo =1;
else
$ativo=0;


echo 'ativo '.$ativo;
echo '<br/>'.$nome = $_POST['nome'];
echo '<br/>'.$idade = $_POST['idade'];
echo '<br/>'.$genero = $_POST['sexo'];
echo '<br/>'.$curso = $_POST['curso'];
echo '<br/>'.$telefone = $_POST['telefone'];
echo '<br/>'.$email = $_POST['email'];
echo '<br/>'.$usuario = $_POST['usuario'];
echo '<br/>'.$senha = $_POST['senha'];
$dados=array(
    "ativo"=>$ativo,
    "nome" =>$nome,
    "idade" =>$idade,
    "genero" =>$genero,
    "curso" =>$curso,
    "telefone" =>$telefone,
    "email" =>$email,
    "usuario" =>$usuario,
    "senha" =>$senha
);

$op = inserir("republica_responsavel",$dados);

if($op){
    echo "<script>alert('RESPONSAVEL Cadastrado com Sucesso');</script>";
    header("Location: responsaveis.php");
}else{
    echo "<script>alert('ERRO!!! PROBLEMA AO INSERIR!');</script>";
    header("Location: responsaveis.php");
}

?>