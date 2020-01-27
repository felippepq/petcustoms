
<?php include "view/header.php"?>

        <h2>Editar Perfil</h2>

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
					<div class="">"<?php echo $_SESSION['clientenome']; ?>" <span class="badge badge-success">Online</span>  </div>
					<a class="list-group-item" href="<?php echo $url; ?>/painel/cliente">Meus Pedidos</a>
					<a class="list-group-item" href="<?php echo $url; ?>/editar/cliente">Alterar InformaÃ§Ãµes</a>  
					<a class="list-group-item font-weight-bold" href="<?php echo $url; ?>/cliente/logoff">Sair  <i class="fa fa-sign-out-alt" aria-hidden="true"></i></a>  
				</ul>
			</aside> 


        <div class="card-body">
        <form class="form-horizontal" method="POST" action="<?php echo $url; ?>/editar/cliente">
        <fieldset>

            <!-- Form Name -->
            <legend>Form Name</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nome">Nome</label>  
              <div class="col-md-4">
              <input id="nome" name="nome" type="text" placeholder="Digite seu Nome" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nascimento">Data de Nascimento</label>  
              <div class="col-md-4">
              <input id="nascimento" name="nascimento" type="text" placeholder="Digite a data do seu nascimento" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="cpf">CPF</label>  
              <div class="col-md-4">
              <input id="cpf" name="cpf" type="text" placeholder="Digite seu CPF" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">E-Mail</label>  
              <div class="col-md-4">
              <input id="email" name="email" type="text" placeholder="Digite seu Email" class="form-control input-md">
                
              </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="senha">Senha</label>
              <div class="col-md-4">
                <input id="senha" name="senha" type="password" placeholder="Digite sua senha" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telefone">Telefone</label>  
              <div class="col-md-4">
              <input id="telefone" name="telefone" type="text" placeholder="Estado / UF" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="estado">Estado</label>  
              <div class="col-md-4">
              <input id="estado" name="estado" type="text" placeholder="Estado / UF" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="cep">CEP</label>  
              <div class="col-md-4">
              <input id="cep" name="cep" type="text" placeholder="Digite seu CEP" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="endereco">EndereÃ§o</label>  
              <div class="col-md-4">
              <input id="endereco" name="endereco" type="text" placeholder="Digite o seu EndereÃ§o" class="form-control input-md">
                
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="submit"></label>
              <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-warning">Editar InformaÃ§Ãµes</button>
              </div>
            </div>

    </fieldset>
    </form>	
    </div>


		</div>
		</div> <!-- container .//  -->
		</section>
		</div>
		</div>
		</div>

<?php  include "view/footer.php"?>