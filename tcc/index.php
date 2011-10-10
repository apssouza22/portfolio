<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Alexsandro Pereira</title>
        <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="css.css" />

    </head>
    <body>
        
        <div id="content">

	    <div style="color: #5085c7;left: 401px; position: absolute;">
		
	    </div>


		
            
            <div class="boxShortcuts">
                <a href="#sobremim" rel="sobremim" title="Gerenciar alunos" class="icone">
                    <img src="img/1317662347_graduated.png">
                    <div>Alunos</div>
                </a>
                <a href="#tecnicas" rel="tecnicas" title="Gerenciar professores" class="icone">
                    <img src="img/1317662324_teacher.png">
                    <div>Professores</div>
                </a>
            
                <a href="#curriculo" rel="curriculo" title="Gerenciar turmas" class="icone">
                    <img src="img/ico_curriculum.png">
                    <div>Turmas</div>
                </a>

                <a href="#material" rel="material" title="Gerenciar Materiais" class="icone">
                    <img src="img/1318119032_bookcase.png">
                    <div>Materiais</div>
                </a>
				
     
            </div><!-- FIM SHORTCUTS-->
			
            
            <?php			require_once 'aluno.php'; ?>

            <?php			require_once 'material.php'; ?>


			<div id="declaracao" class="window">
				<div class="windowHeader">
					<div class="windowTitle">Declara��o</div>
					<div class="windowButtons">
						<a href="" class="min"></a><a href="" class="close"></a></div>
				</div>
				<div class="windowContent">
					<h2>Declara��o</h2>
					<p>Declaramos para os devidos fins que ALEXSANDRO PEREIRA DA SILVA SOUZA, portador(a) do R.G. n� 366859092, � aluno(a) regularmente matriculado(a)  </p>

					<p>Por ser express�o da verdade, firmamos a presente. </p>

					<p>S�o Paulo, 09 de setembro de 2011.  </p>

				</div>
			</div><!-- FIM Declara??o-->


			<div id="historico" class="window">
				<div class="windowHeader">
					<div class="windowTitle">Hist�rico</div>
					<div class="windowButtons">
						<a href="" class="min"></a><a href="" class="close"></a></div>
				</div>
				<div class="windowContent">
					<h2>Hist�rico</h2>
					<p>Declaramos para os devidos fins que ALEXSANDRO PEREIRA DA SILVA SOUZA, portador(a) do R.G. n� 366859092, � aluno(a) regularmente matriculado(a) </p>

					<p>Por ser expresso da verdade, firmamos a presente. </p>

					<p>S�o Paulo, 09 de setembro de 2011.  </p>

                                        <a href="#" class="botao">Imprimir</a>

				</div>
			</div><!-- FIM Historico-->



			<div id="ocorrencias" class="window">
                <div class="windowHeader">
                    <div class="windowTitle">Ocorr&ecirc;ncias do Alexsandro Pereira</div>
                    <div class="windowButtons"><a href="" class="btVoltar" onClick="navegacao.voltar(this);return false;" ></a><a href="" class="min"></a><a href="" class="close"></a></div>
                </div>
                <div class="windowContent">
					<div class="listOcorrencias index">
						<div class="itemOcorrencia">
							<h3>Briga com o colega</h3>
							<p>andou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervalo</p>
						</div>

						<div class="itemOcorrencia">
							<h3>Cabulando aula</h3>
							<p>andou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervalo</p>
						</div>

						<div class="itemOcorrencia">
							<a href="" onClick="navegacao.showHide('.listOcorrencias', '.boxCadastro',this);return false;" class="btNovo">Novo</a>
						</div>
					</div><!--FIM::listOcorrencias-->

					<div class="boxCadastro hidden">
						<form class="formCadastro">
							<ul class="listForm">
								<li>
									<label>titulo:</label>
									<input type="text" name="titulo" class="input">
								</li>

								<li>
									<label>Ocorr&ecirc;ncia:</label>
									<textarea  name="ocorrencia" class="input"></textarea>
								</li>

								<li>
									<center>
										<a href="#" onClick="navegacao.showHide(' .listForm', ' .msg_sucesso',this);return false;" class="botao" >Salvar</a>
									</center>

								</li>
							</ul>

							<div class="msg_sucesso hide">
								<p> Sucesso na a&ccedil;&atilde;o.</p>
								<input type="reset" class="btNovo" onClick="navegacao.showHide('.msg_sucesso', '.listForm',this);" value="Novo">
							</div>

						</form>
					</div><!--fim::boxCadastro-->

                </div>

            </div><!--FIM Ocorrencias-->
			
			<?php require_once 'professor.php'; ?>
            

            <div id="portifolio" class="window">
                <div class="windowHeader">
                    <div class="windowTitle">Portfolio</div>
                    <div class="windowButtons"><a href="" class="min"></a><a href="" class="close"></a></div>
                </div>
                <div class="windowContent">
                   

                </div>
            </div><!--FIM PORTIFOLIO-->

			<?php			require_once 'turmas.php'; ?>

            

        </div><!-- FIM - CONTENT PRINCIPAL -->


        <div class="startWindow hidden">
            <div class="visitante">Alex</div>
                <ul class="listPaginas">
                    <li><a href="#sobremim" rel="sobremim" title="Gerenciar alunos" class="icone">Alunos</a></li>
                    <li><a href="#tecnicas" class="icone" rel="tecnicas" title="Gerenciar professores">Professores</a></li>
                    <li><a href="#curriculo" rel="curriculo" title="Gerenciar turmas" class="icone">Turmas</a></li>
                    <li><a href="#material" rel="material" title="Gerenciar Materiais" class="icone">Materiais</a></li>
                </ul>

                <ul class="listSocial">
                    <li><a href="http://twitter.com/#!/apssouza22" target="_blank">Alex</a></li>
                    <li><a href="" target="_blank">Adriana</a></li>
                    <li><a href="" target="_blank">Etiene</a></li>
                    <li><a href="" target="_blank">Jos�</a></li>
                    <li><a href="" target="_blank">Tatiane</a></li>
                </ul>
        </div>
        <!-- FIM - START WINDOW-->


        <div id="taskbar">
            <a href="" class="btnStart"><em class="hidden">start</em></a><span class="bg_line"></span>
            <ul class="taskBarListItems">
                
                <li class="itemBar modeloItemBar" >
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="leftItem"></td>
                            <td class="centerItem">portifolio</td>
                            <td class="rightItem"></td>
                        </tr>
                    </table>
                </li>
                
            </ul>
        </div>
        <!-- FIM - BARRA DE TAREFA-->

        <script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.8.custom.min.js"></script>
        <script type="text/javascript" src="js/sample.js"></script>
     
        <script type="text/javascript">
            $(function() {

               $('#content').height($(window).height());

	       $(".window").draggable({
                   handle: '.windowHeader',
                    revert:false, //volta pro lugar de origem qdo solta
				//axis: 'x', //eixo
				//containment: 'parent',//so se movimenta dentro de seu pai
				//grid: [80],//pula a cada 120px, podemos por nos dois eixos [120,30]
				stop: function(event, ui) { //trigger qdo para
					//$(ui.draggable).parent().append($(this).position().left);//pegando o lef
				},
				drag: function(event, ui) { //trigger enquanto move
					//$(this).parent().append("arrastou");
				}

                });

            });

            $('.icone').click(function(e){
                    e.preventDefault();
                    var taskBar = new core.window($(this).attr('rel'),$(this).attr('title'));
                    taskBar.showWindow();
            })

            $('.btnStart').click(function(e){
                e.preventDefault();
                $('.startWindow').toggle();
            })

            $('#content,.taskBarListItems').click(function(){
                $('.startWindow').hide();
            });

            

             //MOUSOVER  ITEM TASK
           $('.itemBar').live('mouseout mouseover',function(e){
              if(e.type =='mouseout')
                  $(this).css('opacity', 1);
              else
                  $(this).css('opacity', 0.5);
            })


            //PORTFOLIO

            var portifolio = function(){
                $('.portifolioItem').bind('mouseout mouseover',function(e){
                      if(e.type =='mouseout'){
                            $(this).css('background','none').children('.desc').hide();
                      }
                      else{
                          $(this).css('background','#e6effb').children('.desc').show();
                      }
                })
            };
            new portifolio();



        </script>
    </body>
</html>
