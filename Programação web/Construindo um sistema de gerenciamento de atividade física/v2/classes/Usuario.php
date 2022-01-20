<?php

require_once 'dbConnect.php';

class Usuario
{

    public $username;
    public $senha;
    public $fullName;
    public $email;

    static function criarUsuario($username, $senha, $fullName, $email)
    {
        $u = new Usuario();
        $u->username = $username;
        $u->senha = $senha;
        $u->fullName = $fullName;
        $u->email = $email;
        return $u;
    }


    public function salvar()
    {
        $stringSalvar = "INSERT INTO Usuario(username,senha,fullName,email) VALUES ('$this->username', '$this->senha','$this->fullName','$this->email')";
        Connect::getConnection()->query($stringSalvar);
        return Connect::getConnection()->insert_id;
    }

    public function atualizar()
    {
        $stringSalvar = "UPDATE Usuario SET senha = '$this->senha', fullName = '$this->fullName', email = '$this->email' where username =  '$this->username' ";
        Connect::getConnection()->query($stringSalvar);
    }

    public function deletar()
    {
        $stringDelete = "DELETE from Usuario WHERE username = '" . $this->username . "'";
        echo($stringDelete);
        Connect::getConnection()->query($stringDelete);
    }

    public function buscarPorUsername()
    {
        $sqlBuscar = "SELECT * FROM Usuario WHERE username = '$this->username'";
        $rs = Connect::getConnection()->query($sqlBuscar);
        if ($rs->num_rows) {
            $row = mysqli_fetch_row($rs);
            $u = new Usuario();
            $u->username = $row[0];
            $u->senha = $row[1];
            $u->fullName = $row[2];
            $u->email = $row[3];
  
            return $u;
        } else {
            return false;
        }
    }

    public function buscarTodos()
    {

        $sqlListarUsuarios = "SELECT * FROM Usuario";
        $usuarios = Connect::getConnection()->query($sqlListarUsuarios);


        // Popula o array de pedidos
        $arrayDeUsuarios = array();
        while ($row = mysqli_fetch_row($usuarios)) {
            $u = new Usuario();
            $u->username = $row[0];
            $u->senha = $row[1];
            $u->fullName = $row[2];
            $u->email = $row[3];
            return $u;
            array_push($arrayDeUsuarios, $u);
        }

        return $arrayDeUsuarios;
    }
}
