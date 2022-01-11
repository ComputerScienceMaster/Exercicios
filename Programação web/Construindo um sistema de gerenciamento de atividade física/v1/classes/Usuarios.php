<?php
class Usuario
{

    public $id;
    public $username;
    public $password;
    public $name;
    public $email;

    public function salvar()
    {
        $stringSalvar = "INSERT INTO Usuario(username,password,name,email) VALUES ('$this->username', '$this->password','$this->name','$this->email')";
        Connect::getConnection()->query($stringSalvar);
        return Connect::getConnection()->insert_id;
    }

    public function atualizar()
    {
        $stringSalvar = "UPDATE Usuario SET username =  '$this->username', password = '$this->password', name = '$this->name', email = '$this->email' where id = '$this->id' ";
        Connect::getConnection()->query($stringSalvar);
    }

    public function deletar()
    {
        $stringDelete = "DELETE from Usuario WHERE id = " . $this->id;
    }

    public function buscarPorId($id)
    {
        $sqlBuscar = "SELECT * FROM Usuario WHERE id = " . $this->id;
        $rs = Connect::getConnection()->query($sqlBuscar);
        $row = mysqli_fetch_row($rs);
        if ($row) {
            if (count($row) === 1) {

                $u = new Usuario();
                $u->id = $row[0];
                $u->username = $row[1];
                $u->pasword = $row[2];
                $u->name = $row[3];
                $u->email = $row[4];
                return $u;
            }
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
            $u->id = $row[0];
            $u->username = $row[1];
            $u->pasword = $row[2];
            $u->name = $row[3];
            $u->email = $row[4];
            return $u;
            array_push($arrayDeUsuarios, $u);
        }

        return $arrayDeUsuarios;
    }
}
