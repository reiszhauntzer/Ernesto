<?php
//header("Content-Type: text/html;  charset=ISO-8859-1",true);
	$conn = mysqli_connect("localhost", "root", "", "PanGroupBD") or die("Erro de Conexão");
	$getMsg1 = mysqli_real_escape_string($conn, $_POST['text']);
	$getMsg2 = preg_replace('/\s+/', ' ', $getMsg1);
	$getMsg = trim($getMsg2);
	$check_data = "SELECT replies FROM ChatBot WHERE queries LIKE '%$getMsg%'";
	$run_query = mysqli_query($conn, $check_data) or die("Erro");

	if(mysqli_num_rows($run_query) > 0){
		$fetch_data = mysqli_fetch_assoc($run_query);
		$replay = $fetch_data['replies'];
		echo $replay;
	}else{
		echo "Desculpe, não consegui entender";
	}
?>