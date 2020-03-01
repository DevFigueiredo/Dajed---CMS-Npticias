<?php
include "validaSessao.php";
include "Model/functions.php";
include "Model/estrutura_site.php"; ?>


<?php
//FUNÇÃO DE INICIAR SITE CONTEM - MENU SUPERIOR, MENU LATERAL
iniciar_site("Responsáveis"); ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">


        
          <!-- Page Heading -->

<hr>
          <!-- TABELA DE RESPONSAVEIS CADASTRADOS -->
          <h1 class="h3 mb-2 text-gray-800">Inscrições Realizadas</h1>
          <p class="mb-4">Abaixo ficam listados todos os responsáveis cadastrados no banco de dados</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Responsáveis Cadastrados</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Idade</th>
                      <th>Telefone</th>
                      <th>Curso</th>
                      <th>Sexo</th>
                      <th>E-Mail</th>
                      <th>Mensagem</th>
                      <th>Republica</th>
                      <th colspan="2">Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $inscricoes = ConsultaInscricoes(); 
                   foreach($inscricoes as $inscricao):
                  ?>
                    <tr>
                      <td><?php echo $inscricao['nome']; ?></td>
                      <td><?php echo $inscricao['idade']; ?></td>
                      <td><?php echo $inscricao['telefone']; ?></td>
                      <td><?php echo $inscricao['curso']; ?></td>
                      <td><?php echo $inscricao['sexo']; ?></td>
                      <td><?php echo $inscricao['email']; ?></td>
                      <td><?php echo $inscricao['mensagem']; ?></td>
                      <td><?php echo $inscricao['titulo']; ?></td>
                      <td><a href onclick="ExcluiInscricao('<?php echo $inscricao['nome']; ?>',<?php echo $inscricao['id_inscricao'] ?>)">Remove</a></td>
                    </tr>
                   <?php endforeach; ?>
             
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>
        <!-- /.container-fluid -->


<!-- Script de mensagem para perguntar se tem certeza da exclusão -->
<script>

function ExcluiInscricao(nome,id) {
var excluir=confirm("Você realmente deseja excluir a inscrição de < "+nome+" >")
if(excluir){
  window.location.href = 'op_inscricao.php?op=excluir&id='+id
}else{

}

}
</script>


<?php
//Contem o footer e scripts feitos em javascript para carregamento do site
final_site(); ?>