$(function(){

	verificarCliqueMenu();

	function verificarCliqueMenu(){
		$('.modulos-wrapper a').click(function(){
			
			var href = $(this).attr('href');
			$.ajax({
				'beforeSend': function(){
					/*console.log("Estamos chamando o beforesend!");*/
				},
				'timeout': 10000,
				'url':href,
				'error':function(jqXHR,textStatus,errorThrown){
					if(jqXHR.statusText == 'Not Found'){
						console.log("Página não encontrada.");
					}
				},
				'success':function(data){
					//$('#container').html(data);
					$('.conteudo-principal').html('');
					$(data).appendTo('.conteudo-principal').fadeIn();
				}
			})
			return false;
		})
	}
});