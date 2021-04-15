<?php
	$servidor = "localhost";
	$usuario = "saiinfo2018";
	$senha = "saiinfo2018pass";
	$dbname = "saiinfo_web2";
	
	// Criar a conexao:
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    // Checar conexao: 
    if (!$conn) { // Se falhou sai do bloco imprimindo mensagem de erro:
        die("Conexão com banco falhou: " . mysqli_connect_error());
    }
    // Se não falhou, imprime mensagem de sucesso: 
    echo "Conexão com banco bem sucedida </br>";
?>