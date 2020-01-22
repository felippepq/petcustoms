<?php 

namespace LOJA\API;

    use  LOJA\DAO\DAOProduto;

    class ProdutoVisualizar{

            public $lista;
    
            function __construct(){

    $obj = new DAOProduto();
    $this->lista = $obj->detalheProduto($_GET['id']);
            }
        }
?>