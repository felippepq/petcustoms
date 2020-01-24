<?php include "view/header.php"?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 50px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                	<img class="d-block w-100 img-responsive" src="../Img/petcustoms.png" alt="First slide">
</div>
                <div class="carousel-item">
                	<img class="d-block w-100" src="../Img/promoção.png" alt="Second slide">
</div>
                <div class="carousel-item">
                	<img class="d-block w-100" src="../Img/adoção.png" alt="Third slide">
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

<div class="container frete">
	<a href ="<?php echo $url; ?>/regulamento/"><img src ="../Img/Frete.png" class="img-responsive img-fluid mx-auto col-12"/></a>
    </div>

 	<!--- INICIO PAINEL DE OFERTAS --->
    <div class="container">
	<div class="row">
	
		<div class="col-md-12">
			<h2>Produtos em <b>Oferta</b></h2>
            
			<?php foreach($lista as $produto) { ?>

	
			<?php } ?>




 	<!--- FIM PAINEL DE OFERTAS --->

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
	
		<h2>Adote seu <b>Pet</b></h2>

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

<?php include "view/footer.php"?>