
<?php include "view/header.php"?>

<div class="jumbotron">
        <div class="container mt-5">
        <h2>Painel do Cliente</h2>
        </div>
    </div>

</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<div class="row">
	<aside class="col-md-3 ">
		<ul class="list-group" style=background-color: #6f42c1;>
			<a class="list-group-item info-painel font-weight-bold text-center" > Painel do Cliente </a>
			<a class="list-group-item"> 
			<div class="">"<?php echo $_SESSION['clientenome']; ?>" está logado. <span class="badge badge-success">Online</span>  </div>
			<a class="list-group-item" href="<?php echo $url; ?>/painel/cliente">Meus Pedidos</a>
			<a class="list-group-item" href="<?php echo $url; ?>/atualiza/cliente">Alterar Informações</a>  
			<a class="list-group-item font-weight-bold" href="<?php echo $url; ?>/cliente/logoff">Sair  <i class="fa fa-sign-out-alt" aria-hidden="true"></i></a>  
		</ul>
	</aside> 

				


	</div>


</div> <!-- container .//  -->
</section>
</div>
</div>
</div>

<?php  include "view/footer.php"?>