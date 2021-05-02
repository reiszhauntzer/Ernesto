<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Pangroup - Ernesto Chatbot</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="assets/js/slide.js" target="_blank"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js" target="_blank"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" target="_blank"></script>
		
		<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
-->
	</head>
	<body class="is-preload" onload="showSlides(1)">

		<button class="open-button" onclick="openForm()">Ernesto</button>

		<div class="chat-popup" id="myForm">
  			<div class="wrapper2">
				<div class="title">Ernesto</div>
					<div class="form">
						<div class="bot-inbox inbox">
							<div class="icon">
								<i class="fas fa-user"></i>
							</div>
							<div class="msg-header">
								<p>Olá, Como posso te ajudar?</p>
							</div>
						</div>
					</div>
				<div class="typing-field">
					<div class="input-data">
						<input id="data" type="text" placeholder="Digite sua mensagem..." required>
						<script>
							$(document).keypress(function(e) {
								if(document.getElementById("data").value.length != 0){
									if(e.which == 13) $('#send-btn').click();
								}
							});
						</script>
						<button id="send-btn" class=botao>Enviar</button>
						<button class="botao1" onclick="closeForm()">Fechar</button>
					</div>
					
				</div>
			</div>
  		</div>

  		<script>
			$(document).ready(function(){
				$("#send-btn").on("click", function(){
					$value = $("#data").val();
					$msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
					$(".form").append($msg);
					$("#data").val('');

					$.ajax({
						url: 'message.php',
						type: 'POST',
						data: 'text='+$value, 
						success: function(result){
							$replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
							$(".form").append($replay);
							$(".form").scrollTop($(".form")[0].scrollHeight);
						}
					});
				});
			});
		</script>

		<script>
			function openForm() {
  				document.getElementById("myForm").style.display = "block";
			}

			function closeForm() {
 	 			document.getElementById("myForm").style.display = "none";
			}
		</script>

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.php">Ernesto Chatbot</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="processoseletivo.html" >Processo Seletivo</a></li>
					<li><a href="nossaunidade.html" >Nossa Unidade</a></li>
					<li><a href="http://200.131.14.132/saiinfo2018/grupo1/pangroup/" target="_blank">Pangroup</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>Ernesto chatbot</h1>
					<p>Ernesto é um chatbot desenvolvido pela <a href="http://200.131.14.132/saiinfo2018/grupo1/pangroup/" target="_blank" >Pangroup</a>, para ajudar você<br /> a encontrar sua graduação no <a href="https://www.ifmg.edu.br/portal" target="_blank">IFMG</a>, cadastre-se e deixa o resto com o Ernesto.</p>
				</div>
				<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			</section>
			<?php	
		
		echo"<section class=\"wrapper\">";
				echo"<div class=\"inner\">";
					echo"<header class=\"special\">";
						echo"<h2>Principais Unidades IFMG</h2>";
						echo"<p>Aqui estão os principais os campus do IFMG espalhados <br/> por toda Minas Gerais e algumas informações relevantes sobre.</p>";
					echo"</header>";
					$aux = 1;
					$sql = "SELECT * FROM Campus";
							$conn = mysqli_connect("localhost", "saiinfo2018", "saiinfo2018pass", "PanGroupBD");
							$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
							echo"<div class=\"slideshow-container\">";
							while ($registro = mysqli_fetch_array($resultado)){
								$nome = $registro['nome'];
				  				echo"<div class=\"mySlides fade\">";
				   				echo"<div class=\"numbertext\">".$aux." / 37</div>";
				    			echo"<img src=\"images/campus".$aux.".jpg\" style=\"width:100%\">";
				    			echo"<div class=\"text\"><b>".$nome."</b></div>";
				  				echo"</div>";
								$aux = $aux + 1;
			}
			echo"<a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>";
			echo"<a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>";
		  echo"</div>";
		  echo"<br>";
		  
			echo"<div style=\"text-align:center\">";
				for ($i = 1; $i <= 37; $i++) {
					
					
				  	echo"<span class=\"dot\" onclick=\"currentSlide(".$i.")\"></span>";
				}
				
				echo"</div>";
			
			?>
					
		
			
	<?php	
							echo"<div class=\"highlights\">";
							$sql = "SELECT * FROM Campus";
							$conn = mysqli_connect("localhost", "saiinfo2018", "saiinfo2018pass", "PanGroupBD");
							$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
							 // Obtendo os dados por meio de um loop while
							 $id = 0;
								while ($registro = mysqli_fetch_array($resultado))
								{
								
									echo "<section>";
									echo" <div class=\"content\">"; 
									$nome = $registro['nome'];
									$endereco = $registro['endereco'];
									$telefone = $registro['telefone'];
									
								
									$id = $id + 1;
									echo"<header>";
									echo"<img src=\"images/campus".$id.".jpg\"width=260 height=180>";
									echo"<h3><a target=\"_blank\">".$nome."</a></h3>";
									echo"</header>";
									echo "<p>".$endereco."</p>";
									echo "<p>".$telefone."</p>";
									
									echo"</p>";
									
									echo "</div>";
									echo "</section>";
									
									
								}
								mysqli_close($conn);
							
								echo "</div>";
						
							?>
					

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<h2>Para mais instruções</h2>
					<p>Para mais informações acerca dos nossos vários campus, chama o Ernesto no canto inferior direito da sua tela!</p>
				</div>
			</section>

		<!-- Testimonials -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Faça como eles, chama o Ernesto!</h2>
					</header>
					<div class="testimonials">
						<section>
							<div class="content">
								<blockquote>
									<p>Com o Ernesto, eu descobri o melhor curso da minha vida, a Administração! E ainda um campus pertinho da minha casa, o Campus de Ouro Branco.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic01.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Janaína Souza</strong> <span>Administração - Ouro Branco</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>O Ernesto me deu outro olhar acerca dos estudos, fazendo o que eu amo com profissionais excelentes e na minha própria cidade, estudar se tornou um prazer.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic03.jpg" alt="" />
									</div>
									<p class="credit">- <strong>João Dias</strong> <span>Engenharia Elétrica - Ipatinga</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Como a tecnologia é incrível! Ernesto é uma grande ferramenta para qualquer estudante que queira achar as melhores opções de curso e campus dos IFMG's.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic02.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Ana Oliveira</strong> <span>Ciência da Computação - Formiga</span></p>
								</div>
							</div>
						</section>
					</div>
				</div>
			</section>
			
			<form action="validacao.php" method="post">
  				<fieldset>
  					<legend>Login Admin</legend>
     					 <label for="txer">Usuário</label>
      					<input type="text" name="user" id="txuser" maxlength="25" />
      					<label for="txSenha">Senha</label>
      					<input type="password" name="senha" id="txSenha" />
      				
					<br>	  <input type="submit" value="Entrar" />
 				</fieldset>
 			 </form>
			 
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>Ernesto Chatbot - PanGroup</h3>
							<p>Todos os direitos reservados a comunidade PanGroup@2021.</p>
						</section>
						<section>
							<h4>Sobre nos:</h4>
							<ul class="alt">
								<li><a href="http://200.131.14.132/saiinfo2018/grupo1/pangroup/#intro" target="_blank">Conheça a PanGroup</a></li>
								<li><a href="http://200.131.14.132/saiinfo2018/grupo1/pangroup/#services" target="_blank">Nossos trabalhos</a></li>
								<li><a href="https://www.ifmg.edu.br/sabara" target="_blank">Nosso campus</a></li>
							</ul>
						</section>
						<section>
							<h4>Siga nosso campus nas redes sociais:</h4>
							<ul class="plain">
								<li><a href="https://pt-br.facebook.com/IfmgCampusSabara" target="_blank"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="https://www.instagram.com/ifmgsabara/?hl=pt-br" target="_blank"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="https://www.youtube.com/channel/UC8qCRMsJNeJbtOXOEE9BGsw/videos" target="_blank"><i class="icon fa-youtube">&nbsp;</i>Youtube</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
