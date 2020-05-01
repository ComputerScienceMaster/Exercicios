<?php

if(isset($_GET['show'])){
	if($_GET['show'] == 'all'){
		$content = file_get_contents("db.json",true);
		echo $content; 
	}else{
		$content = file_get_contents("db.json",true);
		$aContent = json_decode($content);
		for ($i=0; $i < count($aContent); $i++) { 
			if($aContent[$i]->id == intval($_GET['show'])){
				echo json_encode($aContent[$i]);
			}
		}
		if(!array_key_exists(intval($_GET['show']), $aContent)){
			echo '[]';
		}
	}
}

$data = json_decode(file_get_contents('php://input'), true);

if($data != null){
	$content = file_get_contents("db.json",true);
	$aContent = json_decode($content, true);
	array_push($aContent, $data);
	file_put_contents("db.json", json_encode($aContent));
	$updated = file_get_contents("db.json",true);
	echo json_encode($aContent);

}else{
	echo 'No data received!';
}

?>