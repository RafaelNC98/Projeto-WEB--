<?php

$nome=filter_input(INPUT_POST, 'nome'); 
$endereco=filter_input(INPUT_POST, 'endereco'); 
$cpf=filter_input(INPUT_POST, 'cpf'); 
$prato=filter_input(INPUT_POST, 'prato'); 
$pagamento=filter_input(INPUT_POST, 'pagamento'); 



if(!empty($nome)||!empty($endereco)||!empty($cpf)||!empty($prato)||!empty($pagamento)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "restuarante";


	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if (mysqli_connect_error()) {
		die('Connect Error(' . mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
	 $sql = "INSERT INTO pedido (nome,endereco,cpf,prato,pagamento) values ('$nome' ,'$endereco' ,'$cpf','$prato','$pagamento') ";
	 
	 if ($conn->query($sql)) {
	 	echo "inserido";
	 	header('Location: index.html');
	 }
	 $conn->close();

	}


}
?>

