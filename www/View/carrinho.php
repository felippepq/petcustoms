<?php include "view/header.php"?>

        <h2>Carrinho de <b>Compras</b></h2>


    <section class="section-content padding-y">
<div class="container">

<div class="row">
<main class="col-md-9">
	
<div class="card table-responsive">




<table class="table">
<thead class="thead titulo-tabela">
    <tr>
      <th>Produto</th>
	  <th>Qntd</th>
      <th>Preço</th>
	  <th class="mr-1"></th>
    </tr>
  </thead>

  <tbody>
  
  <?php
                        @$carrinho = $_SESSION['carrinho'];

                        if($carrinho === null || empty($carrinho->getItems())){
                            // Inicio HTML
                            ?><tr>
                                  <td><p><img  src="https://www.unilabamericana.com.br/img/carrinho-vazio.jpg" class=" mx-auto img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""></p></td>
                                  </tr>
                            <?php
                            // Fim HTML
                        }else{

                            foreach ($carrinho->getItems() as $item){
                                
                                $produto = $item->getProduto();
                                
                                $link = ".$url./carrinho/remover/".$produto->getId();
                            
                                // Inicio HTML
                            ?>
    <tr>
      <td><img width="50" src="<?php echo $url; ?>/View/img/produtos/<?php echo $produto->getImagem(); ?>" class="img-sm">
	  <a href="#" class="title text-right font-weight-bold" width="50"><?php echo $item->getProduto()->getNome(); ?></a></td>
      <td width="20">
	  <input type="number" value="1" aria-label="Search" class="form-control" style="width: 70px">
	  </td>
	  <td width="50"><var class="price">R$ <?php echo $item->getProduto()->getPreco(); ?></var></td>
      <td width="30" class="text-right mt-1"><a href="<?php echo $url; ?>/carrinho/remover/<?php echo $item->getProduto()->getId(); ?>" class="btn btn-warning botao-carrinho"> <i class="fa fa-trash" aria-hidden="true"></i></a></td>
    </tr>
	<?php   
                    // Fim HTML
                            }
                        }
                    ?>
  </tbody> 
</table>

<div class="card-body">

    <?php if(isset($_SESSION['frete'])){ ?>

        <a href="<?php echo $url; ?>/produtos/" class="voltar btn btn-warning float-left"> <i class="fa fa-chevron-left"></i> Voltar </a> 
            <a href="<?php echo $url; ?>/pedido/finalizar/" class="btn btn-warning botao-carrinho float-right"> Finalizar Compra <i class="fa fa-chevron-right"></i> </a>
        </div>
        
                    <?php }else{ ?>
                        <a href="<?php echo $url; ?>/produtos/" class="voltar btn btn-warning float-left"> <i class="fa fa-chevron-left"></i> Voltar </a> 
            <a href="<?php echo $url; ?>/pedido/finalizar/" class="btn btn-warning botao-carrinho float-right disabled"> Finalizar Compra <i class="fa fa-chevron-right"></i> </a>
        </div>

                        <?php } ?>

</div> <!-- card.// -->

	</main> <!-- col.// -->
	<aside class="col-md-3">
		<div class="card rounded mb-3">
			<div class="card-body">
			<form method="post" action="<?php echo $url; ?>/frete/calcular/">
				<div class="form-group">
					<label>Calcular Frete</label>
					<div class="input-group">
						<input type="text" class="form-control" name="cep" placeholder="Digite o CEP">
						<span class="input-group-append"> 
							<button class="btn btn-warning calcular">Calcular</button>
						</span>
					</div>
				</div>
				<?php
                            if(isset($_POST['cep'])){
                                echo "<p>Preço: R$ ".$frete->getValor()."</p>";
                                echo "<p>Entrega: " .$frete->getPrazoEntrega(). "  dias</p>";

                            }

                            ?>

			</form>
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
		<div class="card">
			<div class="card-body">
					<p class="text-center mb-3">
						<img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/payments.png" height="26">
					</p>
					
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
	</aside> <!-- col.// -->
</div>

<div class="container frete">
	<a href ="<?php echo $url; ?>/regulamento/"><img src ="../Img/Frete.png" class="img-responsive img-fluid mx-auto col-12"/></a>
    </div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
</div>

<?php include "view/footer.php"?>