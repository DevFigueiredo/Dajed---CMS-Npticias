<?php 
include "validaSessao.php";

$ativo = $_POST['ativo'];
if($ativo=='on')
$ativo =1;
else
$ativo=0;


echo 'ativo '.$ativo;
echo '<br/>'.$titulo = $_POST['titulo'];
echo '<br/>'.$capacidade = $_POST['capacidade'];
echo '<br/>'.$telefone = $_POST['telefone'];
echo '<br/>'.$email = $_POST['email'];
echo '<br/>'.$responsavel = $_POST['responsavel'];
echo '<br/>'.$valor_total = $_POST['valor_total'];
echo '<br/>'.$quartos = $_POST['quartos'];
echo '<br/>'.$banheiro = $_POST['banheiros'];
echo '<br/>'.$quartos_tamanho = $_POST['quartos_tamanho'];
echo '<br/>'.$quintais = $_POST['quintais'];
echo '<br/>'.$garagem = $_POST['garagem'];
echo '<br/>'.$vagas = $_POST['vagas'];
echo '<br/>'.$tipo = $_POST['tipo'];
echo '<br/>'.$perfil = $_POST['perfil'];
echo '<br/>'.$descricao = $_POST['descricao'];
echo '<br/>'.$iframe = $_POST['iframe'];
echo '<br/>'.$pessoas_p_quarto = $_POST['pessoas_p_quarto'];
echo '<br/>'.$bairro = $_POST['bairro'];

$dados=array(
    "ativo"=>$ativo,
    "titulo"=>$titulo,
    "fk_responsavel"=>$responsavel,
    "capacidade"=>$capacidade,
    "descricao"=>$descricao,
    "qtd_quartos"=>$quartos,
    "qtd_banheiros"=>$banheiro,
    "tam_quarto"=>$quartos_tamanho,
    "qtd_quintal"=>$quintais,
    "qtd_garagem"=>$garagem,
    "qtd_vagas"=>$vagas,
    "perfil_republica"=>$perfil,
    "telefone"=>$telefone,
    "valor_total"=>$valor_total,
    "pessoas_quarto"=>$pessoas_p_quarto,
    "localizacao"=>$iframe,
    "bairro"=>$bairro,
    "fk_republica_tipo"=>$tipo
);

$op = inserir("republica_info",$dados);
$pasta = str_replace(" ","_",preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($titulo)))); // retira todos os espaçamentos e caracteres especiais para criar uma pasta
$pasta_nome = $pasta;
$pasta = "../images/".$pasta;
mkdir($pasta, 0777, true);//Aqui ele cria o diretório da pasta que irá arquivar as imagens da republica


if(isset($_FILES['files'])){
    $errors = array();
$principal =1;
    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name){
        $file_name = $key.$_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];        
        $file_parts = pathinfo($file_name);//Returns an associative array containing file information       
        $extensions = array("jpeg","jpg","png");//Allowed file

    if($file_size > 2097152){
echo "<script>alert('Tamanho do arquivo de ser menor que 2MB');</script>;";
    }else{

    if(in_array ($file_parts['extension'],$extensions)){

        //Rename file
        $file_parts = ".".$file_parts['extension'];
        $file_name = uniqid().$file_parts;



            if(empty($errors)==true){
            //Move the file to a specific folder    
            move_uploaded_file($file_tmp, $pasta.'/'.$file_name);   
            echo "<script>alert('Extensão Não Permitida');</script>;";
            Header('Location: republicas.php');
            }else{
                print_r($errors); 
            }//if(empty($errors)==true){

        }else{

            echo "<script>alert('Extensão Não Permitida');</script>;";

        }//if(in_array ($file_parts['extension'],$extensions))

    }//if($file_size > 2097152){    

    if(empty($errors)){

        print_r("<pre>".$file_name."</pre>");
        $republica = consultar("republica_info ORDER BY id DESC");
        $id_ultima_rep = $republica[0]['id'];
        
        $dados = array(
            "principal"=> $principal,
            "imagem"=> 'images/'.$pasta_nome.'/'.$file_name,
            "fk_republica" => $id_ultima_rep
        );
        if($principal==1){
            $principal=0;   
        }//Reconhece a primeira imagem anexada como a imagem principal 
        $op = inserir("republica_imagens", $dados);

    }//if(empty($errors))

    }//foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name)


}

if($op){
    echo "<script>alert('Republica Cadastrada com Sucesso');/script>;";
    //echo "<meta http-equiv='refresh' content='2; URL='painel.php' />";
  // header("Location: painel.php");

}else{
    echo "<script>alert('PROBLEMA ao cadastrar Republica'); window.history.back();</script>;";
    //echo "<meta http-equiv='refresh' content='2; URL='painel.php' />";
    //header("Location: painel.php");
}

?>