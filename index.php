<?php
include "Model/crud.php";
include "Model/functions.php";
include "Model/estrutura_site.php"; 
iniciar_site("REPUBLICAS CARAGUA");
?>
 


<div class="super_container">

	<!-- Header -->
	<?php include "includes/header_menu.php"; ?>

	
	<!-- Home com o Search-->
<?php include "includes/home_search.php"; ?>



	<!-- Propiedades do Topo -->

	<div class="properties">
		<div class="container">
			<div class="row">
			    				<div class="col-12">
			    <p style="color:green;"><strong>Você é novo no IFSP Caraguatatuba ?</strong> <br/>Entre no grupo de Calouros:<strong> <a class="link" href="https://chat.whatsapp.com/KCFy4WsP5PE5OUJ5hRKfS6">Clique Aqui</a></strong></p>
                <br/>                </div>
				<div class="col">
				<?php $reps_encontradas = total('select * from republica_info where ativo=1'); ?>	
				<div class="section_title"><?php echo $reps_encontradas; ?> Republicas encontradas</div>
					<div class="section_subtitle">Veja a que vc acha mais legal :)</div>
				
				</div>
			</div>



<!-- Listagem de Republicas -->
			<div class="row properties_row">
				
			<?php 
			
		$republicas = ConsultaListaRepublicas();
		if($republicas):

		   foreach($republicas as $republica):
 ?>
				<!-- Republica -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
					<a href="republica.php?republica=<?php echo $republica['id']; ?>">
						<div class="property_image">
							<!-- Imagem Principal da Republica -->
							<img src="<?php echo $republica['imagem']; ?>" style="width: 100%; height: 280px; " alt="" >
							<div class="<?php echo $republica['cor']; ?> property_tag"><a href="#"><?php echo $republica['tipo']; ?></a></div>
						</div>
				</a>
				<a href="republica.php?republica=<?php echo $republica['id']; ?>">
				
						<div class="property_body text-center">
							<div class="property_location"><?php echo $republica['bairro']; ?></div>
							<div class="property_title"><?php echo $republica['titulo']; ?></div>
							<div class="property_price">R$ <?php echo $republica['valor_total']; ?></div>
						</div>
				</a>
				<a href="republica.php?republica=<?php echo $republica['id']; ?>">
				
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
						    <div><div class="property_icon"><img src="images/icon_1.png" alt=""></div><span><?php echo $republica['qtd_vagas']; ?> Vaga(s)</span></div>
							<div><div class="property_icon"><img src="images/icon_2.png" alt=""></div><span><?php echo $republica['qtd_quartos']; ?> Quarto(s)</span></div>
							<div><div class="property_icon"><img src="images/icon_3.png" alt=""></div><span><?php echo $republica['qtd_banheiros']; ?> Banheiro(s)</span></div>
						</div>
</a>
					</div>
				</div>
		   <?php endforeach; endif; ?>
	
	
	
	
	
			</div>
			
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<!-- Footer -->
<?php include "includes/footer.php"; ?>
</div>


<?php final_site(); ?>

