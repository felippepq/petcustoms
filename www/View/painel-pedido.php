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
			<a class="list-group-item" href="#">Alterar Informações</a>  
			<a class="list-group-item font-weight-bold" href="<?php echo $url; ?>/cliente/logoff">Sair  <i class="fa fa-sign-out-alt" aria-hidden="true"></i></a>  
		</ul>
	</aside>

	<div class="col-8">
	<form class="form-horizontal">
	<fieldset>

				<!-- Form Name -->
				<!-- Text input-->
				<div class="form-group">
				<label class="col-md-4 control-label" for="id">Id</label>  
				<div class="col-md-2">
				<input id="id" name="id" type="text" value="<?php echo $dados['pk_pedido'] ?>"  disabled="disabled" placeholder="Id do pedido" class="form-control input-md">
					
				</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				<label class="col-md-4 control-label" for="datacompra">Data da Compra</label>  
				<div class="col-md-4">
				<input id="datacompra" disabled="disabled" value="<?php echo $dados['data_pedido']; ?>" name="datacompra" type="text" placeholder="Data da Compra" class="form-control input-md">
					
				</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				<label class="col-md-4 control-label" for="frete">Frete</label>  
				<div class="col-md-4">
				<input id="frete" disabled="disabled" value=" <?php echo  number_format($dados['frete'],2, ",",","); ?>" name="frete" type="text" placeholder="Frete" class="form-control input-md">
					
				</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				<label class="col-md-4 control-label" for="prazo">Prazo</label>  
				<div class="col-md-4">
				<input id="prazo" disabled="disabled" value="<?php echo $dados['dias']." dias"; ?>" name="prazo" type="text" placeholder="Prazo" class="form-control input-md">
					
				</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				<label class="col-md-4 control-label" for="total">Total</label>  
				<div class="col-md-4">
				<input id="total" disabled="disabled" value="<?php echo number_format($dados['total'],2, ",",","); ?>" name="total" type="text" placeholder="Total do Pedido" class="form-control input-md">
					
				</div>
				</div>

				</fieldset>
				</form>
				<hr>
				<article class=" mb-3">
					<div class="card-body">
						<table class="table">

					<thead class="thead info-painel">
						<tr>
						<th></th>
						<th>Produtos</th>
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
						<td><?php echo  number_format($produto['preco'],2, ",",","); ?></td>
						</tr>
					<?php } ?>

		</tbody>
		</table>
		
		</div> <!-- card-body .// -->
		</article> <!-- card.// -->

		</div>
		</main> 
		</div>
		</div> 
		</section>
		</div>
		</div>
		</div>

<?php  include "view/footer.php"?>