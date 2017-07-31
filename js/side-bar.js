$(function(){
	$(window).resize(function(){
		 var tamanho = $(window)[0].innerWidth;
		 var tam_sidebar = $('.side-bar').width();
		 var fadeModulo_1 = $('.administrador').css('display');
		 var fadeModulo_2 = $('.cliente').css('display');
		 //verifico se o tamanho da tela é maior ou igual a 905px e a side bar ja esteja no tamanho mobile
		 if(tamanho >= 950 && tam_sidebar <= 60 )
		{
			$('.side-bar').css('width', '20%');
			$('.modulos-wrapper .modulos-single p').css('display','inline-block');
			$('.corpo-home').css('width','80%');
		}else if(tamanho < 950 && (fadeModulo_1 == 'none' && fadeModulo_2 == 'none')){
			$('.side-bar').css('width', '60px');
			$('.modulos-wrapper .modulos-single p').css('display','none');
			$('.corpo-home').css('width','calc(100% - 60px)');
		}else{
			$('.side-bar').css('width','200px');
			$('.modulos-wrapper .modulos-single p').css('display','inline-block');
			$('.corpo-home').css('width','calc(100% - 200px)');
		}
		});

	$('.modulos-single').click(function(){
		var nome_modulo = $(this).attr('id');
		var tam_sidebar = $('.side-bar').width();
		var tamanho = $(window)[0].innerWidth;
		if(tamanho >= 950){
			
		}else{
			$('.side-bar').css('width','200px');
			$('.modulos-wrapper .modulos-single p').css('display','inline-block');
			$('.corpo-home').css('width','calc(100% - 200px)');
		}
		$('.'+nome_modulo).slideToggle(600,function(){

			if(tamanho < 950){

			if($('.modulos-wrapper ul').is(':visible')){
				
			}else{
				$('.side-bar').css('width','60px');
				$('.modulos-wrapper .modulos-single p').css('display','none');
				$('.corpo-home').css('width','calc(100% - 60px)');
			}

		}
		});

	});

	// menu-perfil

	$('.perfil-wrapper').click(function(){
		$('.menu-perfil').slideToggle();
	});

});