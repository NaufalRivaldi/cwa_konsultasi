// plus button color
$(document).ready(function(){
	var i = 1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<br id="br'+i+'"><div class="row" id="row'+i+'"><div class="col"><input type="text" name="nama_warna[]" id="nama_warna" class="typeahead list_nama" style="height: 45px; width: 170%"></div><div class="col"><a href="#" name="remove" id="'+i+'" class="btn btn-danger btn-remove">X</a></div></div></div>');
		$.myFunction();
	});

	$(document).on('click', '.btn-remove', function(){
		var button_id = $(this).attr("id");
		$('#row'+button_id+'').remove();
		$('#br'+button_id+'').remove();
	});
});

// scroll
$(document).ready(function(){
	var no = 1;
	window.onscroll = function() {scrollFunction()};
	function scrollFunction(){
		if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
			$(".navbar").removeClass('custom');
			$(".navbar").addClass('bg-light');
			console.log(var);
		}else{

		}
	}
});