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
			<a class="list-group-item font-weight-bold" href="<?php echo $url; ?>/cliente/logoff">Sair  <i class="fa fa-sign-out-alt" aria-hidden="true"></i></a>  
		</ul>
	</aside> <!-- col.// -->
	<main class="col-md-9">

		<article class=" mb-3 card-resumo painel-aba">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active fonte-weight-bold" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pedidos</a>
	</li>

	<li class="nav-item">
		<a class="nav-link font-weight-bold" id="profile-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="profile" aria-selected="false">Detalhes Pedido</a>
	</li>
	</ul>
	<div class="tab-content" id="myTabContent">

	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

	<!-- TABELA PEDIDOS-->

		<article class=" mb-3">
					<div class="card-body">
						<table class="table">

					<thead class="thead titulo-tabela">
						<tr>
						<th>Data do Pedido</th>
						<th>Total da Compra</th>
						<th></th>

						</tr>
					</thead>

					<tbody>
	<?php foreach ($pedidos as $pedido) { ?>
						<tr>

						<th scope="row"><?php echo $pedido['data_pedido'] ?></th>
						<td>R$ <?php echo  number_format($pedido['total'],2, ",",","); ?></td>
						<td> <a name="" id="" class="btn btn-warning titulo-tabela" href="#" role="button">Detalhes</a></td>
						</tr>
	<?php } ?>
					</tbody>

				</table>
				</div> <!-- card-body .// -->
			</article> <!-- card.// -->

	<!-- TABELA PEDIDOS-->
	</div>

			<div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">
			<article class=" mb-3">

			<form class="form-horizontal">
<fieldset>

				<!-- Form Name -->
				<!-- Text input-->
				<div class="form-group">
				<label class="col-md-4 control-label" for="id">Id</label>  
				<div class="col-md-2">
				<input id="id" name="id" type="text" value="<?php echo $produto['id'] ?>"  disabled="disabled" placeholder="Id do pedido" class="form-control input-md">
					
				</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				<label class="col-md-4 control-label" for="datacompra">Data da Compra</label>  
				<div class="col-md-4">
				<input id="datacompra" disabled="disabled" value="<?php echo $detalhe['data_pedido'] ?>" name="datacompra" type="text" placeholder="Data da Compra" class="form-control input-md">
					
				</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				<label class="col-md-4 control-label" for="frete">Frete</label>  
				<div class="col-md-4">
				<input id="frete" disabled="disabled" name="frete" type="text" placeholder="Frete" class="form-control input-md">
					
				</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				<label class="col-md-4 control-label" for="prazo">Prazo</label>  
				<div class="col-md-4">
				<input id="prazo" disabled="disabled" value="<?php echo $dados['dias']."dias"; ?>" name="prazo" type="text" placeholder="Prazo" class="form-control input-md">
					
				</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				<label class="col-md-4 control-label" for="total">Total</label>  
				<div class="col-md-4">
				<input id="total" disabled="disabled" value="R$ <?php echo  number_format($detalhe['preco'],2, ",",","); ?>" name="total" type="text" placeholder="Total do Pedido" class="form-control input-md">
					
				</div>
				</div>

				</fieldset>
				</form>
				<hr>
				<article class=" mb-3">
					<div class="card-body">
						<table class="table">

					<thead class="thead titulo-tabela">
						<tr>
						<th></th>
						<th>Nome Produto</th>
						<th>Quantidade</th>
						<th>Valor</th>

						</tr>
					</thead>

					<tbody>

					<?php foreach($produtos as $produto) { ?>
						<tr>
						<th scope="row"><img width="50px" src="<?php echo $url;['imagem']?>/View/img/produtos/<?php echo $produto['imagem'] ?>" /></th>
						<td><?php echo $produto['nome'] ?></td>
						<td><?php echo $produto['quantidade'] ?></a></td>
						<td><?php echo  number_format($detalhe['preco'],2, ",",","); ?></td>
						</tr>
					<?php } ?>

					</tbody>

				</table>
				</div> <!-- card-body .// -->
			</article> <!-- card.// -->


	
			</div> <!-- card-body .// -->
			</article> <!-- card.// -->

	<!-- TABELA PEDIDOS-->


			</div> <!-- card-body .// -->
		</article> <!-- card.// -->

<!-- TABELA PEDIDOS-->

	</main> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
</div>
</div>
</div>

<?php  include "view/footer.php"?>