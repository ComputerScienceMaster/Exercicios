<?php

class Produto {

    public $id;
    public $nome;
    public $marca;
    public $imagem;
    public $preco;

    function __construct($id, $nome, $marca, $imagem, $preco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->marca = $marca;
        $this->imagem = $imagem;
        $this->preco = $preco;
    }

    public static function getListaDeProdutos() {
        $arrayDeProdutos = array();
        $p1 = new Produto(1, 'Bis', 'Lacta', 'https://io.convertiez.com.br/m/drogal/shop/products/images/5240026/medium/bis-lacta-c20_28406.png', 5);
        $p2 = new Produto(2, 'Oreo', 'Nestlé', 'https://target.scene7.com/is/image/Target/GUEST_df817e08-791e-492f-851b-4ad88cb94730?wid=488&hei=488&fmt=pjpeg', 4);
        $p3 = new Produto(3, 'Coca Cola', 'Coca Cola', 'https://static.carrefour.com.br/medias/sys_master/images/images/hd7/hd6/h00/h00/12175683682334.jpg', 3.5);
        $p4 = new Produto(4, 'Rufles', 'Pepsico', 'https://static.carrefour.com.br/medias/sys_master/images/images/h84/hbc/h00/h00/13402861076510.jpg', 7.5);
        array_push($arrayDeProdutos, $p1);
        array_push($arrayDeProdutos, $p2);
        array_push($arrayDeProdutos, $p3);
        array_push($arrayDeProdutos, $p4);
        return $arrayDeProdutos;
    }

}
