<?php
namespace LOJA\API;
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;     

class ClienteEditar{
    public $msg;

    public function __construct(){
        if ($_POST) {
            try {

                $obj = new Cliente();
                $obj-> setPk_cliente($_SESSION['clienteid']);
                $obj->setNome($_POST["nome"]);
                $obj->setNascimento($_POST["nascimento"]);
                $obj->setCpf($_POST["cpf"]);
                $obj->setEmail($_POST["email"]);
                $obj->setSenha($_POST["senha"]);
                $obj->setTelefone($_POST["telefone"]);
                $obj->setEstado($_POST["estado"]);
                $obj->setCep($_POST["cep"]);
                $obj->setEndereco($_POST["endereco"]);
                                    
                $DAO = new DAOCliente();
                $this->msg = $DAO->editarPorId($obj);
               
            } catch (\Exception $erro) {
                $this->msg = $erro->getMessage();
            }
        }
    
}
}
