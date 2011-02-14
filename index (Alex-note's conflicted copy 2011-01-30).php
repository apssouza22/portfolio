<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Alexsandro Pereira</title>
        <link rel="stylesheet" type="text/css" href="css.css" />
    </head>
    <body>
        
        <div id="content">
            
            <div class="boxShortcuts">
                <a href="#sobremim" rel="sobremim" title="Sobre mim" class="icone">
                    <img src="img/ico_teste.png">
                    <div>Sobre Mim</div>
                </a>
                <a href="#portifolio" rel="portifolio" title="Meus trabalhos" class="icone">
                    <img src="img/ico_teste.png">
                    <div>Portfolio</div>
                </a>
            
                <a href="#curriculo" rel="curriculo" title="Conhecimentos e experiências " class="icone">
                    <img src="img/ico_teste.png">
                    <div>Currículo</div>
                </a>
     
                <a href="#videoaula" class="icone" rel="videoaula" title="Video aulas">
                    <img src="img/ico_teste.png">
                    <div>Video aulas</div>
                </a>
            </div><!-- FIM SHORTCUTS-->

            <div id="sobremim" class="window">
                <div class="windowHeader">
                    <div class="windowTitle">Sobre mim</div>
                    <div class="windowButtons"><a href="" class="min"></a><a href="" class="close"></a></div>
                </div>
                <div class="windowContent">
                    <h2>Alexsandro Pereira<br>
                        <span>Paulista, 22 anos</span>
                    </h2>
                    <p>
                        Sou Desenvolvedor web desde 2009, e  atualmente desenvolvo em PHP, Zend, Smarty, Javascript, Jquery, CSS e AS3. Sou apreciador do desenvolvimento Orientado a objeto, inclusive em Javascript e na web desenvolvo sempre seguindo o padrão MVC.<br><br>
                        Atualmente estudo Java, Android e Linux.
                    </p>
                </div>
            </div><!--FIM SOBRE MIM-->

            <div id="portifolio" class="window">
                <div class="windowHeader">
                    <div class="windowTitle">title</div>
                    <div class="windowButtons"><a href="" class="min"></a><a href="" class="close"></a></div>
                </div>
                <div class="windowContent">
                    portifolio
                </div>
            </div><!--FIM PORTIFOLIO-->

            <div id="curriculo" class="window">
                <div class="windowHeader">
                    <div class="windowTitle">Currículo</div>
                    <div class="windowButtons"><a href="" class="min"></a><a href="" class="close"></a></div>
                </div>
                <div class="windowContent">
                    <h2>Currículo Alexsandro Pereira</h2>
                    <h3>Formação</h3>
                    <div class="curriculoItem">
                        Ensino Superior (cursando)<br>
                        4º Ano – Sistema de Informação<br>
                        Período:  Noturno<br>
                        Universidade Bandeirante<br>
                    </div>

                    <h3>Especialidades</h3>
                    <div class="curriculoItem">
                        PHP<br>
                        Jquery<br>
                        CSS<br>
                        MySql
                    </div>

                    <h3>Cursos Complementares</h3>
                    <div class="curriculoItem">
                        PHP orientado a objeto – Ajaxme treinamentos <br>
                        Zend Framework - School of Net<br>
                        Jquery – Ajaxme treinamentos <br>
                        Actionscript 3 – Imedia Brasil<br>
                        Mysql Avançado – T2ti cursos<br>
                        SEO - Ajaxme treinamentos<br>
                        Java  (cursando) – T2ti cursos<br>
                        Linux (cursando) - Linux Brasil
                    </div>

                    <h3>Conhecimentos básicos adicionais</h3>
                    <div class="curriculoItem">
                        Photoshop, Flash, Android, Linux, ExtJS e JSP.
                    </div>

                    <h3>Experiência profissional </h3>
                    <div class="curriculoItem">

                        <em>Empresa: Agencia Salve</em><br>
                        Cargo: Desenvolvedor Web Jr<br>
                        Período: Emprego atual<br>
                        Principais atividades:<br>
                        Desenvolvimento de sites com área administrativa;<br>
                        Desenvolvimento de sistemas web;<br>
                        Desenvolvimento de intranet e extranet;<br>
                        Integrações com outras tecnologias(Java script, Actionscript, PHP e XML).<br>
                        <em>Empresa: Plank</em><br>
                        Cargo:Estágiario<br>
                        <em>Empresa:Wireless Com Solution</em><br>
                        Cargo:Técnico de Telecom
                    </div>

                </div>
            </div><!--FIM CURRICULO-->

            <div id="videoaula" class="window" >
                <div class="windowHeader">
                    <div class="windowTitle">title</div>
                    <div class="windowButtons"><a href="" class="min"></a><a href="" class="close"></a></div>
                </div>
                <div class="windowContent">
                    video aulas
                </div>
            </div><!--FIM VIDEO AULAS-->

        </div><!-- FIM - CONTENT PRINCIPAL -->


        <div class="startWindow hidden">
            <div class="visitante">Alex</div>
                <ul class="listPaginas">
                    <li><a href="" class="icone" rel="portifolio" title="Meus trabalhos">Portifólio</a>
                        <ul>
                            <li>Front-End</li>
                            <li>Back-End</li>
                        </ul>
                    </li>
                    <li>Curriculo</li>
                    <li>Video Aulas
                        <ul>
                            <li>Javascript</li>
                            <li>PHP</li>
                        </ul>
                    </li>
                </ul>

                <ul class="listSocial">
                    <li>Twitter</li>
                    <li>Facebook</li>
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
                    var taskBar = new core.window();
                    taskBar.title = $(this).attr('title');
                    taskBar.win = $(this).attr('rel');
                    taskBar.showWindow();
            })

            $('.btnStart').click(function(e){
                e.preventDefault();
                $('.startWindow').toggle();
            })

            $('#content,.taskBarListItems').click(function(){
                $('.startWindow').hide();
            });

             $('.itemBar').live("contextmenu",function(e){
                alert('fechar')
                e.preventDefault();
             });

           $('.itemBar').live('mouseout mouseover',function(e){
              if(e.type =='mouseout')
                  $(this).css('opacity', 1);
              else
                  $(this).css('opacity', 0.5);
            })

        </script>
    </body>
</html>
