<?php
include('menu.php');
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
				Após esse episódio tivemos alguns problemas para manter ele online e o prjeto foi descontinuado por parte de Francis Santana.<br>
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
				Pense em um mundo onde você pode comprar seus produtos favoritos, sua comida predileta e ainda para conquistar isso vcê não precise gastar o preço que é imposto a aquele item ou serviço com sua moeda nacional corrente...<br>
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
				<b font style="color: green">100000 SPERO INICIAIS</b><br>
				<b font style="color: red">- 10780 SPERO SAÍDAS</b><br>
				<b>---------------------------</b><br>
				<b font style="color: green">89220 SPERO RESTANTES</b><br><br>
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
				<tr>
				<!-- LINE -->
				<td>SemZw3EoJkshdDMCoHDQm3495oqkNesY1h</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/912a3aceae978799ae7397ef3eed7d3e0055623a9ddc9c0964ecb512dfc2c38a" target="_blank">912a3aceae978799ae7397ef3eed7d3e0055623a9ddc9c0964ecb512dfc2c38a</a></td>
				</tr>
				<!-- LINE -->
				<td>Sifd9gMAQWam9ZRWQn3HKFq3QVm9sWfc9x</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/ffa38cd5e650bba81e2172099e9bfd68f93c51c236f2031156e2e44e2ab9b1fd" target="_blank">ffa38cd5e650bba81e2172099e9bfd68f93c51c236f2031156e2e44e2ab9b1fd</a></td>
				</tr>
				<!-- LINE -->
				<td>SZJyMdDEyg4NWvmNaXzCnX6tj4tNSGZCx2</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/574b1030e26705df3530090aa0380a949ffc635a235ce3373734c982b4691429" target="_blank">574b1030e26705df3530090aa0380a949ffc635a235ce3373734c982b4691429</a></td>
				</tr>
				<!-- LINE -->
				<td>SZnGRzsrbkUCqHJbedpf7k6Wzqi9uabw2B</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/d2a797763ded5e5d81161ccaac8bfc47abc9565282cc3df9a0518bb754614c9e" target="_blank">d2a797763ded5e5d81161ccaac8bfc47abc9565282cc3df9a0518bb754614c9e</a></td>
				</tr>
				<!-- LINE -->
				<td>SQyUqeYG6gnt5LSAuuhCYhuzSWxBUjybwn</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/a45ea55d5de8271473ced8a5d3999a06117e11276c514e41e3fdd7f110976565" target="_blank">a45ea55d5de8271473ced8a5d3999a06117e11276c514e41e3fdd7f110976565</a></td>
				</tr>
				<!-- LINE -->
				<td>SPaWjRdPKHR9UUZjp6JJLEiTVzc17dJfG8</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b" target="_blank">c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b</a></td>
				</tr>
				<!-- LINE -->
				<td>SjvFtgoa4uzRKhAfHvKQTHxiurSu1bzzvU</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b" target="_blank">c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b</a></td>
				</tr>
				<!-- LINE -->
				<td>SUBGNSmXHcdUuZoU9rdGK3ZQHgmhHerCKp</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b" target="_blank">c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b</a></td>
				</tr>
				<!-- LINE -->
				<td>SctN66RWAn2rub3M8xbaUTZFoJNAyfksxD</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b" target="_blank">c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b</a></td>
				</tr>
				<!-- LINE -->
				<td>SYjL5Hix9PzttDmasKYefzptypifuvkfDL</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b" target="_blank">c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b</a></td>
				</tr>
				<!-- LINE -->
				<td>Sifd9gMAQWam9ZRWQn3HKFq3QVm9sWfc9x</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b" target="_blank">c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b</a></td>
				</tr>
				<!-- LINE -->
				<td>Sj4Qx8u86NWXzKKNwDHDbcdALuBF7oF7KY</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b" target="_blank">c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b</a></td>
				</tr>
				<!-- LINE -->
				<td>ShFhRde41yvEB4QRhZWVQuwcdb4FRypUGc</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b" target="_blank">c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b</a></td>
				</tr>
				<!-- LINE -->
				<td>ShbgFjCnMmKGnAFsNTFrbhaAvVstr95dWv</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b" target="_blank">c8c01d697830fd5c92c187a0489abf7c2f3297146ff177078caba0c1d960b81b</a></td>
				</tr>
				<!-- LINE -->
				<td>SjiNMaxY58sL8FZ1HV9XpbPdHi9EwaTnmq</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b" target="_blank">85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b</a></td>
				</tr>
				<!-- LINE -->
				<td>SgThyfPfJVt8aGfFggxR6YkGiE7fq5xxkU</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b" target="_blank">85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b</a></td>
				</tr>
				<!-- LINE -->
				<td>Sjufv4H8x9HUDMYmT3yebE37D7924QXzt1</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b" target="_blank">85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b</a></td>
				</tr>
				<!-- LINE -->
				<td>SNkHrDd3p8xxbTej7JZz5ttM1o2FeyEDHK</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b" target="_blank">85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b</a></td>
				</tr>
				<!-- LINE -->
				<td>SkWt2goRa8PhumLbSVrLoCUoCR4wC3rKxe</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b" target="_blank">85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b</a></td>
				</tr>
				<!-- LINE -->
				<td>SWQDdRbUD8n4acbDBEGovwvqsqS6me9Ch4</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b" target="_blank">85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b</a></td>
				</tr>
				<!-- LINE -->
				<td>ShXMRwCTvTRFrt9t1NbfeezXgdmYjQWgu3</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b" target="_blank">85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b</a></td>
				</tr>
				<!-- LINE -->
				<td>SfDw1Q2MKzCyika5eYq9CpH56ksesg7fic</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b" target="_blank">85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b</a></td>
				</tr>
				<!-- LINE -->
				<td>SV3dGTQXuFsu1mG8vcpt7AKDDKDNrEBz5T</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b" target="_blank">85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b</a></td>
				</tr>
				<!-- LINE -->
				<td>SXWcUg536NQEZfYNbkZhVTej3EZ3UPBNUv</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b" target="_blank">85fcea36ee98ed8beb434925686886a2a2993e087278cec018c9f2eb998e885b</a></td>
				</tr>
				<!-- LINE -->
				<td>SSwbxeWBdGUyFpNC4Zihx2YqcNrvFrkXiY</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/370ab0c1b76fb3de99589a055088f10178050898b2387c40c96268c80c7bc794" target="_blank">370ab0c1b76fb3de99589a055088f10178050898b2387c40c96268c80c7bc794</a></td>
				</tr>
				<!-- LINE -->
				<td>SbqzbthA67KR3Akz7qwKq1PjpS5nsnbtnM</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/370ab0c1b76fb3de99589a055088f10178050898b2387c40c96268c80c7bc794" target="_blank">370ab0c1b76fb3de99589a055088f10178050898b2387c40c96268c80c7bc794</a></td>
				</tr>
				<!-- LINE -->
				<td>SiZz21Su1HBXLrYMxYccYdYiccZaUwDbia</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/370ab0c1b76fb3de99589a055088f10178050898b2387c40c96268c80c7bc794" target="_blank">370ab0c1b76fb3de99589a055088f10178050898b2387c40c96268c80c7bc794</a></td>
				</tr>
				<!-- LINE -->
				<td>ScFekWqTu91x6q1zNU3GiqBMVoX6kzVg36</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/606b4f17b283c5a2841420f5c82cce7f26f1aa8b40d6cbe5be552403c262ad8b" target="_blank">606b4f17b283c5a2841420f5c82cce7f26f1aa8b40d6cbe5be552403c262ad8b</a></td>
				</tr>
				<!-- LINE -->
				<td>SeLN96rNs2owWcita793czULSabK4gKiYk</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/606b4f17b283c5a2841420f5c82cce7f26f1aa8b40d6cbe5be552403c262ad8b" target="_blank">606b4f17b283c5a2841420f5c82cce7f26f1aa8b40d6cbe5be552403c262ad8b</a></td>
				</tr>
				<!-- LINE -->
				<td>SVR1ESWPs5dUBokdvpMkLKV8kdePGSf6XD</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/606b4f17b283c5a2841420f5c82cce7f26f1aa8b40d6cbe5be552403c262ad8b" target="_blank">606b4f17b283c5a2841420f5c82cce7f26f1aa8b40d6cbe5be552403c262ad8b</a></td>
				</tr>
				<!-- LINE -->
				<td>SdbRjoKySsVq7WFyNjGPs5jenQDSLRTxyP</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/606b4f17b283c5a2841420f5c82cce7f26f1aa8b40d6cbe5be552403c262ad8b" target="_blank">606b4f17b283c5a2841420f5c82cce7f26f1aa8b40d6cbe5be552403c262ad8b</a></td>
				</tr>
				<!-- LINE -->
				<td>SRzSYWJu568eBDMmhyekUPYahJiWeUHCEH</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/42e6feb8baa0a937256e20dadfccd2cc19b1cfdface4bf2e84df5ff8253fad25" target="_blank">42e6feb8baa0a937256e20dadfccd2cc19b1cfdface4bf2e84df5ff8253fad25</a></td>
				</tr>
				<!-- LINE -->
				<td>SZ47uhUirvcdcpWDz2zfyXfQ9q8esq5cK7</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/42e6feb8baa0a937256e20dadfccd2cc19b1cfdface4bf2e84df5ff8253fad25" target="_blank">42e6feb8baa0a937256e20dadfccd2cc19b1cfdface4bf2e84df5ff8253fad25</a></td>
				</tr>
				<!-- LINE -->
				<td>SXTUUsJn85dui3ovxPt44zoT1DrG5ZvFkV</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/42e6feb8baa0a937256e20dadfccd2cc19b1cfdface4bf2e84df5ff8253fad25" target="_blank">42e6feb8baa0a937256e20dadfccd2cc19b1cfdface4bf2e84df5ff8253fad25</a></td>
				</tr>
				<!-- LINE -->
				<td>SQmjuHTb4AB5MDFLHR8kTZnj4CvEUxwsdn</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/e9051bcae91909c0a81495e847d743cf5ffb87256071a45950ca2fa96896be00" target="_blank">e9051bcae91909c0a81495e847d743cf5ffb87256071a45950ca2fa96896be00</a></td>
				</tr>
				<!-- LINE -->
				<td>SNYogq2yK1r5bDnov22rbD7iPhq2RzvY93</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/f8a72990a1e7b77692ca18f5a0db5660dfa9ded4a250278196decc521fee0e2e" target="_blank">f8a72990a1e7b77692ca18f5a0db5660dfa9ded4a250278196decc521fee0e2e</a></td>
				</tr>
				<!-- LINE -->
				<td>SjhXcWqDoQr2HGRg1pA8h6pshsNXE3EmKp</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/856d7e449429bb7e5a22696f2b49309e21651550e27c14d6997312de7c23b563" target="_blank">856d7e449429bb7e5a22696f2b49309e21651550e27c14d6997312de7c23b563</a></td>
				</tr>
				<!-- LINE -->
				<td>SZVK5rTeciLQof8Jb3hSmp4DSWNCcaDEv8</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/ec6edd7958ba5623a9b97035c7ee9a6816066197bf303c8efc84380c7145a27f" target="_blank">ec6edd7958ba5623a9b97035c7ee9a6816066197bf303c8efc84380c7145a27f</a></td>
				</tr>
				<!-- LINE -->
				<td>STXYgUWY2DUx4kiniX3kHvVH61cGpcP771</td>
				<td><a href="http://sperocoin.ddns.net:3001/tx/4cd5a537772463b6b513bdbb142fb03eb0bf253f6755bb0ce42b86b9e81b8695" target="_blank">4cd5a537772463b6b513bdbb142fb03eb0bf253f6755bb0ce42b86b9e81b8695</a></td>
				</tr>
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
