$(function(){
  windowheight();
	$('.selectpicker').selectpicker();
	$('.navicon').click(function(){
		$('.side-nav').show();
		$('.side-nav').css({'width':'225px','visibility':'visible'});
		if($('.side-nav').css('display')=='block'){
        	$('html').addClass('sidePanel');
		}
    });
	$('.side-nav .closebtn,.overlay').click(function(){
        $('html').removeClass('sidePanel');
		$('.side-nav').css({'width':'0','visibility':'hidden'});
    });
	
});
	
function windowheight(){
	$('.loginwrap').css({'height':$(window).height()});
	$(window).resize(function(){
		$('.loginwrap').css({'height':$(window).height()});
	});
}