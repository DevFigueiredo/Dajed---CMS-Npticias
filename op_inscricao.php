<?php
include "Model/crud.php";
include "Model/functions.php";

//Variáveis
 $id_republica = $_POST['republica'];
$republica = ConsultaRepublica($_POST['republica']);
$nome_republica = $republica[0]['titulo'];
$email_republica = $republica[0]['email'];


 $nome = $_POST['nome'];
$idade = $_POST['idade'];
$telefone= $_POST['telefone'];
$curso = $_POST['curso'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$mensagem = $_POST['informacoes_inscrito'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$tempo = date('Y-m-d H:i:s');




//1------------------------------------------------------------------------
// Compo E-mail
$arquivo = "
<style type='text/css'>
body {
margin:0px;
font-family:Verdane;
font-size:12px;
color: #666666;
}
a{
color: #666666;
text-decoration: none;
}
a:hover {
color: #FF0000;
text-decoration: none;
}
</style>
  <html>
A uma nova inscrição para a sua republica, caso você se interesse as informações do inscrito estão abaixo...<br/>

      <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
          <tr>
            <td>
            <tr>
            <td width='500'>Republica:$nome_republica</td>
           </tr>
            <tr>
               <td width='500'>Nome:$nome</td>
              </tr>
              <tr>
                <td width='320'>E-mail:<b>$email</b></td>
   </tr>
    <tr>
                <td width='320'>Telefone:<b>$telefone</b></td>
              </tr>
   <tr>
                <td width='320'>Sexo:$sexo</td>
              </tr>
              <tr>
              <td width='320'>Curso:$curso</td>
            </tr>
              <tr>
                <td width='320'>Mensagem:$mensagem</td>
              </tr>
          </td>
        </tr>  
        <tr>
          <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
        </tr>
      </table>
  </html>
";
$dados=array(
    "nome"=>$nome,
    "idade"=>$idade,
    "telefone"=>$telefone,
    "curso"=>$curso,
    "sexo"=>$sexo,
    "email"=>$email,
    "mensagem"=>$mensagem,
    "fk_republica"=>$id_republica,
    "tempo" => $tempo
);

$op = inserir("republica_contato",$dados);



//enviar para o dono da republica   
  // emails para quem será enviado o formulário
  $emailenviar = "contato@dajedcaraguatatuba.com.br";
  $destino = $email_republica;
  $assunto = "Há uma nova inscrição para sua republica";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: REPUBLICAS CARAGUA <'.$emailenviar.'>'."\r\n";
      $headers .= 'Bcc: miranda.f@aluno.ifsp.edu.br; elkefabiana@ifspcaragua.net\r\n';
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if(isset($enviaremail) && $enviaremail==true){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo "<script>alert('Sua inscrição para republica $nome_republica foi realizada com sucesso')</script>";
  } else {
  echo "<script>alert('Não foi possível inscrever-se na republica')</script>";  }









//2-----------------------------------------------------------------------
















  
$arquivo1 = "
<style type='text/css'>
body {
margin:0px;
font-family:Verdane;
font-size:12px;
color: #666666;
}
a{
color: #666666;
text-decoration: none;
}
a:hover {
color: #FF0000;
text-decoration: none;
}
</style>
  <html>
<u>Ficamos feliz por você estar utilizando nossa plataforma! Logo Retornaremos Contato!</u>
Sua inscrição já foi encaminhada para o responsável da Republica com as Informações Abaixo.

      <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
          <tr>
            <td>
            <tr>
            <td width='500'>Republica:$nome_republica</td>
           </tr>
            <tr>
               <td width='500'>Nome:$nome</td>
              </tr>
              <tr>
                <td width='320'>E-mail:<b>$email</b></td>
   </tr>
    <tr>
                <td width='320'>Telefone:<b>$telefone</b></td>
              </tr>
   <tr>
                <td width='320'>Sexo:$sexo</td>
              </tr>
              <tr>
              <td width='320'>Curso:$curso</td>
            </tr>
              <tr>
                <td width='320'>Mensagem:$mensagem</td>
              </tr>
          </td>
        </tr>  
        <tr>
          <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
        </tr>
      </table>
  </html>
";





      



      
//enviar para o dono da republica   
  // emails para quem será enviado o formulário
  $emailenviar = "contato@dajedcaraguatatuba.com.br";
  $destino = $email;
  $assunto = "Você se inscreveu na Republica $nome_republica - REPUBLICAS CARAGUA";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: REPUBLICAS CARAGUA <'.$emailenviar.'>'."\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
header("Location: index.php");  
?>