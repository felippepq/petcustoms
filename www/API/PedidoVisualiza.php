<?php 

namespace LOJA\API; // local desta classe
use  LOJA\DAO\DAOPedido;
use  LOJA\Model\Pedido;
use  LOJA\Model\Carrinho;
use  LOJA\Model\Cliente;
    
    class PedidoVisualiza{

            public $dados;
            public $produtos;
    
            public function __construct(){

                try{
                    $DAO = new DAOPedido();
                    $this->dados = $DAO->detalhaPedido($_GET['id']);
                    $this->produtos = $DAO->listaItens($_GET['id']);


                }catch(\Exception $e){
                    $this->dados = $e->getMessage();
                }
        }
    }
?>