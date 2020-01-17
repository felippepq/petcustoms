<?php 
namespace LOJA\API;

    use  LOJA\DAO\DAOPedido;

class PagamentoVisualizar{

        public $pagamento;

        function __construct(){

    $obj = new DAOPedido();
    $this->pagamento = $obj->buscarPedidoCliente($_SESSION['idpedido']);
        }
}
?>
