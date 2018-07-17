$('#ticker2').html($('#ticker1').html());

var temp=0,intervalId=0;
$('#ticker1 li').each(function(){
  var offset=$(this).offset();
  var offsetLeft=offset.left;
  $(this).css({'left':offsetLeft+temp});
  temp=$(this).width()+temp+10;
});
$('#ticker1').css({'width':temp+40, 'margin-left':'20px'});
temp=0;


$('#ticker2 li').each(function(){
  var offset=$(this).offset();
  var offsetLeft=offset.left;
  $(this).css({'left':offsetLeft+temp});
  temp=$(this).width()+temp+10;
});
$('#ticker2').css({'width':temp+40,'margin-left':temp+40});


function abc(a,b) {  
    
    var marginLefta=(parseInt($("#"+a).css('marginLeft')));
    var marginLeftb=(parseInt($("#"+b).css('marginLeft')));
    if((-marginLefta<=$("#"+a).width())&&(-marginLefta<=$("#"+a).width())){
        $("#"+a).css({'margin-left':(marginLefta-1)+'px'});
    } else {
        $("#"+a).css({'margin-left':temp});
    }
    if((-marginLeftb<=$("#"+b).width())){
        $("#"+b).css({'margin-left':(marginLeftb-1)+'px'});
    } else {
        $("#"+b).css({'margin-left':temp});
    }
} 

     function start() { intervalId = window.setInterval(function() { abc('ticker1','ticker2'); }, 10) }

     $(function(){
          $('#news_ticker').mouseenter(function() { window.clearInterval(intervalId); });
    $('#news_ticker').mouseleave(function() { start(); })
          start();
     });
