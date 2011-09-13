<div id="tecnicas" class="window">
	<div class="windowHeader">
		<div class="windowTitle">Gêrenciar professores</div>
		<div class="windowButtons">
			<a href="" class="btVoltar" onclick="navegacao.voltar();return false;" ></a><a href="" class="min"></a><a href="" class="close"></a></div>
	</div>
	<div class="windowContent">

		<div class="listagem index">

			<div class="boxFiltro">

				<input name="pesquisa" type="text">
				<input type="button" name="enviar" value="Pesquisar">
				<a href="#" class="btNovo" onclick="navegacao.showHide('.listagem','.boxCadastro'); return false;"  title="Novo Aluno">Novo</a>
			</div>

			<div class="boxLista">
				<table width="100%"  cellspacing="0" cellpadding="0" border="0" >

					<thead>
						<tr>
							<th width="50%">Nome</th>
							<th width="20%">Telefone</th>
							<th width="20%">RF</th>
							<th width="10%">Ações</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Alexsandro Pereira da silva souza</td>
							<td>080023037</td>
							<td>1234-5678</td>
							<td>
								<a href="#" onclick="navegacao.showHide('.listagem','.boxExibir'); return false;">exibir</a>
							</td>

						</tr>
						<tr>
							<td>Alexsandro Pereira da silva souza</td>
							<td>080023037</td>
							<td>1234-5678</td>
							<td>
								<a href="#" onclick="navegacao.showHide('.listagem','.boxExibir'); return false;">exibir</a>
							</td>

						</tr>
						<tr>
							<td>Alexsandro Pereira da silva souza</td>
							<td>080023037</td>
							<td>1234-5678</td>
							<td>
								<a href="#" onclick="navegacao.showHide('.listagem','.boxExibir'); return false;">exibir</a>
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
						<label>Endereço:</label>
						<input type="text" name="endereço" class="input">
					</li>

					<li>
						<label>Bairro:</label>
						<input type="text" name="bairro" class="input">
					</li>

					<li>
						<label>Cidade</label>
						<input type="text" name="Cidade" class="input">
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
						<label>Formação:</label>
						<input type="text" name="Formação:" class="input">
					</li>

					<li>
						<label>Disciplinas:</label>
						<input type="checkbox" name="portugues"><span>Português</span>
						<input type="checkbox" name="matematica"><span>Matemática</span>
						<input type="checkbox" name="ciencias"><span>Ciências</span>
						<input type="checkbox" name="geografia"><span>Geografia</span>
						<input type="checkbox" name="historia"><span>História</span>
					</li>

					<li>
						<label>Data de nascimento:</label>
						<input type="text" name="nascimento" class="input input_11">
					</li>


					<li>
						<center>
							<a href="#" onclick="navegacao.showHide(' .listForm', ' .msg_sucesso');return false;" >Salvar</a>
						</center>

					</li>
				</ul>

				<div class="msg_sucesso hide">
					<p> Sucesso na ação.</p>
					<input type="reset" class="btNovo" onclick="navegacao.showHide('.msg_sucesso', '.listForm');" value="Novo">
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
						<label>Endereço:</label>
						<span>Rua alváro ferreira, 20</span>
					</li>

					<li>
						<label>Bairro:</label>
						<span>Pq novo sto amaro</span>
					</li>

					<li>
						<label>Cidade</label>
						<span>São Paulo</span>
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
						<label>RF:</label>
						<span>08002300</span>
					</li>

					<li>
						<label>Formação:</label>
						<span>Pedagoia</span>
					</li>

					<li>
						<label>Disciplinas:</label>
						<span>Geografia, História</span>
					</li>

					<li>
						<label>Data de nascimento:</label>
						<span>22/05/1988</span>
					</li>


					<li>
						<label>Turmas:</label>
						<span> 4ª C, 8ª A, 5ª D  </span>
					</li>

				</ul>



		</div><!--fim::boxExibir-->



	</div>

</div><!--FIM Tecnicas e ferramentas-->