<?php
include('menu.php');
include('balance_dist.php');
?>

		<!-- MENU -->

<div class="row">
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#INTRODUCTION">Introdução</a>
  <a href="#PROBLEM">O Problema</a>
  <a href="#SOLUTION">A Solução</a>
  <a href="#ADDITIONAL">Informações Adicionais</a>
  <a href="#CONCLUSION">Conclusão</a>
	</div>
</div>

<div class="container" style="padding-top: 2%;font-family: 'Saira Semi Condensed', sans-serif;">
	<!-- HEAD -->
	<img src="img/powered.png" alt="" width="220"><div class="row">
			<font style="color:blue; font-size:60px">SPERO White Paper</font>
	</div>
		<!-- DIVISOR -->
		<hr />
<body >

<span class="menu" style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="img/btn-dwn.png" width="130x" height="50px" class="img-responsive"></span>
<center>
	<!-- WELCOME -->
	<div class="container">
		<p><div class="row form-group">
			<center style="text-align:center; font-size:18px;padding-top:5%">
				Seja bem vindo a este projeto!<br>
				Na opção acima você pode navegar por nossas seções sem que haja necessidade de localizar o conteúdo manualmente. Esperamos que todas as dúvidas sobre o projeto sejam sanadas por meio deste documento
				 que relata desde o princípio da criação do projeto até a presente data.<br>
				 No decorrer do desenvolvimento e passar dos anos as informações aqui emitidas poderaão ser acrescentadas, alteras e removidas para uma melhor atualização de todos os nossos usuários.<br>
				 <b> Esperamos que você também faça parte de nossa rede e nos ajude a crescer!</b>
			</center>
		</div></p>
					<!-- DIVISOR -->
		<hr />
	<!-- INTRODUCTION -->
		<p id="INTRODUCTION"><div class="row form-group">
			<center style="text-align:center; font-size:18px;padding-top:5%">
								<b><u><h2>INTRODUÇÃO</h2></b></u><br>
				A SPERO foi originalmente criada a partir de uma código de uma moeda já em desenvolvimento pelo brasileiro Marciano Valverde. A partir da base do código dele foram aplicados alguns ajustes e melhorias de modo a transmitir o
				mais completo e puro código.<br>
				Inicialmente supervisionada por Francis Santana, ex-membro da Foundation MarteX(moeda base), a SPERO teve seu início no dia 25 de Setembro de 2017, podendo esta data ser confirmada em nosso código disponível no
				<a href="https://github.com/DigitalCoin1/DigitalCoinBRL" target="_blank">GITHUB</a>.
				Desta forma foram geradas no dia 25 de Setembro as seguintes informações:<br>
				<p>
				• Merkle: 0x6f5dd836da72471e5ea8f3c836249e447059f9f7c7c26a2f91fecd0c509dd677<br>
				• Timestamp: "A esperanca eh a ultima que morre."<br>
				• block.nTime: 1506335848<br>
				• block.nNonce: 44360;<br>
				• GenesisBlock: 0x000006f4925ed7b889f847f24621390d4943466f091c3254ca1bd8becc517f7b<br>
				</p>
				Dando início ao bloco Genesis, então foram pré minerados os blocos 01 e 02 com hashs: 00000fff3b93a589e494558ef101a61ca0d3e66f6e5639eb4711ee16db45d265 e 000007fdef936b937d6935b12ce732e275bab1805e103e639b4c9c6ebf3b0bec
				respectivamente.<br>
				Nestes dois blocos foram minerados a quantia de 100000.00000000 SPERO, que serão distribuidos ao longo do projeto de forma a manter o mesmo ativo e sempre buscando melhorias.<br>
				Após esse episódio tivemos alguns problemas para manter ele online e o projeto foi descontinuado por parte de Francis Santana.<br>
				A equipe SPERO foi então desenvolvida para dar prosseguimento nos serviços inicialmente prestados por Francis.<br>
				Nessa busca por manter o código vivo, um fork foi realizado e mais melhorias foram realizadas a partir deste fork.<br>
				O projeto teve seu fork realizado no dia 26 de Setembro onde todos os dados sobre a pré mineração foram mantidos. A wallet com saldo da pré mineração foi então realocada e o código foi novamente enviado ao
				<a href="https://github.com/DigitalCoin1/DigitalCoinBRL" target="_blank">GITHUB</a>.<br>
				<b>Renascia aqui a SPERO!</b>
				<p><h3>Redução das diferenças sociais</h3>
				A proposta inicial da SPERO é criar uma moeda que possa ser utilizada por qualquer usuário sem complicações e demoras nas transações. Queremos trazer uma moeda que seja usual no nosso dia a dia, seja por um vendedor autônomo
				ou por uma grande rede de supermercados.<br>
				A base deste projeto é auxiliar as pessoas com baixa renda ou quase nenhuma renda a conseguirem conquistar o mínimo de dignidade possível na vida em sociedade.<br>
				Queremos que estudantes que sofrem com seus altos custos em estudos, possam realizar seus lanches, comprar livros e fazer muito mais utilizando nosso sistema a custo zero.<br></p>
				<p><h3>Ecologia</h3>
				Além do fato da tentativa de redução da diferença social, gostaríamos também de trazer uma nova visão ecologicamente para o mundo das criptomoedas.<br>
				Muito tem se visto com relação as moedas com tecnologia PoS, mas pouco tem se feito para que este sistema se torne eficaz. Com a SPERO, esperamos que este problema ta,bém seja sanado ou ao menos amenizado.<br></p>
		</div></p>
					<!-- DIVISOR -->
		<hr />

<p id="PROBLEM"><div class="row form-group">
			<center style="text-align:center; font-size:18px;padding-top:5%">
								<b><u><h2>O PROBLEMA</h2></b></u><br>
				Pense em um mundo onde você pode comprar seus produtos favoritos, sua comida predileta e ainda para conquistar isso você não precise gastar o preço que é imposto a aquele item ou serviço com sua moeda nacional corrente...<br>
				Não seria interessante?<br>
				Poder pagar um jantar a sua esposa, comprar o brinquedo de seu filho ou fazer um lanche na porta de sua escola ou trabalho sem ter que mexer em seu orçamento mensal.<br>
				Desde o ano de 2009 isso é possível através de um sistema monetário descentralizado criado por um(ou uma equipe) conhecida mundialmente por Satoshi Nakamoto. Foi criado a partir de um código fonte desenvolvido por este ser(ou equipe)
				desconhecido um sistema bancário totalmente diferente do convencional, onde todas as transações ocorrem sem nenhum intermediador ou atrasos bancários devido aos seus horários de funcionamento.<br>
				O BITCOIN foi criado para suprir todas essas necessidades e o melhor de tudo: estava disponível de graça!<br>
				Qualquer pessoa com um computador conectado à Internet poderia realizar a conhecida mineração e obter em troca do resultado da prova de trabalho algumas moedas fornecidas por este sistema.<br>
				A mineração se consistia em uma resolução de problemas matemáticos e essa resolução se dava através de processadores que eram utilizados ao seu extremo para garantir velocidade e exatidão nas respostas.<br>
				Aqui se inicia o primeiro problema:<br>
				Com o passar dos anos a moeda foi ficando cada vez mais conhecida e mais usuários começaram a fazer uso deste meio. Porém com o crescimento de usuários a obtenção se tornou cada vez mais difícil em razão de sempre haverem
				melhorias nas fabricações de processadores e com isso os processadores mais antigos e se tornando obsoletos.<br>
				Iniciava-se então a corrida para obtenção de moedas!<br>
				Quanto mais recente fosse seu processador e quanto melhor fosse seu poder de processamento, mais rápido você obtinha os Satoshis(Unidade fracional do BITCOIN). Com esta corrida, o preço de mercado começou a alavancar e cada
				vez mais e mais usuários chegavam.<br>
				Aqui então se inicia uma nova modalidade: a participação de empresas para mineração profissional(ASIC).<br>
				Empresas começaram a desenvolver máquina com hardwares incrivelmente fortes e cobravam preços absurdos para a sua aquisição.<br>
				Muitos usuários começaram a comprar estes equipamentos e os que não tinham condições, começaram a entrar em esquemas conhecidos como "cloud mining" ou mineração em nuvem, onde as grandes empresas compravam inúmeras ASICs e
				 com isso serviam o aluguel do poder de processamento aos seus usuários.<br>
				 A contrapartida deste esquema todo foi primeiramente o risco altíssimo de contratar um serviço que poderia nunca te dar algum retorno e em contrapartida se você comprasse os equipamentos o consumo de energia era altíssimo,
				 tornando por muitas vezes prejuízos a mineração.<br>
				Para se ter uma idéia uma ASIC S9 custa em média $2200 com um consumo de 1300W! Com isso temos o consumo superior ao de um arcondicionado(1200W)!!!<br>
				Desta forma temos por vezes empresas profissionais com mais de 50 máquinas ligadas ao mesmo tempo... O consumo de energia elétrica é absurdo e totalmente insustentável ecologicamente falando.<br>
				<br><p><img src="img/bitcoinfarm.jpg"><br><font style="font-size:12px">Centro de mineração profissional</font><br></p>
				Assim apenas os ricos, ficam cada vez mais ricos, esbanjando seus altos custos que por muitas vezes não são pagos e o usuário final fica totalmente a mercê destas entidades.<br>
				Outro grande problema relatado e vivido com o avanço do número de usuários da rede BITCOIN era a demora de confirmação de uma transação, ou mesmo a adição desta transação no Blockchain.<br>
				Um bloco BITCOIN pode receber até aproximadamente 1.02Megabytes(dia) ou quase 292,359 transações por dia. Para enviar sua transação a este bloco e ser adicionada ao Blockchain você paga uma taxa conhecida como "fee". A taxa
				padrão do BITCOIN hoje é de 0.00001BTC, sendo que se você paga uma taxa maior, sua transação tem uma prioridade maior em relação as outras e será adicionada ao bloco mais rapidamente.<br>
				Sugerindo isso, se o bloco estivesse no número 292,358 e sua transação fosse a que fechasse o bloco e alguém lançasse uma taxa superior a sua, sua transação só entraria no próximo bloco.<br>
				Com isso o gasto com altas taxas é por muitas vezes insustentável economicamente falando e quando se envia com taxa padrão, o tempo de espera é gigantesco(podendo demorar mais de 1 dia).<br>
		</div></p>
					<!-- DIVISOR -->
		<hr />

<p id="SOLUTION"><div class="row form-group">
			<center style="text-align:center; font-size:18px;padding-top:5%">
								<b><u><h2>A SOLUÇÃO</h2></b></u><br>
				A SPERO veio para preencher as lacunas deixadas pela proposta original do BITCOIN.<br>
				Apresentamos a mineração PoS ou prova de participação("proof of stake"), onde a rede seleciona uma carteira e cria um bloco dentro da mesma. Ao criar o bloco você recebe uma recompensa de participação da transação.<br>
				Desta forma quanto maior o seu saldo, maiores são as chances de ser selecionado.<br>
				O prêmio pago pela SPERO é equivalente a <b>25%</b> por ano do valor total de sua carteira.<br>
				Desta forma tudo o que você precisa é de um computador rodando o software da SPERO e o manter ligado seguindo algumas normas simples:<br>
				<br><p style="text-align:left;">→ Manter a carteira online em no mínimo 2h por dia e no máximo 12h;<br>
				→ Manter a carteira desbloqueada para participação;<br>
				→ Quanto maior o seu saldo, mais rápido você pode ser contemplado pelo sorteio da rede;<br>
				→ O saldo equivale ao seu "peso" da rede;<br>
				→ Saldo superior a 1 SPERO<br></p>
				As vantagens desta modalidadede mineração são inúmeras, sendo que a que mais se destaca é possibilidade de estar participando desta mineração sem precisar gastar dinheiro com equipamentos com altos preços. Você pode utilizar
				 aquele Pentium antigo ou um RaspBerry por exemplo!<br>
				Desta forma vem a segunda vantagem: O baixo consumo de energia elétrica.<br>
				Inicialmente propomos a distribuição de fases do nosso projeto, sendo dividida em número de blocos:<br>
				• Do bloco 0 ao 33331 = Fase de mineração PoW e PoS;<br>
				• Do bloco 33332 ao 263250 = Fase de mineração PoS;<br>
				• Do bloco 263251 acima = Fase de mineração PoW e PoS<br>
				<br>
				Além disso, temos a vantagem do bloco redimensionável ou ajustável de acordo com a necessidade da rede. Lembra do exemplo do BITCOIN? Pois é nossos blocos tem tempo máximo de 60 segundos e após isso é registrado no livro.
				Se a rede precisar usar 292,360 transações ou mais de 20MB tudo no prazo de 60 segundos, todas as transações serão enviadas!<br>
				Com isso ganhamos agilidade nas transações e compensação extremamente rápidas:<br>
				<br>
				<p>• 03 confirmações para transações de usuário para usuário;<br>
				• 05 confirmações para transações mineradas<br></p>
				Assim as transações tem um tempo de no máximo 5min para serem registradas no bloco em fase de mineração PoS e menos de 3min em fase de mineração híbrida.<br>
		</div></p>
					<!-- DIVISOR -->
		<hr />

<p id="ADDITIONAL"><div class="row form-group">
			<center style="text-align:center; font-size:18px;padding-top:5%">
								<b><u><h2>INFORMAÇÕES ADICIONAIS</h2></b></u><br>
				Abaixo gostaríamos de relacionar algumas informações sobre o projeto que você quer saber:<br>
				<br><h3>Informações Técnicas:</h3><br>
				<p>
				• Algoritmo: X13 - Junção de 13 hashs, sendo eles: blake, bmw, groestl, jh, keccak, skein, luffa, cubehash, shavite, simd, echo, hamsi, fugue<br>
				• Total de moedas: 7 milhões<br>
				• Tempo de Bloco: 60 segundos<br>
				• Retorno de PoS: 25% por ano<br>
				• Dificuldade reiniciada a cada bloco<br>
				• 100000 moedas pré mineradas<br>
				</p>
				<br>
				<h3>Distribuição das moedas pré mineradas:</h3>
								Track the distribution in real time<br>

				<div class="container">
				<table class="table table-hover">
				<thead>
				<tr>
					<!-- COLUNS -->
					<th>Distribution</th>
					<th>Address</th>
					<th>Current Balance</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Wallet Android</td>
					<td><a href="http://sperocoin.ddns.net:3001/address/SdFNte8eomKRGrecuP1zezBtVhLfzzpmM8">SdFNte8eomKRGrecuP1zezBtVhLfzzpmM8</a></td>
					<td><?php echo $w_android." SPERO"; ?></td>
				</tr>
				<tr>
					<td>Wallet IOS</td>
					<td><a href="http://sperocoin.ddns.net:3001/address/SjcPW5pCZy97q94QYwu5nrJZh58otURA7p">SjcPW5pCZy97q94QYwu5nrJZh58otURA7p</a></td>
					<td><?php echo $w_ios." SPERO"; ?></td>
				</tr>
				<tr>
					<td>Wallet MAC</td>
					<td><a href="http://sperocoin.ddns.net:3001/address/SNGaehWAaZ51qishJMhwqgQcBQvFfqaSJD">SNGaehWAaZ51qishJMhwqgQcBQvFfqaSJD</a></td>
					<td><?php echo $w_mac." SPERO"; ?></td>
				</tr>
				<tr>
					<td>Translations of Topics</td>
					<td><a href="http://sperocoin.ddns.net:3001/address/Sk1vJ5PKiXoQKwFYVwQTm6sXb4DFWpUDL4">Sk1vJ5PKiXoQKwFYVwQTm6sXb4DFWpUDL4</a></td>
					<td><?php echo $trad." SPERO"; ?></td>
				</tr>
				<tr>
					<td>1º Study Group</td>
					<td><a href="http://sperocoin.ddns.net:3001/address/Sghyv6hSBhbAJoupYx9RnV3z4T4oSJfrAF">Sghyv6hSBhbAJoupYx9RnV3z4T4oSJfrAF</a></td>
					<td><?php echo $groupone." SPERO"; ?></td>
				</tr>
				<tr>
					<td>2º Study Group</td>
					<td><a href="http://sperocoin.ddns.net:3001/address/SZenx1RhCeEcBBnqnUZm7d33tWNS4JFNUx">SZenx1RhCeEcBBnqnUZm7d33tWNS4JFNUx</a></td>
					<td><?php echo $grouptwo." SPERO"; ?></td>
				</tr>
				<tr>
					<td>3º Study Group</td>
					<td><a href="http://sperocoin.ddns.net:3001/address/Sh1poCxVfph2x1ZPt1RwcH9kMTaj7abZy3">Sh1poCxVfph2x1ZPt1RwcH9kMTaj7abZy3</a></td>
					<td><?php echo $groupthree." SPERO"; ?></td>
				</tr>
				<tr>
					<td>Airdrop Distribution</td>
					<td><a href="http://sperocoin.ddns.net:3001/address/Sjy8g4rXe6Bdrb7qSz7Pm4pgZZFCG141NS">Sjy8g4rXe6Bdrb7qSz7Pm4pgZZFCG141NS</a></td>
					<td><?php echo $airdrop." SPERO"; ?></td>
				</tr>
				<tr>
					<td>Sales</td>
					<td><a href="http://sperocoin.ddns.net:3001/address/SN3r5zNcfSBMtzUsVTp2ps7PyYG3sxUZVf">SN3r5zNcfSBMtzUsVTp2ps7PyYG3sxUZVf</a><br><a href="http://sperocoin.ddns.net:3001/address/SSi9PsXc3PUCqy9dAHfgArMDivrUuCGEbw">SSi9PsXc3PUCqy9dAHfgArMDivrUuCGEbw</a></td>
					<td><?php echo $sales." SPERO"; ?></td>
				</tr>
			</tbody>
				</table>
				</div>
				<p>
				→ Wallet Android: 2000 SPERO<br>
				→ Wallet IOS: 2000 SPERO<br>
				→ Wallet MAC: 2000 SPERO<br>
				→ 10 Tradução de Tópicos: 100 SPERO<br>
				→ <s>Listagem em Exchange: 10000 SPERO</s>: TXid de pagamento: <a href="http://sperocoin.ddns.net:3001/tx/954af0b2e80730721d2f5edc30708a636802a27e5dfaa22fbbd620d5399f3cf5" target="_blank">954af0b2e80730721d2f5edc30708a636802a27e5dfaa22fbbd620d5399f3cf5</a><br>
				→ 03 Grupo de Estudos com 05 alunos em cada: 5.000 SPERO<br>
				→ Distribuição Airdrop(20 SPERO):<br>
				→ Vendas: 30000 SPERO</p>
				<br>
				<h3>AIRDROP:</h3>
				<div class="container">
				<table class="table table-hover">
				<thead>
				<tr>
					<!-- COLUNS -->
					<th>Endereços</th>
					<th>TxID</th>
				</tr>
			</thead>
			<tbody>
				<? include ("table.php"); ?>
			</tbody>
				</table>
				</div>

<div id="chartContainer" style="height: 420px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
		</div></p>
					<!-- CONCLUSION -->
					<!-- DIVISOR -->
		<hr />

<p id="CONCLUSION"><div class="row form-group">
			<center style="text-align:center; font-size:18px;padding-top:5%">
								<b><u><h2>CONCLUSÃO</h2></b></u><br>
				Se após ler essa documentação houver o desejo de estar participando deste projeto, basta apenas realizar o download do nosso software localizado em nosso website.<br>
				Gostaríamos de estar agradecendo a cada usuário que participa ativamente de nossa comunidade e auxilia para o crescimento da nossa moeda. Ajudando a comunidade você automaticamente está se ajudando, uma vez que tudo que
				acontece com a moeda reflete diretamente em você usuário.<br>
				A partir daqui estaremos em busca de sempre estarmos mais divulgando nosso projeto e aumentando a nossa rede e serviços.<br>
				Por falar neles, visite nosso website e confira nossos serviços e parceiros que aceitam a nossa moeda como forma de pagamento.<br><br>
				Contatos:<br>
				E-mail: <a href="mailto:sperocoin@gmail.com">sperocoin@gmail.com</a><br>
				Website: <a href="https://sperocoin.ddns.net/" target="_blank">https://sperocoin.ddns.net/</a>
		</div></p>
					<img src="img/logo.png" width="300px"/>
					<!-- DIVISOR -->
		<hr />
<font style="color:blue;font-size:14px">SPERO&reg is a registered trademark. 2017<br>
										All rights are reserved.<br></font>
	</div>
</center>
</div>
</body>
</html>
