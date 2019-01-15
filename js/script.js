// plus button color
$(document).ready(function(){
	var i = 1;
	$('#add').click(function(e){
		e.preventDefault();
		i++;
		$('#dynamic_field').append('<br id="br'+i+'"><div class="row" id="row'+i+'"><div class="col"><input type="text" name="nama_warna[]" id="nama_warna2" class="typeahead list_nama" style="height: 45px; width: 170%"></div><div class="col"><a href="#" name="remove" id="'+i+'" class="btn btn-danger btn-remove">X</a></div></div></div>');
		
		var sample_data = new Bloodhound({
            datumTokenizer: function(d){return Bloodhound.tokenizers.obj.whitespace('d.nama_warna');},
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch:$('#nama_warna').attr('data-prefetch'),
            remote:{
              url:$('#nama_warna').attr('data-url'),
              wildcard:'%QUERY'
            }
        });

		$('input.list_nama').typeahead(null, {
          highlight: true,
          name: 'nama_warna2',
          displayKey: 'nama_warna2',
          source:sample_data,
          limit:10,
          templates:{
            suggestion:Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"><img src="#" class="img-thumbnail" width="48" /></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{nama_warna}}</div></div>')
          }
        });
	});

	$(document).on('click', '.btn-remove', function(){
		var button_id = $(this).attr("id");
		$('#row'+button_id+'').remove();
		$('#br'+button_id+'').remove();
	});
});