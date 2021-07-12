/*========= MENU =========*/
$(document).ready(function() {
	$('.btnMenu').click(function(){
		$('.btnMenu').toggleClass('active');
	});
});

function openNav() {
	document.getElementById("contentMenu").style.width ="260px";
}
function closeNav() {
	document.getElementById("contentMenu").style.width = "0";
}

/*========= LIGHTBOX PAGE IMAGENS =========*/
$(document).ready(function() {
	$('.albumImage img').click(function() {
		var imagesrc = $(this).attr("src");
		$('.backgroundImage').toggle(500).html("<img src=" + imagesrc + ">");
	});

	$('.backgroundImage').click(function () {
		$(this).hide(500);
	});
});

/*========= ALBUM INFO PAGE DISCOGRAFIA =========*/
$(document).ready(function() {
	$(".openAlbum").click(function(e) {
		e.preventDefault();
		el = $(this).data('element');
		$(el).toggle(200);
	});

	$('.albumInfo').click(function () {
		$(this).hide(200);
	});
});