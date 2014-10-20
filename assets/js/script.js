$(document).ready(function(){
	$('.songlist table').tablesorter();
	$('.article_list div:first-of-type').append("Prólogo〜CSM099");
	$('.article_list div:nth-of-type(2)').append("CSM100〜CSM199");
	$('.article_list div:nth-of-type(3)').append("CSM200〜CSM299");
	$('.article_list div:nth-of-type(4)').append("CSM300〜CSM399");
	$('.article_list div:nth-of-type(5)').append("CSM400〜CSM427");

	$('.article_list div').click(function(){
		$(this).next().slideToggle();
		$("i", this).toggleClass('fa-minus');
		$("i", this).toggleClass('fa-plus');
	});

});

$(window).load(function(){
	$(".cdlist>section").heightLine();	
})