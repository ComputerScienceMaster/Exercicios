<?php

class Contato{
	public $nome;
	public $foto;
}

// Define um array simples contendo nomes.


$c1 = new Contato();
$c1->nome = "Jonas";
$c1->foto = "https://uploads.metropoles.com/wp-content/uploads/2019/01/26090519/aluguel.jpg";


$c2 = new Contato();
$c2->nome = "Mario";
$c2->foto = "https://static1.purepeople.com.br/articles/3/82/71/3/@/1127113-o-rapaz-ja-jogou-em-oslo-na-noruega-950x0-2.jpg";


$c3 = new Contato();
$c3->nome = "Mariana";
$c3->foto = "https://uploads.metropoles.com/wp-content/uploads/2019/01/26090519/aluguel.jpg";



$c4 = new Contato();
$c4->nome = "Luciana";
$c4->foto = "https://midias.agazeta.com.br/2019/10/18/a-apresentadora-luciana-gimenez-80080-article.jpg";


$c5 = new Contato();
$c5->nome = "James";
$c5->foto = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRp2puAs7_gbceETt4TP99jVZcz3LTwhElohHLL0-d5QLwsT9pW9A&s";


$contatos = array();
array_push($contatos, $c1);
array_push($contatos, $c2);
array_push($contatos, $c3);
array_push($contatos, $c4);
array_push($contatos, $c5);


// Pega o parâmetro que veio pela URL (parametro de busca)
$q = $_REQUEST["id"];


// imprime os nomes que podem ser sugestões ou então "sem sugestão" caso não haja nomes para sugerir

echo json_encode($contatos[intVal($q)])
?>