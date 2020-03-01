<?php
include "validaSessao.php";
include "Model/functions.php";
include "Model/estrutura_site.php"; 
//FUNÇÃO DE INICIAR SITE CONTEM - MENU SUPERIOR, MENU LATERAL
iniciar_site("Responsáveis"); ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Informações do Responsavel</h1>





          <form action="op_novo_responsavel.php" method="post">
<!-- CHECKBOX DE ATIVAR / INATIVAR -->
<label class="switch">
  <input type="checkbox" name="ativo" checked>
  <span class="slider round"></span>
</label>
          <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Nome</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Nome" name="nome"  required>
      <div class="valid-tooltip">
        Insita este campo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Curso</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Curso" name="curso"  required>
      <div class="valid-tooltip">
        Insira este campo!
      </div>
    </div>
   
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Telefone</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="(12) 99999-9999" name="telefone" required>
      <div class="valid-tooltip">
        Insira o campo de telefone!
      </div>
    </div>
   


  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">E-Mail</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="E-Mail" name="email" required>
      <div class="invalid-tooltip">
       Insira o Email!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Sexo</label>
      <input type="text" class="form-control" id="validationTooltip04" placeholder="Sexo" name="sexo" required>
      <div class="invalid-tooltip">
     Insira o sexo
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Idade</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="Idade" name="idade"  required>
      <div class="invalid-tooltip">
    Insita a Idade 
    </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Usuário</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="Usuário" name="usuario"  required>
      <div class="invalid-tooltip">
       Insira o Usuário
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Senha</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="Senha" name="senha" required>
      <div class="invalid-tooltip">
       Insira o Email!
      </div>
    </div>
  </div>

  <input class="btn btn-primary" type="submit" value="Salvar Responsável">
</form>


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
                      <th>Titulo</th>
                      <th>Curso</th>
                      <th>Telefone</th>
                      <th>Idade</th>
                      <th>Sexo</th>
                      <th>E-Mail</th>
                      <th colspan="2">Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $responsaveis = ConsultaResponsavel(); 
                   foreach($responsaveis as $responsavel):
                  ?>
                    <tr>
                      <td><?php echo $responsavel['nome']; ?></td>
                      <td><?php echo $responsavel['curso']; ?></td>
                      <td><?php echo $responsavel['telefone']; ?></td>
                      <td><?php echo $responsavel['idade']; ?></td>
                      <td><?php echo $responsavel['genero']; ?></td>
                      <td><?php echo $responsavel['email']; ?></td>
                      <td><a>Edit</a></td>
                      <td><a>Remove</a></td>
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