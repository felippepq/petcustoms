<!doctype html>
<html lang="pt-br">
    <head>
    <title>Pet Customs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="../Img/logo.png" />
    <style>
        
    a{
        color: #6f42c1!important;
    }

    .info-painel{
        background-color: #6f42c1!important;
        border-color: #6f42c1!important;
        color: #ffc107!important;
    }

    .titulo-tabela{
        background-color: #6f42c1!important;
        color: #ffc107!important;
        border-color: #6f42c1!important;
    }

    .titulo-tabela:hover{
        background-color: #ffc107!important;
        color: #6f42c1!important;
        border-color: #ffc107!important;
    }
    
    .nome-produto{
        font-size: 15px;
    }

    .preco-produto{
        color: #6f42c1!important;
    }
    
    .menu-cate:hover{
        background-color: #6f42c1!important;
        color: #ffc107!important;
        transition: 0.3s;
    }

    .botao-carrinho:hover{
        background-color: #6f42c1!important;
        color: #ffc107!important;
        transition: 0.3s;
        border-color: #6f42c1!important;
    }
    .foto-produto:hover{
        -webkit-transform: scale(1.08);
        transform: scale(1.02);
        transition: 0.3s;
    }

    @media (min-width: 768px){

    .card-categoria{
        margin-top: 100px!important;
    }
    }

    @media (max-width: 768px){
        .painel-aba{
            margin-top: 10px!important;
        }
    }

    .card-categoria{
        margin-top: 100px!important;
    }
        
    .card-categoria{
        margin-top: 100px!important;

        }
    }

body {
	font-family: "Open Sans", sans-serif;
}

h2 {
	color: #6f42c1!important;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 50px 0 50px;
}

h2 b {
    color: #
    ffc107!important;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	background: #ffc107!important;
	left: 0;
	right: 0;
	bottom: -20px;
}

h4 {
    color: #6f42c1!important;
}

    </style>
        
    </head>
            <body>
<!--  Menu/Navbar -->

        <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow fixed-top">
        <div class="container">
        <a class="navbar-brand"  href="<?php echo $url; ?>/home/">PetCustoms</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="<?php echo $url; ?>/produtos/">Produtos</a>
        </li>
        </ul>

<!--- Barra de Pesquisa --> 
   
        <div class="bg-light rounded rounded-pill shadow-sm col-sm-12 col-xs-12 col-md-12 col-lg-7 barra-pesquisa mx-auto" method="POST" action="<?php echo $url;?>/produto/buscar/">
        <div class="input-group">
        <input href="<?php echo $url; ?>/produto/buscar/" name="buscar" type="search" placeholder="Procure em todo nosso site..." aria-describedby="button-addon1" class="form-control border-0 bg-light">
        <div class="input-group-append">
        <button id="button-addon1" type="submit" class="btn btn-link text-warning"><i class="fa fa-search"></i></button>
        </div>
        </div>
		</div>

<!--- FIM Barra de Pesquisa -->

        <ul class="navbar-nav">
        <li class="nav-item dropdown carrinho-menu">
        <a class="nav-link dropdown" href="<?php echo $url; ?>/carrinho/">  <i class="fa fa-shopping-cart"></i> Carrinho 
		<span class="badge badge-pill badge-primary"></span><?php 
		if(isset($_SESSION['carrinho'])){
		$obj = $_SESSION['carrinho'];
		echo $obj->totalItens();
		}else{
		echo "0";
		}
        ?></span> </a>
        </li>
        </ul>
        <ul class="navbar-nav ">
        <li class="nav-item dropdown">
                    
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user-circle" aria-hidden="true"></i>

<!-- Nome do Usuario/Cliente Logado --->
		<?php
		if(isset($_SESSION['clientenome']))
		{
		echo $_SESSION['clientenome'];
		}
		else
		{
		session_destroy();
		echo "Login/Cadastrar";
		}           
		?>
<!-- Nome do Usuario/Cliente Logado --->

        </a>
		<?php
		if(isset($_SESSION['clientenome'])){?>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<a class="dropdown-item font-weight-bold" href="<?php echo $url; ?>/cliente/logoff"> Sair &nbsp; <i class="fa fa-sign-out-alt" aria-hidden="true"></i></a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item font-weight-bold" id="painel" href="<?php echo $url; ?>/painel/cliente">Minha Conta &nbsp; <i class="fas fa-chalkboard-teacher"></i></a>
		
		<?php }else{?>
		
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item font-weight-bold" href="<?php echo $url; ?>/login/cliente/"> Fazer Login &nbsp; <i class="fa fa-user" aria-hidden="true"></i> </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item font-weight-bold" href="<?php echo $url; ?>/cadastro/cliente/"> Cadastrar-se &nbsp; <i class="fa fa-pen" aria-hidden="true"></i> </a>
		
		<?php } ?>

        </div>
        </li>
        </ul>
        </div>
        </div>
        </nav>  

<!--  Menu/Navbar -->