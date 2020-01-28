<?php  include "View/header.php"?>


<h2><?php echo $detalhe['nome'] ?></h2>



<div class="container">

 <!--Main layout-->
 <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">


        <div class="col-md-6 mb-4">

          <img src="<?php echo $url; ?>/View/img/produtos/<?php echo $detalhe['imagem'] ?>" class="img-fluid" alt="">

        </div>

        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a href="">
              </a>
            </div>

            <p class="lead">
              <span>R$ <?php echo  number_format($detalhe['preco'],2, ",",","); ?></span>
            </p>

            <p class="lead font-weight-bold">Descrição:</p>

            <p><?php echo $detalhe['descricao'] ?></p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <a href="<?php echo $url ?>/carrinho/adicionar/<?php echo $detalhe['nome'] ?>" class="btn btn-primary titulo-tabela btn-md my-0 p text-center"  type="submit">Adicionar ao Carrinho
                <i class="fas fa-shopping-cart ml-1"></i>
      </a>


            </form>
            <hr>
<img src="../Img/card-abrigo.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


      <hr>


      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <h4 class="my-4 h4">Compre e Ajude um Abrigo de Animais</h4>

          <p>A cada 200 reais em compras você estará ajudando varios abrigos de animais no Rio de Janeiro </p>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
   
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
</div>

<?php  include "View/footer.php"?>