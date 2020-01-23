<?php 

namespace LOJA\API;

    use  LOJA\DAO\DAOPedido;

    class PedidoListar{

            public $lista;
    
            function __construct(){

    $obj = new DAOPedido();

    $this->lista = $obj->listarPedidoCliente($_SESSION['clienteid']);
            }
        }
?>
