<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/scroll.js') ?>"></script>
<script src="<?= base_url('js/script.js') ?>"></script>

<script type="text/javascript">
	//animate text
	(function(){
		var aboutEl = $('div.animate'),
			aboutElOffset = aboutEl.offset().top/2,
			documentEl = $(document);

		documentEl.on('scroll', function(){
			if(documentEl.scrollTop() > aboutElOffset && aboutEl.hasClass('hidden')) aboutEl.removeClass('hidden');
		});
	})();

	//discus
	/**
	*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
	*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
	/*
	var disqus_config = function () {
	this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
	this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
	};
	*/
	(function() { // DON'T EDIT BELOW THIS LINE
		var d = document, s = d.createElement('script');
		s.src = 'https://citrawarnabali.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
	})();
	
</script>

<?php 
	if(!empty($this->uri->segment(1))){
		echo "
		<script>
			$('nav').addClass('custom');
			if($('nav').hasClass('nav-cek')){
				$('.nav-cek').removeClass('custom');
			}
		</script>
		";
	}else{
		echo "
		<script>
			$(window).scroll(function(){
				if($(document).scrollTop() > 50){
					$('nav').addClass('custom');

					if($('nav').hasClass('nav-cek')){
						$('.nav-cek').removeClass('custom');
					}
				}else{
					$('nav').removeClass('custom');
				}
			});
		</script>
		";
	}

	if(isset($id)){
		echo "
		<script>
			$('#exampleModal').modal('show');
			$('#collapseExample".$collapse."').collapse('show');
		</script>
		";
	}
?>