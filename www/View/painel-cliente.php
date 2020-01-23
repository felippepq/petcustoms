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
	<aside class="col-md-3">
		<ul class="list-group" style=background-color: #6f42c1;>
			<a class="list-group-item bg-warning info-painel font-weight-bold" href="#"> Painel do Cliente </a>
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
		<a class="nav-link font-weight-bold" id="profile-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="profile" aria-selected="false">Editar Informações</a>
	</li>
	</ul>
	<div class="tab-content" id="myTabContent">

	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

	<!-- TABELA PEDIDOS-->

		<article class=" mb-3">
					<div class="card-body">
						<table class="table table-hover">

					<thead class="thead titulo-tabela">
						<tr>
						<th width="100px">N° Pedido</th>
						<th>Data</th>
						<th>Pedido</th>
						<th>Data</th>

						<th>Valor</th>
						</tr>
					</thead>

					<tbody>

					<?php
                        @$pedido = $_SESSION['pedido'];

                        if($pedido === null || empty($pedido->getItems())){
                            // Inicio HTML
                            ?><tr>
								<td></td>
                                  <td><p class="mx-auto">Voce não tem pedidos</p></td>
                                  </tr>
                            <?php
                            // Fim HTML
                        }else{

                            foreach ($lista->getItems() as $pedido){
                                
                                $lista = $pedido->getProduto();
                                
                                
                               // $link = ".$url./petcustoms/carrinho/remover/".$produto->getId();
                            
                                // Inicio HTML
                            ?>

						<tr>
						<th scope="row"><?php echo $_SESSION['idpedido'];?></th>
						<td>1</td>
						<td>1</td>
						<td>Jacob</td>
						<td>Thornton</td>
						</tr>

						<?php   
                    // Fim HTML
                            }
                        }
                    ?>

					</tbody>

				</table>
				</div> <!-- card-body .// -->
			</article> <!-- card.// -->

	<!-- TABELA PEDIDOS-->

	</div>

<div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">
	<form class="form-signin" method="post" action="">
                       
<div class="form-label-group">
	<input type="text" id="usuario" name="nome" class="form-control" required autofocus>
		<label for="inputUserame">Nome completo</label>
</div>

<div class="form-label-group">
	<input type="text" id="nascimento"  name="nascimento" class="form-control" required>
		<label for="inputNascimento">Data de nascimento</label>
</div>

<div class="form-label-group">
	<input type="text" id="cpf" name="cpf" class="form-control" required>
		<label for="inputCpf">CPF</label>
</div>

<div class="form-label-group">
	<input type="email" id="email" name="email" class="form-control" required>
		<label for="inputEmail">Email</label>
</div>

<div class="form-label-group">
	<input type="password" id="senha" name="senha" class="form-control" required>
		<label for="inputPassword">Senha</label>
</div>

<div class="form-label-group">
	<input type="text" id="telefone" name="telefone" class="form-control"  required>
		<label for="inputTelefone">Telefone</label>
</div>
					   
<div class="form-label-group">
	<input type="text" id="estado"  name="estado" class="form-control"  required>
		<label for="inputEstado">Estado</label>
</div>

<div class="form-label-group">
	<input type="text" id="cep" name="cep" class="form-control" required>
		<label for="inputCep">CEP</label>
</div>

<div class="form-label-group">
	<input type="text" id="endereco"  name="endereco" class="form-control" required>
		<label for="inputEndereco">Endereço</label>
</div>

<button class="btn btn-lg btn-warning btn-block text-uppercase texto-botao" type="submit" name="cadastrar" id="cadastrar">Atualizar</button>
</div>
	</div>
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