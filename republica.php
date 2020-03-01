<?php 
include "Model/crud.php";
include "Model/functions.php";
include "Model/estrutura_site.php"; 
if(isset($_GET['republica'])){
		$id_republica = $_GET['republica'];
	$republica = ConsultaRepublica($_GET['republica']);
	 $titulo = $republica[0]['titulo'];
     iniciar_site($titulo);

}else{
iniciar_site("REPUBLICAS");
    
}
?>


 

<div class="super_container">

	<!-- Header -->

	<?php include "includes/header_menu.php"; ?>

	<!-- Home -->
	<?php include "includes/home_search.php"; 
	if(isset($_GET['republica'])):
		$id_republica = $_GET['republica'];
	$republica = ConsultaRepublica($_GET['republica']);
	if($republica):
	?>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
			<div class="col ">
    
					<div class="intro_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="intro_title_container">
							<div class="intro_title"><?php echo $republica[0]['titulo']; ?></div>
							<div class="intro_tags">
								<ul>
								  <?php if(isset($id_republica)):
									$tags_rep = ConsultaTagsRepublica($id_republica);
									foreach($tags_rep as $tag_rep):
									?>	
								
									<li><a href="#"><?php echo $tag_rep['nome_tag']; ?></a></li>
								
									<?php endforeach; endif; ?>
								</ul>
							</div>
						</div>
	
						<!-- Botão de Se Insecrever para Republica -->
						<div class="col-4"></div>
						<a href="inscrever_se.php?republica=<?php echo $id_republica; ?>" class="link" >
						<div class="intro_price_container ml-lg-auto d-flex flex-column align-items-start justify-content-center">
						<div>Inscrever-se na Republica</div>
							<div class="intro_price">R$ <?php echo $republica[0]['valor_total']; ?></div>
						</div>
						</a>

						</div>
						</div>
					
				</div>
			</div>
		</div>
		

<center>
 <div class="bd-example">

  <?php
  $i=0;
		$rep_imagens = ConsultaFotosRepublica($id_republica);
?>	

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
 
 
  <?php   foreach($rep_imagens as $rep_imagem): 
	if($rep_imagem['principal']==1){
	?>
  <div class="carousel-item active">
      <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=Primeiro Slide" alt="Primeiro Slide [800x400]" src="<?php echo $rep_imagens[0]['imagem']; ?>" data-holder-rendered="true">
    </div>
	<?php }else{ ?>
    <div class="carousel-item">
      <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Segundo Slide" alt="Segundo Slide [800x400]" src="<?php echo $rep_imagem['imagem']; ?>" data-holder-rendered="true">
    </div>

 <?php } endforeach;  ?>

  </div>

  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>


</div>
</div>
</center>



	<!-- Continer com as informações do corpo da pagina -->

	<div class="property">
		<div class="container">
			<div class="row">
				

				<!-- Informações sobre a Republica -->
				<div class="col-lg-7 offset-lg-1">
					<div class="property_content">
						<div class="property_icons">
							<div class="property_title">Informações sobre a casa</div>
							<div class="property_text property_text_1">
								<p><?PHP echo $republica[0]['perfil_republica']; ?></p>
							</div>
							<div class="property_rooms d-flex flex-sm-row flex-column align-items-start justify-content-start">

								<!-- Icone de Quarto -->
								<div class="property_room">
									<div class="property_room_title">Quartos</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/room_1.png" alt=""></div>
										<div class="room_num"><?PHP echo $republica[0]['qtd_quartos']; ?></div>
									</div>
								</div>
                               		<!-- Icone de Quarto -->
								<div class="property_room">
									<div class="property_room_title">Vagas</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/person_1.png" style="width: 30px"  alt=""></div>
										<div class="room_num"><?PHP echo $republica[0]['qtd_vagas']; ?></div>
									</div>
								</div>

								<!-- Icone de Banheiro -->
								<div class="property_room">
									<div class="property_room_title">Banheiros</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/room_2.png" alt=""></div>
										<div class="room_num"><?PHP echo $republica[0]['qtd_banheiros']; ?></div>
									</div>
								</div>

								<!-- Icone de Tamanho do Quarto -->
								<div class="property_room">
									<div class="property_room_title">Tamanho Quarto</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/room_3.png" alt=""></div>
										<div class="room_num"><?PHP echo $republica[0]['tam_quarto']; ?></div>
									</div>
								</div>

								<!-- Icone de Quintal -->
								<div class="property_room">
									<div class="property_room_title">Quintal</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/room_4.png" alt=""></div>
										<div class="room_num"><?PHP echo $republica[0]['qtd_quintal']; ?></div>
									</div>
								</div>

								<!-- Icone da Garagem-->
								<div class="property_room">
									<div class="property_room_title">Garagem</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/room_5.png" alt=""></div>
										<div class="room_num"><?PHP echo $republica[0]['qtd_garagem']; ?></div>
									</div>
								</div>

							</div>
						</div>

						<!-- Descrição -->

						<div class="property_description">
							<div class="property_title">Descrição da Republica</div>
							<div class="property_text property_text_2">
								<p><?PHP echo $republica[0]['descricao']; ?></p>
							</div>
						</div>

						<!-- Regras Adicionais -->

						<div class="additional_details">
							<div class="property_title">Regras Adicionais</div>
							<div class="details_container">
								<ul>
								<?PHP 
							    //Funcao que consulta o banco e armazena na array as regras 
								$regras = ConsultaRegrasRepublica($id_republica);
								foreach($regras as $regra): ?>
            				<li><strong><?php echo $regra['regra']; ?></strong></li>		
								<?PHP endforeach; ?>          
			</ul>
							</div>
						</div>

						<!-- Propriedades do Mapa - Localização -->

						<div class="property_map">
							<div class="property_title">Fica Localizada abaixo:</div>
							<div class="property_map_container">

								<!-- Google Map -->
								<div id="google_map" class="google_map">
									<div class="map_container">
                             <?php echo $republica[0]['localizacao']; ?>
								</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
	endif;
endif;
	if(!isset($_GET['republica'])):
?>
<div class="property">
		<div class="container">
			<div class="row">
			<div class="col">
					<div class="intro_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
						
	</div>
	<center>
	<h2>ERRO: PAGINA NAO ENCONTRADA!</h2>
</center> 
	</div>
	</div>
	</div>
	</div>


	<?php
	     endif;
	?>
	<!-- Footer -->
	<?php include "includes/footer.php"; ?>

</div>


<?php final_site(); ?>