$(function(){

	$(".regular").slick({
		dots: true,
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3
	});
	$(".center").slick({
		dots: true,
		infinite: true,
		centerMode: true,
		slidesToShow: 3,
		slidesToScroll: 3
	});
	$(".variable").slick({
		dots: true,
		infinite: true,
		variableWidth: true
	});

	$('.check').on('click', function(){
		const id = $(this).data('id');
		
		$.ajax({
			url: 'http://inventaris.com/Inventaris_skensa/public/proses/kategori',
			data: {id : id},
			method:'post',
			dataType: 'json',
			success: function(data){
			}
		})
	})

})

window.addEventListener("scroll",function(){
	var navbar = document.querySelector(".navbar");
	navbar.classList.toggle("sticky", window.scrollY > 0);
});

function openleft(){
	document.getElementById("navbar").style.left="0";
}
function closeleft(){
	document.getElementById("navbar").style.left="-100rem";
}


