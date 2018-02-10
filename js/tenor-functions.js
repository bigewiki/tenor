// This is Tenor's javascript functions file

function tenor_mobileMenuClick(){
	$('.tenor-mobile-slideDown').hide();
	tenorMobileMenu="closed";
	tenorMenuBreakTime="ready";
	$(".tenor-nav-menu").click(function(){
		if (tenorMenuBreakTime=="ready") {
		   if (tenorMobileMenu=="closed"){
			   tenorMenuBreakTime="not-ready";
			   $(".tenor-nav-menu").html('<i class="fas fa-spinner fa-pulse"></i>');
			   $('.tenor-mobile-slideDown').slideDown();
			   tenorMobileMenu="open";
			   $('.nav-and-branding').animate({height:"70px"},500);
			   $(".tenor-nav-menu").css("border", "1px solid transparent");
			   setTimeout(function(){tenorMenuBreakTime="ready";$(".tenor-nav-menu").html('<i class="fas fa-times"></i>');},500);
		   } else {
			   tenorMenuBreakTime="not-ready";
			   $(".tenor-nav-menu").html('<i class="fas fa-spinner fa-pulse"></i>');
			   $('.tenor-mobile-slideDown').slideUp();
			   tenorMobileMenu="closed";
			   $('.nav-and-branding').animate({height:"150px"},500);
			   $(".tenor-nav-menu").css("border", "1px solid black");
			   setTimeout(function(){tenorMenuBreakTime="ready";$(".tenor-nav-menu").html('<i class="fas fa-chevron-down"></i>');},500);
			};
		};
	});
}

function tenor_appendPrepend(){
	// on posts pages there's a navigation to the preview and next page, this adds an arrow
	$('.nav-previous a').prepend('<i class="fas fa-arrow-left"></i> ');
	$('.nav-next a').append(' <i class="fas fa-arrow-right"></i>');
	// put the data/time on it's own line by prepending a break
	$('.comment-metadata a').prepend('<br>');
}


window.addEventListener("load", function() {
	tenor_mobileMenuClick();
	tenor_appendPrepend();
});
