// This is Tenor's javascript functions file

function tenor_mobileMenuClick(){
	$('.tenor-mobile-slideDown').hide();
	tenorMobileMenu="closed";
	$(".tenor-nav-menu").click(function(){
		if (tenorMobileMenu=="closed"){
			$(".tenor-nav-menu").html('<i class="fas fa-times"></i>');
			$('.tenor-mobile-slideDown').slideDown();
			$('.site-description').slideUp();
			tenorMobileMenu="open";
		} else {
			$(".tenor-nav-menu").html('<i class="fas fa-chevron-down"></i>');
			$('.tenor-mobile-slideDown').slideUp();
			$('.site-description').slideDown();
			tenorMobileMenu="closed";
		};
	});
}


window.addEventListener("load", function() {
	tenor_mobileMenuClick();
});
