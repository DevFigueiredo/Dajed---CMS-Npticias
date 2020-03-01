<?php
include "Model/crud.php";
include "Model/functions.php";
include "Model/estrutura_site.php"; 
iniciar_site("Inscrever-se em uma republica");
?>
 


<div class="super_container">

	<!-- Header -->
	<?php include "includes/header_menu.php"; ?>

	
	<!-- Home com o Search-->
<?php include "includes/home_search.php"; ?>
<div class="container">
<br><br>
<form action="op_inscricao.php" method="post">
  <div class="form-row">

  <div class="form-group col-12">
      <label for="inputState">Republica</label>
      <select id="inputState" class="form-control" required name="republica">


      <option selected value="">Escolha a Republica que quer se inscrever</option>
<?php 
$republicas = ConsultaListaRepublicas();
foreach($republicas as $republica):
//CASO O ID REPUBLICA TENHA UM GET ARMAZENADO COM O ID DA REPUBLICA ELE COMPARA SE O ID QUE ESTÁ PERCORRENDO
// CASO SEJAM IGUAIS ELE COLOCA COMO SELECIONADO
if(isset($_GET['republica']) && $_GET['republica']==$republica['id'])
$selected = "selected";
else
$selected = "";
if($republica['esgotado']!=1){
?>

<option <?php echo $selected; ?> value="<?php echo $republica['id']; ?>"><?php echo $republica['titulo'];?></option>

<?php } endforeach; ?>
      </select>
	</div>
		
  <div class="form-group col-md-6">
      <label for="inputEmail4">Seu Nome</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nome" name="nome" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputYear">Sua Idade</label>
      <input type="number" class="form-control" id="inputPassword4" placeholder="Idade" name="idade" required>
    </div>
  </div>




  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Telefone</label>
      <input type="number" class="form-control" id="inputCity" name="telefone" required>
    </div>
	<div class="form-group col-md-6">
      <label for="inputCity">Curso</label>
      <input type="text" class="form-control" id="inputCity" name="curso" required>
    </div>
  </div>
  
  <fieldset class="form-group">
    <div class="row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">E-Mail</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="E-Mail" name="email" required>
    </div>
	<label class="col-sm-1" style="font-size: 16px;">Sexo</label>
    <div class="col-sm-4">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="Masculino" required>
          <label class="form-check-label" for="gridRadios1">
            Masculino
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="Feminino" required>
          <label class="form-check-label" for="gridRadios2">
            Feminino
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><strong>Diga sobre você...</strong></label>
    <textarea class="form-control" name="informacoes_inscrito" id="exampleFormControlTextarea1" rows="7" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-bottom:50px;">Inscrever-se</button>
</form>
</div>


	
	
		</div>

	<!-- Newsletter -->

	<!-- Footer -->
<?php include "includes/footer.php"; ?>
</div>


<?php final_site(); ?>

