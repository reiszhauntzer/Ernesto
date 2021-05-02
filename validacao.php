<?php
  session_start();
  include_once("conexao.php");
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['user']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }
  
  
  $user = ($_POST['user']);
  $senha = ($_POST['senha']);
 

 
 $sql = "SELECT id, usuario, nivel, ativo FROM user WHERE (usuario=\"$user\") AND (senha=sha1(\"$senha\"))";
 
 
    $exibir = mysqli_query($conn,$sql) or die("erro");
    $auxiliar = mysqli_fetch_array($exibir);
 
 if ($auxiliar['ativo'] != 1) {
     // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
     echo '<script language="javascript">';
            echo 'alert("Login Invalido")';
            echo '</script>';
            echo "<script>window.location.href = \"index.php\";</script>";
            
            
 } else {
      // Salva os dados encontrados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);

      // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();

      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado['id'];
      $_SESSION['UsuarioNome'] = $resultado['nome'];
      $_SESSION['UsuarioNivel'] = $resultado['nivel'];

      // Redireciona o visitante
      header("Location: http://200.131.14.132/saiinfo2018/grupo1/adminmyernesto/"); exit;
      
 }
  

  ?>
