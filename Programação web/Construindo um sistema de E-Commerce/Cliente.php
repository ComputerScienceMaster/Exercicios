<?php

require_once 'dbConnect.php';

class Cliente {

    public $rg;
    public $primeiroNome;
    public $nomeDoMeio;
    public $ultimoNome;
    public $dataDeNascimento;
    public $pontuacao;

    public function salvar() {
        $stringSalvar = "INSERT INTO Cliente(rg,primeiroNome,nomeDoMeio,ultimoNome,dataDeNascimento,pontuacao) VALUES ('$this->rg','$this->primeiroNome','$this->nomeDoMeio','$this->ultimoNome','$this->dataDeNascimento',0)";
        Connect::getConnection()->query($stringSalvar);
        return Connect::getConnection()->insert_id;
    }

    public function atualizar() {
        $stringSalvar = "UPDATE Cliente SET primeiroNome = ' $this->primeiroNome ', nomeDoMeio = '$this->nomeDoMeio' , ultimoNome = '$this->ultimoNome', dataDeNascimento = '$this->dataDeNascimento', pontuacao = '$this->pontuacao' WHERE rg = '$this->rg'";
        Connect::getConnection()->query($stringSalvar);
    }

    public function deletar($rg) {
        $stringDelete = "DELETE from Cliente WHERE rg = " . $rg;
    }

    public function buscarPorId($rg) {
        $sqlBuscar = "SELECT * FROM Cliente WHERE rg = " . $rg;
        $rs = Connect::getConnection()->query($sqlBuscar);
        $row = mysqli_fetch_row($rs);
        if ($row) {

            $cliente = new Cliente();
            $cliente->rg = $row[0];
            $cliente->primeiroNome = $row[1];
            $cliente->nomeDoMeio = $row[2];
            $cliente->ultimoNome = $row[3];
            $cliente->dataDeNascimento = $row[4];
            $cliente->pontuacao = $row[5];
            return $cliente;
        }
    }

    public function buscar($tipo,$query) {
        $sqlListarClientes = "";
        
        if($tipo == ''){
            $sqlListarClientes = "SELECT * FROM Cliente ORDER BY pontuacao DESC";
        }else if($tipo == 'nomeCompleto'){
            $sqlListarClientes = "SELECT * FROM Cliente WHERE primeiroNome LIKE '%$query%' OR nomeDoMeio LIKE '%$query%' OR ultimoNome LIKE '%$query%' ORDER BY pontuacao DESC";
        }else if($tipo == 'primeiroNome'){
            
            $sqlListarClientes = "SELECT * FROM Cliente WHERE primeiroNome LIKE '%$query%' ORDER BY pontuacao DESC";
        }else if($tipo == 'nomeDoMeio'){
            
            $sqlListarClientes = "SELECT * FROM Cliente WHERE nomeDoMeio LIKE '%$query%' ORDER BY pontuacao DESC";
        }else if($tipo == 'ultimoNome'){
            
            $sqlListarClientes = "SELECT * FROM Cliente WHERE ultimoNome LIKE '%$query%' ORDER BY pontuacao DESC";
        }
        
        $clientes = Connect::getConnection()->query($sqlListarClientes);

        // Popula o array de pedidos
        $arrayDeClientes = array();
        while ($row = mysqli_fetch_row($clientes)) {
            $cliente = new Cliente();
            $cliente->rg = $row[0];
            $cliente->primeiroNome = $row[1];
            $cliente->nomeDoMeio = $row[2];
            $cliente->ultimoNome = $row[3];
            $cliente->dataDeNascimento = $row[4];
            $cliente->pontuacao = $row[5];
            array_push($arrayDeClientes, $cliente);
        }

        return $arrayDeClientes;
    }

}

?>