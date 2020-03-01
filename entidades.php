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

<br/>
<div class="container">

<div class="row ">
<div class="col-md-3 col-xl-3 col-sm-12 col-xs-12 ">
<!-- Image for Modal - DAJEDCAR -->
<center>
<figure class="figure" data-toggle="modal"  data-target="#modal1" style="cursor:pointer;"> 
      <img src="images/entidades/dajed.jpg" id="myImg" class="figure-img img-fluid rounded" style="">
  <figcaption class="figure-caption"> <strong> Diretório Acadêmico Jovem Eremias Delizoicov</strong></figcaption>
</figure>
</a>
</center>
</div>

<div class="col-md-3 col-xl-3 col-sm-12 col-xs-12 ">
<!-- Image for Modal - AAAIFSPCAR -->
<center>
<figure class="figure" data-toggle="modal"  data-target="#modal2" style="cursor:pointer;"> 
      <img src="images/entidades/aaaifspcar.jpg" id="myImg" class="figure-img img-fluid rounded" style="height:80%">
  <figcaption class="figure-caption"> <strong> Associação Academica do Instituto Federal de São Paulo Campus Caraguatatuba - AAIFSPCAR.</strong></figcaption>
</figure>
</a>
</center>
</div>

<div class="col-md-3 col-xl-3 col-sm-12 col-xs-12">
<!-- Image for Modal - GRE -->
<center>
<figure class="figure" data-toggle="modal"  data-target="#modal3" style="cursor:pointer;"> 
      <img src="images/entidades/GRE.png" id="myImg" class="figure-img img-fluid rounded">
  <figcaption class="figure-caption"> <strong> Grêmio Estudantil Professor Dr. Renato Aurélio Mainente</strong></figcaption>
</figure>
</a>
</center>
</div>



<!-- Modal 2 - DAJEDCAR -->
<div id="modal1" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Diretório Acadêmico Jovem Eremias Delizoicov - DAJEDCAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <center><img src="images/entidades/dajed.jpg" style="max-width:100%;" class="rounded" ></center>
      <p></p>
<p>O atual diretório acadêmico Jovem Eremias Delizoicov do IFSP-CAR, foi  empoçado na data de  2 de maio de 2019 e deverá  ser substituído na próxima eleição no mês de Abril de 2020.</p>
<p>A chapa Ominira eleita nesta data é a atual representante do diretório, podendo ser encontrados ou reconhecidos seus membros através das redes sociais.</p>
<p>O diretório acadêmico nada mais é que o mesmo que Centro Acadêmico. Realizam eleições anuais ou bianuais, assim como conselhos de representantes de turmas e outras ações de mobilização e organização dos estudantes. A única diferença é que em alguns casos o DA pode representar o conjunto de cursos de uma determinada faculdade.
<p>O grupo Ominira tem como objetivo auxiliar e representar os estudantes e futuros estudantes do campus Caraguatatuba abrangendo ao maior número possível de discentes suas necessidades e lutando por seus direitos.</p>
<p>Siga-nos no site do DAJED: <a href="https://dajedcaraguatatuba.com.br">https://dajedcaraguatatuba.com.br</a></p>
<p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>




<!-- Modal 2 - AAAIFSPCAR -->
<div id="modal2" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Associação Academica do Instituto Federal de São Paulo Campus Caraguatatuba - AAIFSPCAR</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<center><img src="images/entidades/aaaifspcar.jpg" class="rounded" ></center>
<p></p>
<p>Entidade responsável em promover e coordenar a parte esportiva da faculdade, organizando treinos e campeonatos externos e internos em diversas modalidades esportivas. Esta também é responsável pela integração e interação dos alunos do IFSP-Car através da organização de festas e na confecção e comercialização de produtos de sua faculdade.</p>

<P>Ter uma atlética no nosso campus é muito importante, pois exercermos um papel voltado exclusivamente para a prática de política estudantil, também irá promovemos a integração entre os estudantes, um campus unido é um campus forte.</p>


<p><strong> Por que se associar a atlética? </strong></p>

<p>Se associando a Atlética você terá benefícios de descontos em produtos, jogos, festas e até em lojas parceiras. Poderá treinar e jogar como um membro da atlética. </p>

<p><strong>Quem somos nós? </strong></p>

<p>Somos formados por um ou mais alunos de cada curso superior que o campus possui, sendo eles: Análise e desenvolvimento de sistemas, Engenharia Civil, Física, Matemática e Processos Gerenciais. Além de possuir também um integrante de um dos Cursos técnicos oferecidos pelo campus. </p>
<p>Nos unimos nos ideais de promover aos alunos do campus maior integração, diversão e práticas esportivas. </p>
<p><strong> Contato - Juliana Caroline - Matemática:</strong> (11) 97405-1602 </p>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>






<div id="modal3" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Grêmio Estudantil Professor Dr. Renato Aurélio Mainente - GRE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p></p>

<p>O grêmio estudantil é uma organização sem fins lucrativos que representa o interesse dos estudantes e que tem fins cívicos, culturais, educacionais, desportivos e sociais.</p>
<p>É o órgão máximo de representação dos estudantes dos cursos técnicos do IFSP Caraguatatuba. Atuando nele, você defende seus direitos e interesses e aprende ética e cidadania na prática.</p>
<p><Strong>Entre em contato com o grêmio através do e-mail:</Strong> geifspcar@gmail.com</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>

</div>


</div>

	<!-- Footer -->
<?php include "includes/footer.php"; ?>
</div>


<?php final_site(); ?>

