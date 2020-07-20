<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>.::Programação Web::.</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="topo">
		<img src="img/topo_aula.png" alt="Topo">
	</div>

	<br><br><br><br>

	<h1>TECTREINAMENTOS - TRATAMENTO DE DADOS COM PHP</h1>	<hr>	<br>

	<div class="pesquisa">
		<h6>Prof. Wagner Cardoso</h6>
	</div>

	<div class="conteudo">

		<?php
			$pesquisa = $_GET["pesquisa"];

			switch ($pesquisa) {
				case 'office':
					echo
					"
<h1>Pacote Office</h1> 		<br>
<img src='img/office.png'> 	<br>

Faculdade, cursos livres e técnicos<br>

Mercado de trabalho disputado, empresas cada vez mais exigentes...<br>

Tempo e Dinheiro, são fatores que ocupam e preocupam pessoas o tempo todo na atual sociedade.<br>

Microsoft Office Essencial, apresenta a forma mais simples e rápida de aprender as principais ferramentas da Microsoft para a criação de Planilhas eletrônicas, Formatação de Textos e Criação de Apresentações com os já conhecidos e amplamente utilizados Softwares Excel, Word e Power Point.
					";
					break;
				case 'negocios':
					echo 
					"
<h2>Negócios Digitais</h2> 	<br>
<img src='img/negocios.png'> 	<br>

Já imaginou desenvolver um site e obter renda extra com isso?<br>

Já imaginou trabalhar como afiliado de produtos digitais, gerando renda sem ter que abandonar seu atual emprego ou atividade?<br>

Prestar serviços de desenvolvimento de sites para empreendedores digitais, com campanhas completas de Marketing digital utilizando Google Ads, Facebook Ads?<br>

Tornar - se um afiliado Profissional de plataformas conhecidas como Hotmart, Eduzz, Monetizze e Udemy?<br>
Alavancar a venda de produtos físicos melhorando sua presença digital?<br>

Se você disse sim para uma (ou todas) essas perguntas, então este curso é ideal!
					";
					break;
					case 'marketing':
						echo 
						"
<h3>Marketing Digital</h3> 	<br>
<img src='img/Ads.png'> 		<br>

Uma das maiores dificuldades no início de qualquer empreendimento é a conquista dos clientes, mostrar o quanto sua ideia pode ser inovadora ou o quanto seu produto pode ser útil e sua qualidade surpreendente. <br>

Se você é um produtor de conteúdo digital (Youtuber por exemplo) este curso vai ajudar a alavancar seus vídeos e conquistar público. <br>

Neste curso trabalhamos com o Marketing Direto, no qual os anúncios serão totalmente objetivos levando clientes (que estajam buscando por seu produto) até a sua página de vendas, canal, loja virtual ou física e página do Facebook.
						";
						break;
				
				default:
					echo "Infelizmente não encontramos resposta para sua pesquisa, clique em voltar e tente novamente.";
					break;
			}
		?>
		<br><br>
		<a href="index.html"> << Voltar </a>
	</div>

	<div class="rodape">
		<h2>TECTREINAMENTOS - PROGRAMAÇÃO WEB COM PHP</h2><br>
		<h2>PÁGINA DE TRATAMENTO DE DADOS</h2>
	</div>
	<footer>
		<h3>Todos os direitos reservados - Desenvolvido por TecTreinamentos</h3>
	</footer>




</body>
</html>