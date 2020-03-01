<?php
include "validaSessao.php";
include "Model/functions.php";
include "Model/estrutura_site.php"; 
//FUNÇÃO DE INICIAR SITE CONTEM - MENU SUPERIOR, MENU LATERAL
iniciar_site("Regras"); ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Regras de Republicas</h1>





          <form action="op_nova_regra.php" method="post">
          <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Regra</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Diga a regra" name="regra"  required>
      <div class="valid-tooltip">
        Insita este campo!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Republica</label>
      <div class="form-group">
    <select class="custom-select" name="republica" required>
      <option value="">Nome da Republica</option>
      <?php $republicas = consultar("republica_info ORDER BY id DESC");
      foreach($republicas as $republica):
      ?>
      <option value="<?php echo $republica['id']; ?>"><?php echo $republica['titulo']; ?></option>

      <?php endforeach; ?>
    </select>
    <div class="invalid-feedback">Insira este campo</div>
  </div>
 </div>
          </div>

  <input class="btn btn-primary" type="submit" value="Adicionar Regra">
</form>


<hr>
          <!-- TABELA DE RESPONSAVEIS CADASTRADOS -->
          <h1 class="h3 mb-2 text-gray-800">Regras Cadastradas</h1>
          <p class="mb-4">Abaixo ficam listados todos os responsáveis cadastrados no banco de dados</p>
<!-- Filtro de Regras -->
 <form action="regras.php" method="get">
          <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Republica</label>
      <div class="form-group"> 
    <select class="custom-select" name="id_republica" required>
    <?php
    $regras = consultar("republica_info");                    
    if(isset($_GET['id_republica'])){
      $id_rep = $_GET['id_republica'];
      $republica_option = consultar("republica_info","id='$id_rep'");                    
     ?>
    <option value="<?php echo $id_rep; ?>" style="color: red;"><?php echo $republica_option[0]['titulo'] ?></option>
    <?php 
    }else{ ?>
    <option value="">Nome da Republica</option>
    <?php 
    } 
    foreach($regras as $regras):
      ?>
      <option value="<?php echo $regras['id']; ?>"><?php echo $regras['titulo']; ?></option>

      <?php endforeach; ?>
    </select>
    <div class="invalid-feedback">Insira este campo</div>
  </div>
  <input class="btn btn-primary" type="submit" value="Filtrar">
 </div>
          </div>

</form>
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
                      <th>Republica</th>
                      <th>Regra</th>
                      <th >Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  if(isset($_GET['id_republica']))
                  $regras = ConsultaRegrasRepublica($_GET['id_republica']); 
                  else
                  $regras = ConsultaRegraRepublicas(); 
                  
                  if($regras){
                  foreach($regras as $regra):
                  ?>
                    <tr>
                      <td><?php echo $regra['titulo']; ?></td>
                      <td><?php echo $regra['regra']; ?></td>
                      <td><a href="op_acoes_regra.php?opcao=excluir&id=<?php echo $regra['regra_id']; ?>"> Remover</a></td>
                    </tr>
                   <?php endforeach; } else echo "Nenhuma Regra encontrada para a republica escolhida"; ?>
             
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>
        <!-- /.container-fluid -->


<?php
//Contem o footer e scripts feitos em javascript para carregamento do site
final_site(); ?>