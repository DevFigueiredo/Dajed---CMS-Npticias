<?php
include "validaSessao.php";
include "Model/functions.php";
include "Model/estrutura_site.php"; 
//FUNÇÃO DE INICIAR SITE CONTEM - MENU SUPERIOR, MENU LATERAL
iniciar_site("Tags"); ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Tags de Republicas</h1>





          <form action="op_nova_tag.php" method="post">
          <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Tag</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Diga a Tag" name="tag"  required>
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
          <h1 class="h3 mb-2 text-gray-800">Tags Cadastradas</h1>
          <p class="mb-4">Abaixo ficam listados todos os responsáveis cadastrados no banco de dados</p>
<!-- Filtro de Tags -->
 <form action="Tags.php" method="get">
          <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Republica</label>
      <div class="form-group"> 
    <select class="custom-select" name="id_republica" required>
    <?php
    $Tags = consultar("republica_info");                    
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
    foreach($Tags as $Tags):
      ?>
      <option value="<?php echo $Tags['id']; ?>"><?php echo $Tags['titulo']; ?></option>

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
                      <th>Tags</th>
                      <th >Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  if(isset($_GET['id_republica']))
                  $Tags = ConsultaTagsRepublica($_GET['id_republica']); 
                  else
                  $Tags = ConsultaTagsRepublicas(); 
                  
                  if($Tags){
                  foreach($Tags as $tag):
                  ?>
                    <tr>
                      <td><?php echo $tag['titulo']; ?></td>
                      <td><?php echo $tag['nome_tag']; ?></td>
                      <td><a href="op_acoes_tag.php?opcao=excluir&id=<?php echo $tag['tag_id']; ?>"> Remover</a></td>
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