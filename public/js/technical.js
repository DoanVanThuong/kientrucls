$(".techn").hide();
	$(".btn-less").hide();

$(".btn-more").click(function(){
$(".btn-more").hide();
	
$(".techn").fadeIn();
	$(".btn-less").show();


	// $(".techn").load("ajax.html .techn-content").show('slow');

});

$(".btn-less").click(function(){
$(".techn").fadeOut();
	$(".btn-more").show();

	
	// $(".techn").load("ajax.html .techn-content").show('slow');

});

