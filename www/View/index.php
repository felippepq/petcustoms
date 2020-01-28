<?php include "view/header.php"?>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                	<img class="d-block w-100 img-responsive" src="../Img/petcustoms.png" alt="First slide">
</div>
                <div class="carousel-item">
                	<img class="d-block w-100" src="../Img/promoção.png" alt="Second slide">
</div>
                <div class="carousel-item">
                	<img class="d-block w-100" src="../Img/adocao-banner.png" alt="Third slide">
</div>
    </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
</div>

<div class="container">

<div class="container frete">
	<a href ="<?php echo $url; ?>/regulamento/"><img src ="../Img/Frete.png" class="img-responsive img-fluid mx-auto col-12"/></a>
</div>

	<h2>Produtos <b>Em Ofertas</b></h2>

	
<div class="container">
    <div class="row">
        <div class="col-sm-3 mt-1">
            <div class="card">
              <img class="w-100 mt-2 mb-3 foto-produto" src="../View/img/produtos/34cda5b70ebebb9e02eec0539ead60d3.jpg" />
				<div class="card-body">
					<h4 class="card-title font-weight-bold nome-produto text-center"><a href="<?php echo $url; ?>/produto/item/41/">Camiseta Personalizada</h4>
						 <h6 class="card-subtitle mb-2 text-muted text-center"><a href="#">Roupas</h6>
				<div class="buy d-flex justify-content-between align-items-center">
					<div class="price text-dark preco-produto"><h5 class="mt-4">R$ 49,90</h5></div>
				<div>
					<a href="<?php echo $url ?>/carrinho/adicionar/41/" class="btn btn-warning mt-3 ml-2 font-weight-bold botao-carrinho"> <i  href="<?php echo $url ?>/carrinho/adicionar/<?php echo $produto['id'] ?>" class="fas fa-shopping-cart"></i> +</a>
				</div>
					</div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mt-1">
            <div class="card">
			<img class="w-100 mt-2 mb-3 foto-produto" src="../View/img/produtos/efc03c3f7d47a050f4e2caf40907f051.jpg" />
				<div class="card-body">
					<h4 class="card-title font-weight-bold nome-produto text-center"><a href="<?php echo $url; ?>/produto/item/42/">Travesseiro - Personalizado</h4>
						 <h6 class="card-subtitle mb-2 text-muted text-center"><a href="#">Acessorios</h6>
				<div class="buy d-flex justify-content-between align-items-center">
					<div class="price text-dark preco-produto"><h5 class="mt-4">R$ 80,00</h5></div>
				<div>
					<a href="<?php echo $url ?>/carrinho/adicionar/42/" class="btn btn-warning mt-3 ml-2 font-weight-bold botao-carrinho"> <i  href="<?php echo $url ?>/carrinho/adicionar/<?php echo $produto['id'] ?>" class="fas fa-shopping-cart"></i> +</a>
				</div>
					</div>
				
        </div>
		</div>
		</div>
		<div class="col-sm-3 mt-1">
            <div class="card">
			<img class="w-100 mt-2 mb-3 foto-produto" src="../View/img/produtos/7f3fbf4ce2f2c6fdb974c9a4f569fce1.jpg" />
				<div class="card-body">
					<h4 class="card-title font-weight-bold nome-produto text-center"><a href="<?php echo $url; ?>/produto/item/44/">Kit p/ Bebê e Dog</h4>
						 <h6 class="card-subtitle mb-2 text-muted text-center"><a href="#">Roupas</h6>
				<div class="buy d-flex justify-content-between align-items-center">
					<div class="price text-dark preco-produto"><h5 class="mt-4">R$ 80,00</h5></div>
				<div>
					<a href="<?php echo $url ?>/carrinho/adicionar/44/" class="btn btn-warning mt-3 ml-2 font-weight-bold botao-carrinho"> <i  href="<?php echo $url ?>/carrinho/adicionar/<?php echo $produto['id'] ?>" class="fas fa-shopping-cart"></i> +</a>
				</div>
					</div>
				
        </div>
		</div>
		</div>
		<div class="col-sm-3 mt-1">
            <div class="card">
			<img class="w-100 mt-2 mb-3 foto-produto" src="../Img/blusa-masc.jpg" />
				<div class="card-body">
					<h4 class="card-title font-weight-bold nome-produto text-center"><a href="<?php echo $url; ?>/produto/item/46/"> Brinquedo Kong</h4>
						 <h6 class="card-subtitle mb-2 text-muted text-center"><a href="#">Brinquedos</h6>
				<div class="buy d-flex justify-content-between align-items-center">
					<div class="price text-dark preco-produto"><h5 class="mt-4">R$ 69,00</h5></div>
				<div>
					<a href="<?php echo $url ?>/carrinho/adicionar/46/" class="btn btn-warning mt-3 ml-2 font-weight-bold botao-carrinho"> <i  href="<?php echo $url ?>/carrinho/adicionar/<?php echo $produto['id'] ?>" class="fas fa-shopping-cart"></i> +</a>
				</div>
					</div>
				
        </div>
		</div>
		</div>

                </div>
        </div>
<!---->
<div class="container">
	<h2>Categorias</h2>
		<div class="row ">
			<div class="card img-box mx-auto mt-3">
				<img src="../Img/cachorro.png" class="img-responsive img-fluid" href="#" width="300" alt="">
				<a href="<?php echo $url; ?>/cat/cachorro/" class="stretched-link"></a>
	</div>

	<div class="card img-box mx-auto mt-3">
		<img src="../Img/Gato.png" class="img-responsive img-fluid" href="#" width="300" alt="">
		<a href="<?php echo $url; ?>/cat/gato/" class="stretched-link"></a>
	</div>

	<div class="card img-box mx-auto mt-3">
		<img src="../Img/dono.png" class="img-responsive img-fluid" href="#" width="300" alt="">
		<a href="<?php echo $url; ?>/cat/dono/" class="stretched-link"></a>
	</div>
	</div>
	<div class="container">
	

		<h2>Adote seu <b>Pet</b></h2>

		<img src="../Img/deficientes.png" class="img-responsive img-fluid" href="#" width="1400" alt="">


		<h2 class="mt-5">Contatos</h2>
	
	<div class="row">
		<div class="col-md-3 mt-3 msg">
			<div class="contact-info ">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				
				<h4>Nos envie uma mensagem!</h4>
			</div>
		</div>
		<div class="col-md-9 contact">
			<div class="contact-form">
				<div class="form-group">
				
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Digite seu nome" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Digite um assunto" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
				  </div>
				</div>
				<div class="form-group">
				
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment" placeholder="Digite sua mensagem"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Enviar</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>




		</div>
	</div>
</div>
</div>

<?php include "view/footer.php"?>