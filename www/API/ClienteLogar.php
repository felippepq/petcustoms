<?php
namespace LOJA\API;//Local desta classe
use LOJA\DAO\DAOCliente;
use LOJA\Model\Cliente;

    class ClienteLogar{
        public $msg;

        function __construct($url){
            if($_POST){
                
                try{
                    $obj = new Cliente();
                    $obj->setEmail($_POST['email']);
                    $obj->setSenha($_POST['senha']);

                    $DAO = new DAOCliente();
                    // Verifica se existe usuario com email e senha informados

                    $result = $DAO->buscaPorEmailSenha($obj);
                    
                    
                    if($result){//se houver resultado
                        //guardo as informações do usuario na sessão
                        $_SESSION['clienteid'] = $result['id'];
                        $_SESSION['clienteemail'] = $result['email'];
                        $_SESSION['clientenome'] = $result['nome'];
                        $this->verificaUrl($url);
                        header("location: ".$url."/painel/cliente");
                    }else{
                        $this->msg = "Cliente/Senha inválidos";
                    }
                }catch(\Exception $e){
                    $this->msg = $e->getMessage();
                }
            }
        }

        function verificaUrl($url){
            if(isset($_SESSION['url'])){

                $url2 = $_SESSION['url'];

                header("location: ".$url2);

            }else{
                header("location: ".$url."/painel/cliente");
              }
           }
        }
?>

