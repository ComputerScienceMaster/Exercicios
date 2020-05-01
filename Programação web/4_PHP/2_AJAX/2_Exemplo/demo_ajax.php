<?php

if(isset($_POST['nome'])){
	echo "<div>Bom dia," . $_POST['nome']. "</div>";
}else{	
	echo '<div>O conteúdo foi atualizado via jquery AJAX</div>';
}

?>