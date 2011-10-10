<div id="material" class="window">
	<div class="windowHeader">
		<div class="windowTitle">Gerenciar Materiais</div>
		<div class="windowButtons">
			<a href="" class="btVoltar" onclick="navegacao.voltar(this);return false;" ></a><a href="" class="min"></a><a href="" class="close"></a></div>
	</div>
	<div class="windowContent">

		<div class="listagem index">

			<div class="boxFiltro">

				<input name="pesquisa" type="text">
				<input type="button"  class="botao" name="enviar" value="Pesquisar">
				<a href="#" class="btNovo" onclick="navegacao.showHide('.listagem','.boxCadastro',this); return false;"  title="Novo Aluno">Novo</a>
				<a href="#" class="btNovo" onclick="navegacao.showHide('.listagem','.boxSolicitacao',this); return false;"  title="Solicitar">Solicitar</a>
				
			</div>

			<div class="boxLista">
				<table width="100%"  cellspacing="0" cellpadding="0" border="0" >

					<thead>
						<tr>
							<th width="50%">Nome</th>
							<th width="50%">Quantidade</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Caderno</td>
							<td>20</td>

						</tr>
						
						<tr>
							<td>Lápis</td>
							<td>30</td>

						</tr>

						<tr>
							<td>Caneta</td>
							<td>25</td>

						</tr>

						<tr>
							<td>Livro de português 8</td>
							<td>55</td>

						</tr>

					</tbody>
				</table>

			</div><!--FIM:::box lista -->

		</div><!--FIM:::Listagem -->

		<div class="boxCadastro hidden">
			<form class="formCadastro">
				<ul class="listForm">
					<li>
						<label>Material:</label>
						<input type="text" name="material" class="input">
					</li>

					<li>
						<label>Descrição:</label>
						<input type="text" name="desc" class="input">
					</li>

					<li>
						<label>Quatidade:</label>
						<input type="text" name="qtd" class="input">
					</li>

					

					<li>
						<center>
							<a href="#" onclick="navegacao.showHide(' .listForm', ' .msg_sucesso',this);return false;" class="botao" >Salvar</a>
						</center>

					</li>
				</ul>

				<div class="msg_sucesso hide">
					<p> Sucesso na a&ccedil;&atilde;o.</p>
					<input type="reset" class="btNovo" onclick="navegacao.showHide('.msg_sucesso', '.listForm',this);" value="Novo">
				</div>

			</form>
		</div><!--fim::boxCadastro-->


		<div class="boxSolicitacao hidden">
			<form class="formSolicitacao">
				<ul class="listForm">

					<li>
						<label>Professor:</label>
						<input type="text" name="professor" class="input">
					</li>

					<li>
						<label>Material:</label>
						<select name="material" class="input">
							<option>Caderno</option>
							<option>Lápis</option>
							<option>Caneta</option>
							<option>Livro de portugês</option>
						</select>
					</li>

					<li>
						<label>Destino:</label>
						<input type="text" name="destino" class="input">
					</li>

					<li>
						<label>Quantidade:</label>
						<input type="text" name="qtd" class="input">
					</li>

					<li>
						<center>
							<a href="#" onclick="navegacao.showHide(' .listForm', ' .msg_sucesso',this);return false;" class="botao" >Salvar</a>
						</center>

					</li>
				</ul>

				<div class="msg_sucesso hide">
					<p> Sucesso na a&ccedil;&atilde;o.</p>
					<input type="reset" class="btNovo" onclick="navegacao.showHide('.msg_sucesso', '.listForm',this);" value="Novo">
				</div>

			</form>
		</div><!--fim::boxCadastro-->


		
	</div>

</div><!--FIM Tecnicas e ferramentas-->