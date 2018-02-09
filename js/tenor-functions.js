// This is Tenor's javascript functions file

function tenor_mobileMenuClick(){
	$('.tenor-mobile-slideDown').hide();
	tenorMobileMenu="closed";
	tenorMenuBreakTime="ready";
	$(".tenor-nav-menu").click(function(){
		if (tenorMenuBreakTime=="ready") {
		   if (tenorMobileMenu=="closed"){
			   $(".tenor-nav-menu").html('<i class="fas fa-spinner fa-pulse"></i>');
				$('.tenor-mobile-slideDown').slideDown();
				tenorMobileMenu="open";
				$('.nav-and-branding').animate({height:"70px"},500);
				$(".tenor-nav-menu").css("border", "1px solid transparent");
				tenorMenuBreakTime="not-ready";
				setTimeout(function(){tenorMenuBreakTime="ready";$(".tenor-nav-menu").html('<i class="fas fa-times"></i>');},1000);
		   } else {
			   $(".tenor-nav-menu").html('<i class="fas fa-chevron-down"></i>');
			   $('.tenor-mobile-slideDown').slideUp();
			   tenorMobileMenu="closed";
			   $('.nav-and-branding').animate({height:"150px"},500);
			   $(".tenor-nav-menu").css("border", "1px solid black");
			};
		};
	});
}


window.addEventListener("load", function() {
	tenor_mobileMenuClick();
});
