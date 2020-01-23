<?php  include "View/header.php"?>

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
                <span class="display-4 text-decoration-none"> <?php echo $detalhe['nome'] ?></span>
              </a>
            </div>

            <p class="lead">
              <span>R$ <?php echo  number_format($detalhe['preco'],2, ",",","); ?></span>
            </p>

            <p class="lead font-weight-bold">Descrição</p>

            <p><?php echo $detalhe['descricao'] ?></p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <a href="<?php echo $url ?>/carrinho/adicionar/<?php echo $detalhe['id'] ?>" class="btn btn-primary titulo-tabela btn-md my-0 p text-center" type="submit">Adicionar ao Carrinho
                <i class="fas fa-shopping-cart ml-1"></i>
      </a>

            </form>

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

          <h4 class="my-4 h4">Additional information</h4>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta odit
            voluptates,
            quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
</div>

<?php  include "View/footer.php"?>