<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Alexsandro Pereira</title>
        <link rel="stylesheet" type="text/css" href="css.css" />

    </head>
    <body>
        
        <div id="content">

	    <div style="color: #5085c7;left: 401px; position: absolute;">
		<h4>Em desenvolvimento...</h4>
	    </div>


			<div class="contato">
				<ul>
					<li>
						Telefone : 7618 - 4253 
					</li>
					<li>
						Email : alexsandro.p.souza@gmail.com
					</li>
					<li>
						MSN : alexsandro.p.souza@hotmail.com
					</li>
					<li>
						Gtalk : apssouza22@gmail.com
					</li>
					<li>
						Skype : apssouza22
					</li>
				</ul>
			</div>
            
            <div class="boxShortcuts">
                <a href="#sobremim" rel="sobremim" title="Gêrenciar alunos" class="icone">
                    <img src="img/ico_sobremim.png">
                    <div>Alunos</div>
                </a>
                <a href="#tecnicas" rel="tecnicas" title="Gêrenciar professores" class="icone">
                    <img src="img/ico_portfolio.png">
                    <div>Professores</div>
                </a>
            
                <a href="#curriculo" rel="curriculo" title="Gerenciar turmas" class="icone">
                    <img src="img/ico_curriculum.png">
                    <div>Turmas</div>
                </a>
				
     
            </div><!-- FIM SHORTCUTS-->
			
            
            <?php			require_once 'aluno.php'; ?>


			<div id="declaracao" class="window">
				<div class="windowHeader">
					<div class="windowTitle">Declaração</div>
					<div class="windowButtons">
						<a href="" class="min"></a><a href="" class="close"></a></div>
				</div>
				<div class="windowContent">
					<h2>Declaração</h2>
					<p>Declaramos para os devidos fins que ALEXSANDRO PEREIRA DA SILVA SOUZA, portador(a) do R.G. nº 366859092, é aluno(a) regularmente matriculado(a)  </p>

					<p>Por ser expressção da verdade, firmamos a presente. </p>

					<p>Sço Paulo, 09 de setembro de 2011.  </p>

				</div>
			</div><!-- FIM Declara??o-->


			<div id="historico" class="window">
				<div class="windowHeader">
					<div class="windowTitle">Histçrico</div>
					<div class="windowButtons">
						<a href="" class="min"></a><a href="" class="close"></a></div>
				</div>
				<div class="windowContent">
					<h2>Histórico</h2>
					<p>Declaramos para os devidos fins que ALEXSANDRO PEREIRA DA SILVA SOUZA, portador(a) do R.G. nº 366859092, é aluno(a) regularmente matriculado(a) </p>

					<p>Por ser expresso da verdade, firmamos a presente. </p>

					<p>Sço Paulo, 09 de setembro de 2011.  </p>

				</div>
			</div><!-- FIM Historico-->



			<div id="ocorrencias" class="window">
                <div class="windowHeader">
                    <div class="windowTitle">Ocorr&ecirc;ncias do Alexsandro Pereira</div>
                    <div class="windowButtons"><a href="" class="btVoltar" onClick="navegacao.voltar();return false;" ></a><a href="" class="min"></a><a href="" class="close"></a></div>
                </div>
                <div class="windowContent">
					<div class="listOcorrencias">
						<div class="itemOcorrencia">
							<h3>Briga com o colega</h3>
							<p>andou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervalo</p>
						</div>

						<div class="itemOcorrencia">
							<h3>Cabulando aula</h3>
							<p>andou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervaloandou brigando com os coleguinhas na hora do intervalo</p>
						</div>

						<div class="itemOcorrencia">
							<a href="" onClick="navegacao.showHide('.listOcorrencias', '.boxCadastro');return false;" class="btNovo">Novo</a>
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
										<a href="#" onClick="navegacao.showHide(' .listForm', ' .msg_sucesso');return false;" >Salvar</a>
									</center>

								</li>
							</ul>

							<div class="msg_sucesso hide">
								<p> Sucesso na a&ccedil;&atilde;o.</p>
								<input type="reset" class="btNovo" onClick="navegacao.showHide('.msg_sucesso', '.listForm');" value="Novo">
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
                    <li><a href="#sobremim" rel="sobremim" title="Sobre mim" class="icone">Sobre Mim</a></li>
                    <li><a href="#portfolio" class="icone" rel="portifolio" title="Meus trabalhos">Portfolio</a></li>
                    <li><a href="#curriculo" rel="curriculo" title="Conhecimentos e experiências " class="icone">Curr&iacute;culo</a></li>
					<li><a href="#tecnicas" rel="tecnicas" title="Técnicas e ferramentas de desenvolvimento" class="icone">T&eacute;cnicas e Ferramentas</a></li>
                    <li><a href="blog/" rel="blog" title="Compartilhando conhecimento" class="">Blog</a></li>
                </ul>

                <ul class="listSocial">
                    <li><a href="http://twitter.com/#!/apssouza22" target="_blank">Twitter</a></li>
                    <li><a href="http://www.facebook.com/apssouza" target="_blank">Facebook</a></li>
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
