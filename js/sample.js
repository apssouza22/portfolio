var core = core || {};
core.window = {};

core.window = function (win,title){

    //settings.title settings.winDOW
    classe = this;
    classe.teste ='teste';
    var settings={};

    settings.height = 600;
    //POSITION OF ITEM TASK BAR
    var leftItemBar;
    var leftItemTop;
    var windowLeft;
    var windowTop;

    this.showWindow= function()
    {
        settings.title   = title;
        settings.win     = '#' + win;
       // settings.name     = this.name;
        settings.idItemTask = 'task' + win;
        settings.width  = $(settings.win).width();
      
        if($('#'+settings.idItemTask).length == 0){
            animateWindow(settings.win);
            createItemTaskBar(settings.win)
            listen();
        }else{
            animateWindow(settings.win);
        }
    }

    //FN
    var setPositionWindow = function(){
        //armazena a largura e a altura da janela
        var winH = $(window).height();
        var winW = $(window).width();
        
        

        //centraliza na tela a janela popup
        windowTop = winH/2-settings.height/2;
        windowTop = (windowTop > 0 ) ? windowTop : 5;
        
        windowLeft = winW/2-settings.width/2;
    }
   
    //fn
    var createItemTaskBar = function()
    {
        var itemTaskBar = $('.modeloItemBar').clone();
        itemTaskBar.removeClass('modeloItemBar').attr('id',settings.idItemTask);
        itemTaskBar.find('.centerItem').text(settings.title);
        $('.taskBarListItems').append(itemTaskBar);

        leftItemTop  = $('#taskbar').position().top;
        leftItemBar = $('#'+settings.idItemTask).position().left;
    }

    //fn
    var animateWindow = function(){
        
        setPositionWindow();
       var params = {
            top:windowTop,    left:windowLeft,    opacity:1,
            height:settings.height,       width:settings.width
        }
        //DEFINE THE ZINDEX OF WINDOW
        $('.window').css('zIndex', 10);
        $(settings.win).css('zIndex', 20)

        $(settings.win).animate(params, 500, 'swing', function(){        })
    }

    var minimizaWindow = function(){

            $(settings.win).addClass('min');
            var params = {
                top:leftItemTop,left:leftItemBar,
                opacity:0,height:0, width:0
            }

            $(settings.win).animate(params, 500, 'swing', function(){            })
    }

    //fn
    function listen()
    {
        //LISTEN BUTTON MINIMIZA
        $('.min',settings.win).click(function(e){
           e.preventDefault();
           minimizaWindow();
        })
        
        //LISTEN BUTTON CLOSE
        $('.close',settings.win).click(function(e){
             e.preventDefault();
            $(settings.win).css({'opacity':0,top:leftItemTop,left:leftItemBar,height:0});
            $('#'+settings.idItemTask).remove();

        })

        //LISTEN ICON TASK BAR
        $('.centerItem','#'+settings.idItemTask).live('click',function(){
            if($(settings.win).hasClass('min')){
               $(settings.win).removeClass('min')
               animateWindow();
            }else{
               //minimizaWindow();
            }
        })

        //DEFINE THE ZINDEX OF WINDOW
        $('.window').click(function(e){
            $('.window').css('zIndex', 10);
            $(this).css('zIndex', 20)
        })
    }


}

