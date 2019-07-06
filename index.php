<!-- Incluindo o cabecario atraves do PHP -->
<?php 
	$cabecalho_title = "Mirror Fashion";
	
	$estilos_css = '<link rel="stylesheet" href="css/estilos.css">';
	include("cabecalho.php");
?>

<!-- Menu lateral -->
<div class="container destaque">

	<section class="busca">
		<h2>Busca</h2>

		<form>
			<input type="search" />
			<input type="image" src="img/busca.png" />
		</form>
	</section> <!-- Fim busca -->

	<section class="menu-departamentos">
		<h2>Departamentos</h2>

		<!-- menu de Departamentos -->
		<nav>
			<ul>
				<li><a href="#">Blusas e Camisas</a>
					<ul>
						<li><a href="#">Manga curta</a></li>
						<li><a href="#">Manga comprida</a></li>
						<li><a href="#">Camisa social</a></li>
						<li><a href="#">Camisa casual</a></li>
					</ul>
				</li>
				<li><a href="#">Calças</a></li>
				<li><a href="#">Saias</a></li>
				<li><a href="#">Vestidos</a></li>
				<li><a href="#">Sapatos</a></li>
				<li><a href="#">Bolsas e Carteiras</a></li>
				<li><a href="#">Acessórios</a></li>
			</ul>
		</nav>
	</section> <!-- Fim do .menu-departamentos -->

	<img src="img/destaque-home.png" alt="Promoção: Big City Night" />
</div> <!-- Fim .container .destaque -->

<div class="container paineis">
	<!-- Os paineis de novidades mais vendidos entrarão
	aqui dentro -->
	<section class="painel novidades">
		<h2>Novidades</h2>
		<ol>

			<!-- Primeiro produto --> 
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura1.png" />
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>

			<!-- Segundo produto -->
			<li>
				<a href="produto2.html">
					<figure>
						<img src="img/produtos/miniatura2.png" />
						<figcaption>Camisa Roxa por R$ 70,00</figcaption>
					</figure>
				</a>
			</li>

			<li>
				<a href="produto3.html">
					<figure>
						<img src="img/produtos/miniatura3.png" />
						<figcaption>Blusa simples por R$ 80,00</figcaption>
					</figure>
				</a>
			</li>

			<li>
				<a href="produto4.html">
					<figure>
						<img src="img/produtos/miniatura4.png" />
						<figcaption>Jaqueta vinho por R$ 120,00</figcaption>
					</figure>
				</a>
			</li>

			<li>
				<a href="produto5.html">
					<figure>
						<img src="img/produtos/miniatura15.png" />
						<figcaption>Vestido azul por R$ 50,00</figcaption>
					</figure>
				</a>
			</li>

			<li>
				<a href="produto6.html">
					<figure>
						<img src="img/produtos/miniatura9.png" />
						<figcaption>Blusa Xadres por R$ 100,00</figcaption>
					</figure>
				</a>
			</li>
		</ol>
	</section>

	<!-- Segundo painel - Os mais vendidos -->
	<section class="painel mais-vendidos">
		<h2>Mais Vendidos</h2>

		<ol>
		
			<!-- Primeiro produto -->
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura1.png" />
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>
		
			<!-- Segundo produto -->
			<li>
				<a href="produto2.html">
					<figure>
						<img src="img/produtos/miniatura2.png" />
						<figcaption>Camisa Roxa por R$ 70,00</figcaption>
					</figure>
				</a>
			</li>
		
			<li>
				<a href="produto3.html">
					<figure>
						<img src="img/produtos/miniatura3.png" />
						<figcaption>Blusa simples por R$ 80,00</figcaption>
					</figure>
				</a>
			</li>
		
			<li>
				<a href="produto4.html">
					<figure>
						<img src="img/produtos/miniatura4.png" />
						<figcaption>Jaqueta vinho por R$ 120,00</figcaption>
					</figure>
				</a>
			</li>
		
			<li>
				<a href="produto5.html">
					<figure>
						<img src="img/produtos/miniatura15.png" />
						<figcaption>Vestido azul por R$ 50,00</figcaption>
					</figure>
				</a>
			</li>
		
			<li>
				<a href="produto6.html">
					<figure>
						<img src="img/produtos/miniatura9.png" />
						<figcaption>Blusa Xadres por R$ 100,00</figcaption>
					</figure>
				</a>
			</li>
		</ol>
	</section>
</div>

<!-- adicionando o rodape atraves do html -->
<?php include("rodape.php"); ?>
