<div id="curriculo" class="window">
                <div class="windowHeader">
                    <div class="windowTitle">Gerenciar turmas</div>
                    <div class="windowButtons"><a href="" class="btVoltar" onclick="navegacao.voltar();return false;" ></a><a href="" class="min"></a><a href="" class="close"></a></div>
                </div>
                <div class="windowContent">

					<div class="listagem index">


						<div class="boxLista">
							<table width="100%"  cellspacing="0" cellpadding="0" border="0" >

								<thead>
									<tr>
										<th width="30%">Turma</th>
										<th width="30%">PerÃ­odo</th>
										<th width="30%">Quantidade de Alunos</th>
										<th width="10%">AÃ§Ãµes</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>4Âª SÃ©rie C</td>
										<td>Matutino</td>
										<td>45</td>
										<td>
											<a href="#" onclick="navegacao.showHide('.listagem','.boxExibir'); return false;">exibir</a>
										</td>

									</tr>
									<tr>
										<td>8Âª SÃ©rie A</td>
										<td>Vespertino</td>
										<td>41</td>
										<td>
											<a href="#" onclick="navegacao.showHide('.listagem','.boxExibir'); return false;">exibir</a>
										</td>

									</tr>
									<tr>
										<td>1Âª SÃ©rie D - Ensino MÃ©dio</td>
										<td>Noturno</td>
										<td>35</td>
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
									<label>EndereÃ§o:</label>
									<input type="text" name="endereÃ§o" class="input">
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
									<label>FormaÃ§Ã£o:</label>
									<input type="text" name="FormaÃ§Ã£o:" class="input">
								</li>

								<li>
									<label>Disciplinas:</label>
									<input type="checkbox" name="portugues"><span>PortuguÃªs</span>
									<input type="checkbox" name="matematica"><span>MatemÃ¡tica</span>
									<input type="checkbox" name="ciencias"><span>CiÃªncias</span>
									<input type="checkbox" name="geografia"><span>Geografia</span>
									<input type="checkbox" name="historia"><span>HistÃ³ria</span>
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
								<p> Sucesso na aÃ§Ã£o.</p>
								<input type="reset" class="btNovo" onclick="navegacao.showHide('.msg_sucesso', '.listForm');" value="Novo">
							</div>

						</form>
					</div><!--fim::boxCadastro-->

					<div class="boxExibir hidden">

							<ul class="listForm">
								<li>
									<label>Turma:</label>
									<span>5ª Série C - Ensino fundamental</span>
								</li>

								<li>
									<label>Periodo atutino:</label>
									<span>Matutino</span>
								</li>

								<li>
									<label>Qtd Alunos:</label>
									<span>43</span>
								</li>

								<li>
									<label>Professores:</label>
									<span class="bloco">
										Alexsandro Pereira - Matemática<br>
										João Paulo - Português<br>
										Marcia Almeida - Geografia<br>
										Rodrigo Alberto - História
									</span>
								</li>

								<li>
									<label><a href="#alunos"  rel="alunos"  title="Alunos"  class="icone" >Alunos</a></label>
								</li>

								
							</ul>



					</div><!--fim::boxExibir-->



                </div>
            </div><!--FIM CURRICULO-->


<div id="alunos" class="window">
                <div class="windowHeader">
                    <div class="windowTitle">Gerenciar turmas</div>
                    <div class="windowButtons"><a href="" class="btVoltar" onclick="navegacao.voltar();return false;" ></a><a href="" class="min"></a><a href="" class="close"></a></div>
                </div>
                <div class="windowContent">

					<div class="listagem index">


						<div class="boxLista">
							<table width="100%"  cellspacing="0" cellpadding="0" border="0" >

								<thead>
									<tr>
										<th width="50%">Nome</th>
										<th width="10%">SÃ©rie</th>
										<th width="20%">Ra</th>
										<th width="20%">AÃ§Ãµes</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Alexsandro Pereira da silva souza</td>
										<td>4Âª</td>
										<td>080023037</td>
										<td>
											<a href="#" onclick="navegacao.showHide('.listagem','.boxExibir'); return false;">exibir</a>
										</td>

									</tr>
									<tr>
										<td>Alex Pereira da silva </td>
										<td>4Âª</td>
										<td>080023037</td>
										<td>
											<a href="" onclick="navegacao.showHide('.listagem','.boxExibir'); return false;">exibir</a>
										</td>

									</tr>
									<tr>
										<td>Alexsandro Pereira</td>
										<td>2Âª</td>
										<td>080023037</td>
										<td>
											<a href="" onclick="navegacao.showHide('.listagem','.boxExibir'); return false;">exibir</a>
										</td>

									</tr>
								</tbody>
							</table>

						</div><!--FIM:::box lista -->

					</div><!--FIM:::Listagem -->
					<div class="boxExibir hidden">

				<ul class="listForm">
					<li>
						<label>Nome:</label>
						<span>Alexsandro Pereira</span>
					</li>

					<li>
						<label><a href="" onclick="navegacao.showHide('', '.notas');return false;" >Notas</a></label>
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
										<td>Geografia</td>
										<td><input type="text" name="nota1" class="input_2" value="5"></td>
										<td><input type="text" name="nota1"  class="input_2" value="10"></td>
										<td><input type="text" name="nota1" class="input_2" value=""></td>
										<td><input type="text" name="nota1" class="input_2" value=""></td>
									</tr>

								</tbody>
							</table>

						</div>
					</li>

					<li>
						<label><a href="" onclick="navegacao.showHide('', '.faltas');return false;" >Faltas</a></label>
						<div class="faltas hidden">
							<table>
								<thead>
									<tr>
										<th>Mês</th>
										<th>Geografia</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Janeiro</td>
										<td><input type="text" name="nota1" class="input_2" value="5"></td>
									</tr>
									<tr>
										<td>Fevereiro</td>
										<td><input type="text" name="nota1" class="input_2" value="5"></td>
									</tr>
									<tr>
										<td>Março</td>
										<td><input type="text" name="nota1" class="input_2" value="5"></td>
									</tr>
									<tr>
										<td>Abril</td>
										<td><input type="text" name="nota1" class="input_2" value="5"></td>
									</tr>
									<tr>
										<td>Maio</td>
										<td><input type="text" name="nota1" class="input_2" value="5"></td>
									</tr>
									<tr>
										<td>Junho</td>
										<td><input type="text" name="nota1" class="input_2" value="5"></td>
									</tr>
									<tr>
										<td>Julho</td>
										<td><input type="text" name="nota1" class="input_2" value="5"></td>
									</tr>
									<tr>
										<td>Agosto</td>
										<td><input type="text" name="nota1" class="input_2" value="5"></td>
									</tr>
									<tr>
										<td>Setembro</td>
										<td><input type="text" name="nota1" class="input_2" value="5"></td>
									</tr>
									<tr>
										<td>Outubro</td>
										<td><input type="text" name="nota1" class="input_2" value=""></td>
									</tr>
									<tr>
										<td>Novembro</td>
										<td><input type="text" name="nota1" class="input_2" value=""></td>
									</tr>
									<tr>
										<td>Dezembro</td>
										<td><input type="text" name="nota1" class="input_2" value=""></td>
									</tr>
									

								</tbody>
							</table>

						</div>
					</li>

				</ul>



		</div><!--fim::boxExibir-->


	</div>
</div><!--FIM CURRICULO-->