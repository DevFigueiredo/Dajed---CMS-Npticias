
<?php 
include "validaSessao.php";
include "Model/functions.php";
include "Model/estrutura_site.php"; ?>

<?php
//FUNÇÃO DE INICIAR SITE CONTEM - MENU SUPERIOR, MENU LATERAL
iniciar_site("Republicas"); ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">


        
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Informações da Republica</h1>




          <form action="op_nova_republica.php" method="post"  enctype="multipart/form-data">

<!-- CHECKBOX DE ATIVAR / INATIVAR -->
<label class="switch">
  <input type="checkbox" name="ativo" checked>
  <span class="slider round"></span>
</label>

<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Titulo</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Titulo" name="titulo"  required>
      <div class="valid-tooltip">
        Insita este campo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Capacidade</label>
      <input type="number" class="form-control" name="capacidade" id="validationTooltip02" placeholder="Capacidade"  required>
      <div class="valid-tooltip">
        Insira este campo!
      </div>
    </div>
   
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Telefone</label>
      <input type="text" class="form-control" id="validationTooltip02" name="telefone" placeholder="(12) 99999-9999"  required>
      <div class="valid-tooltip">
        Insira o campo de telefone!
      </div>
    </div>
   


  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">E-Mail</label>
      <input type="email" class="form-control" id="validationTooltip03" placeholder="E-Mail" name="email"  required>
      <div class="invalid-tooltip">
       Insira o Email!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Responsável</label>
      <div class="form-group">
    <select class="custom-select" name="responsavel" required>
      <option value="">Nome do Responsável</option>
      <?php $responsaveis = consultar("republica_responsavel");
      foreach($responsaveis as $responsavel):
      ?>
      <option value="<?php echo $responsavel['id']; ?>"><?php echo $responsavel['nome']; ?></option>

      <?php endforeach; ?>
      </select>
    <div class="invalid-feedback">Insira este campo</div>
  </div>
 </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Valor Total Republica</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="Idade" name="valor_total" value="A Combinar"  required>
      <div class="invalid-tooltip">
    Insira este campo! 
    </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Quant.Quartos</label>
      <input type="text" class="form-control" id="validationTooltip05" name="quartos" placeholder="Quartos"  required>
      <div class="invalid-tooltip">
    Insira este campo! 
    </div>
    </div> <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Quant. Banheiros</label>
      <input type="number" class="form-control" id="validationTooltip05" name="banheiros" placeholder="Banheiros"  required>
      <div class="invalid-tooltip">
    Insira este campo! 
    </div>
    </div> <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Pessoas por Quartos</label>
      <input type="number" class="form-control" id="validationTooltip05" name="pessoas_p_quarto" placeholder="Qnt. Pessoas por Quartos"  required>
      <div class="invalid-tooltip">
    Insira este campo! 
    </div>
    </div> <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Tamanho m² Quarto</label>
      <input type="text" class="form-control" id="validationTooltip05" name="quartos_tamanho" placeholder="Tamanho do Quarto" value="N/A"  required>
      <div class="invalid-tooltip">
    Insira este campo! 
    </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Quant. Quintais</label>
      <input type="number" class="form-control" id="validationTooltip05" name="quintais" placeholder="Quintais"  required>
      <div class="invalid-tooltip">
    Insira este campo! 
    </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Quant. Garagem</label>
      <input type="number" class="form-control" id="validationTooltip05" name="garagem" placeholder="Garagem"  required>
      <div class="invalid-tooltip">
    Insira este campo! 
    </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Quant. Vagas</label>
      <input type="number" class="form-control" id="validationTooltip05" name="vagas" placeholder="Vagas"  required>
      <div class="invalid-tooltip">
    Insira este campo! 
    </div>
    </div>


    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Tipo de Republica</label>
      <div class="form-group">
    <select class="custom-select" name="tipo" required>
      <option value="">Tipo da Republica</option>
      <?php $responsaveis = consultar("republica_tipo");
      foreach($responsaveis as $responsavel):
      ?>
      <option value="<?php echo $responsavel['id']; ?>"><?php echo $responsavel['tipo']; ?></option>

      <?php endforeach; ?>
    </select>
    <div class="invalid-feedback">Insira este campo</div>
  </div>
 </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Bairro</label>
    <input type="text" class="form-control" id="validationTooltip05" name="bairro" placeholder="Bairro"  required>
  </div>
 <div class="form-group">
    <label for="exampleFormControlTextarea1">Perfil da Republica</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="perfil" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descrição</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="descricao" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Iframe do Google</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="iframe" rows="3"></textarea>
  </div>


  <div class="form-group">
<div class="custom-file">
<label for="exampleFormControlTextarea1" name="imagens">Insira as imagens da Republica Abaixo(Apenas Imagens)</label><br>
<input type="file" name="files[]" multiple required>

</div>
</div>
<br>
<br>
  <input class="btn btn-primary" type="submit" value="Salvar Republica">
</form>
<br>

<hr>


          <!-- TABELA DE RESPONSAVEIS CADASTRADOS -->
          <h1 class="h3 mb-2 text-gray-800">Responsáveis Cadastrados</h1>
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
                    <th>Status</th>
                    <th>Titulo</th>
                      <th>Responsável</th>
                      <th>Telefone</th>
                      <th>E-Mail</th>
                      <th>Tipo Republica</th>
                      <th colspan="2">Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $republicas = ConsultaListaRepublicas();
                      foreach($republicas as $republica):
                        
                      ?>
                    <tr>
                      <td><strong><?php  if($republica['reps_status']){ echo "Ativo"; }else echo "Inativo"; ?></strong></td>
                      <td><?php echo $republica['titulo']; ?></td>
                      <td><?php echo $republica['nome']; ?></td>
                      <td><?php echo $republica['telefone']; ?></td>
                      <td><?php echo $republica['email']; ?></td>
                      <td><?php echo $republica['tipo']; ?></td>
                      <td><a href="">Edit</a></td>
                      <td><a href="op_acoes_republica.php?opcao=excluir&id=<?php echo $republica['rep_id']; ?>">Remove</a></td>
                    </tr>
                      <?php endforeach; ?>
                    
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