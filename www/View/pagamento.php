<?php include "view/header.php"?>

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Confirmar Pagamento</h2>
      </div>
<div class="container">

            <h5 class="mb-3">N° Pedido: <span class="font-weight-bold"><?php echo $_SESSION['idpedido'];?></span></h5>
            <h5 class="mb-3">Valor Total: <span class="font-weight-bold"> R$ <?php echo $pagamento->getTotal(); ?></span></h5>
            <h5 class="mb-3">Valor do Frete: <span class="font-weight-bold"> R$ <?php echo $pagamento->getFrete(); ?></span></h5>
            <h5 class="mb-3">Entrega em: <span class="font-weight-bold"><?php echo $pagamento->getDias(); ?> Dias</span></h5>

            <hr>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Cartão de Credito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Cartão de Débito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Boleto Bancario</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nome no Cartão</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Nome completo que está no cartão</small>
                <div class="invalid-feedback">
                  Nome no cartão obrigatório
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Numero do cartão de credito</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Numero que está no cartão de crédito.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3 col-lg">
                <label for="cc-expiration">Data de Expiração</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Data de Expiração                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Codigo de Segurança</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Codigo de segurança localizado na parte de trás do cartão.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block titulo-tabela" type="submit">Continuar</button>
          </form>
        </div>
      </div>
      </div>

<?php include "view/footer.php"?>