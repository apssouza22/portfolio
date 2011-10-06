<div id="sobremim" class="window">
	<div class="windowHeader">
		<div class="windowTitle">Gerenciar alunos</div>
		<div class="windowButtons">
			<a href="" class="btVoltar" onclick="navegacao.voltar(this);return false;" ></a><a href="" class="min"></a><a href="" class="close"></a></div>
	</div>
	<div class="windowContent">

		<div class="listagem index">

			<div class="boxFiltro">

				<input name="pesquisa" type="text">
				<input type="button"  class="botao" name="enviar" value="Pesquisar">
				<a href="#" class="btNovo" onclick="navegacao.showHide('.listagem','.boxCadastro',this); return false;"  title="Novo Aluno">Novo</a>
			</div>

			<div class="boxLista">
				<table width="100%"  cellspacing="0" cellpadding="0" border="0" >

					<thead>
						<tr>
							<th width="50%">Nome</th>
							<th width="10%">S�rie</th>
							<th width="20%">Ra</th>
							<th width="20%">A��es</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Alexsandro Pereira da silva souza</td>
							<td>4�</td>
							<td>080023037</td>
							<td>
								<a href="#" onclick="navegacao.showHide('.listagem','.boxExibir',this); return false;">exibir</a>
							</td>

						</tr>
						<tr>
							<td>Alex Pereira da silva </td>
							<td>4�</td>
							<td>080023037</td>
							<td>
								<a href="" onclick="navegacao.showHide('.listagem','.boxExibir',this); return false;">exibir</a>
							</td>

						</tr>
						<tr>
							<td>Alexsandro Pereira</td>
							<td>2�</td>
							<td>080023037</td>
							<td>
								<a href="" onclick="navegacao.showHide('.listagem','.boxExibir',this); return false;">exibir</a>
							</td>

						</tr>
					</tbody>
				</table>

			</div><!--FIM:::box lista -->

		</div><!--FIM:::Listagem -->

		<div class="boxCadastro hidden">
			<form class="formCadastro">
				<ul class="listForm">
					<li>
						<label>Nome:</label>
						<input type="text" name="nome" class="input">
					</li>

					<li>
						<label>Endere�o:</label>
						<input type="text" name="endere�o" class="input">
					</li>

					<li>
						<label>Bairro:</label>
						<input type="text" name="bairro" class="input">
					</li>

					<li>
						<label>Telefone:</label>
						<input type="text" name="telefone" class="input input_11">
					</li>

					<li>
						<label>RG:</label>
						<input type="text" name="pai" class="input input_11">
					</li>

					<li>
						<label>Nome Pai:</label>
						<input type="text" name="mae" class="input">
					</li>

					<li>
						<label>Nome M�e:</label>
						<input type="text" name="pai" class="input">
					</li>

					<li>
						<label>Data de nascimento:</label>
						<input type="text" name="nascimento" class="input input_11">
					</li>

					<li>
						<label>S�rie:</label>
						<input type="text" name="serie" class="input input_2">
					</li>



					<li>
						<center>
							<a href="#" onclick="navegacao.showHide(' .listForm', ' .msg_sucesso',this);return false;" class="botao" >Salvar</a>
						</center>

					</li>
				</ul>

				<div class="msg_sucesso hide">
					<p> Sucesso na a��o.</p>
					<input type="reset" class="btNovo" onclick="navegacao.showHide('.msg_sucesso', '.listForm',this);" value="Novo">
				</div>

			</form>
		</div><!--fim::boxCadastro-->

		<div class="boxExibir hidden">

				<ul class="listForm">
					<li>
						<label>Nome:</label>
						<span>Alexsandro Pereira</span>
					</li>

					<li>
						<label>Endere�o:</label>
						<span>Rua alv�ro ferreira, 20</span>
					</li>

					<li>
						<label>Bairro:</label>
						<span>Pq novo sto amaro</span>
					</li>

					<li>
						<label>Telefone:</label>
						<span>76184253 / 28362499</span>
					</li>

					<li>
						<label>RG:</label>
						<span>8888888888 - 9</span>
					</li>

					<li>
						<label>Nome Pai:</label>
						<span>Jesus Cristo Nazareno</span>
					</li>

					<li>
						<label>Nome M�e:</label>
						<span>Ana Pereira da silva</span>
					</li>

					<li>
						<label>Data de nascimento:</label>
						<span>22/05/1988</span>
					</li>

					<li>
						<label>S�rie:</label>
						<span>4�</span>
					</li>

					<li>
						<label>Turma:</label>
						<span> C </span>
					</li>

					<li>
						<label><a href="#ocorrencias"  rel="ocorrencias"  title="Ocorr�cias"  class="icone" >Ocorr�ncias</a></label>
					</li>
					<li>
						<label><a href="" onclick="navegacao.showHide('', '.notas',this);return false;" >Notas</a></label>
						<div class="notas hidden">
							<table>
								<thead>
									<tr>
										<th>Disciplina</th>
										<th>N1</th>
										<th>N2</th>
										<th>N3</th>
										<th>N4</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Java</td>
										<td>10</td>
										<td>10</td>
										<td>10</td>
										<td>9.5</td>
									</tr>
									<tr>
										<td>JavaScript</td>
										<td>10</td>
										<td>10</td>
										<td>10</td>
										<td>9.5</td>
									</tr>
									<tr>
										<td>PHP</td>
										<td>10</td>
										<td>10</td>
										<td>10</td>
										<td>9.5</td>
									</tr>

								</tbody>
							</table>

						</div>
					</li>

					<li>
						<label><a href="" onclick="navegacao.showHide('', '.faltas',this);return false;" >Faltas</a></label>
						<div class="faltas hidden">
							<table>
								<thead>
									<tr>
										<th>Disciplina</th>
										<th>Jan</th>
										<th>Fev</th>
										<th>Mar</th>
										<th>Abr</th>
										<th>Mai</th>
										<th>Jun</th>
										<th>Jul</th>
										<th>Ago</th>
										<th>Set</th>
										<th>Out</th>
										<th>Nov</th>
										<th>Dez</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Port</td>
										<td>1</td>
										<td>33</td>
										<td>22</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td></td>
										<td></td>


									</tr>
									<tr>
										<td>Mat<td>
										<td>1</td>
										<td>33</td>
										<td>22</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td></td>
										<td></td>


									</tr>
									<tr>
										<td>Hist</td>
										<td>1</td>
										<td>33</td>
										<td>22</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td></td>
										<td></td>


									</tr>
									<tr>
										<td>Geo</td>
										<td>1</td>
										<td>33</td>
										<td>22</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td></td>
										<td></td>


									</tr>

								</tbody>
							</table>

						</div>
					</li>
					<li>
						<label><a href="#historico"  rel="historico"  title="Hist�rico"  class="icone" >Hist�rico</a></label>
					</li>

					<li>
						<label><a href="#declaracao"  rel="declaracao"  title="Declara��o"  class="icone" >Declara��o</a></label>
					</li>

				</ul>



		</div><!--fim::boxExibir-->
	</div>

</div><!--FIM SOBRE MIM-->

