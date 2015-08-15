$(window).scroll(function(){

	var wScroll = $(this).scrollTop();
	var gOpacity = 1; //Grabber-Background opacity

	
	/*if(wScroll / 10 < 30){ //Om wScroll är högre än bildens 40% som används för att bilden ska scrolla i y led.
		$("#Grabber-Background").css("background-position","0% " + (wScroll / 10) + "%");
	}

	if(wScroll / 8 > 30){//Om redan e högre så var där.
		$("#Grabber-Background").css("background-position","0% " + 23 + "%");
	}
	*/
	
	gOpacity = gOpacity - wScroll/720; //Gör bilden svart (Opacity) medans vi scrollar ner.
	$("#Grabber-Background").css("opacity", gOpacity);
	
	
	if(wScroll > $(".Index-About ul").offset().top - ($(window).height() / 1.5)){
		console.log("ITS WORKING");
		$("#skill-Kommunikation").animate({width: "90%"});
		$("#skill-Stresshantering").delay(100).animate({width: "70%"});
		$("#skill-Inlarningsformaga").delay(200).animate({width: "98%"});
		$("#skill-Planering").delay(300).animate({width: "60%"});
		$("#skill-Design").delay(400).animate({width: "80%"});
		$("#skill-Programmering").delay(500).animate({width: "94%"});
	}
});


$(document).ready(function(){
	$(".Portfolio-Overlay").mouseover(function(){
		console.log("WORK");
		$(this).stop().animate({opacity: "1"}, "fast");
	});
	$(".Portfolio-Overlay").mouseout(function(){
		$(".Portfolio-Overlay").stop().animate({opacity: "0"}, "slow");
	});
	
	$("#About-Link").click(function(){
		$('html, body').animate({
			scrollTop: $("#About-Top").offset().top
		}, 500);
	 return false;
	});
	
	$(".btnKontakt-white").click(function(){
		$('html, body').animate({
			scrollTop: $("#Kontakt-Top").offset().top
		}, 2000);
	 return false;
	});
	
	$("#Kontakt-Link").click(function(){
		$('html, body').animate({
			scrollTop: $("#Kontakt-Top").offset().top
		}, 500);
	 return false;
	});
});
