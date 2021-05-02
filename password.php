<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8" />
			<meta name="author" content="Gabriel Costa" />
			<title>********* </title>
		</head>
		<?php   
            if (isset($_POST['pwd']))
            {
                    if ($_POST['pwd'] == 'adminernesto')
                {
                    header('Location: http://200.131.14.132/saiinfo2018/grupo1/adminmyernesto/');
                 }
             else
            {
                echo '<script language="javascript">';
            echo 'alert("Senha Incorreta")';
            echo '</script>';   
             echo 'Retornando a página de início...Click no';
             
    }
}
?>
			<a href="index.php" onclick="">Voltar</a>
	</html>
