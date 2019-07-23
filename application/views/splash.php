
<script type="text/javascript">

	$(document).ready(function() {
		var $lightbox2 = $('#lightbox2');
		$(window).on('load',function(){
			$lightbox2.modal('show');
		});
		$('[data-target="#lightbox2"]').on('click', function(event) {
			var $img = $(this).find('img'),
			src = $img.attr('src'),
			alt = $img.attr('alt'),
			title = $(this).attr('data-title'),
			info = $(this).attr('data-desc'),
			css = {
				'maxWidth': $(window).width(700) - 100,
				'maxHeight': $(window).height(700) - 100
    							// maxHeight: 700,
    							// maxWidth: 700
    						};
    						$lightbox2.find('.close').addClass('hidden');
    						$lightbox2.find('img').attr('src', src);
    						$lightbox2.find('img').attr('alt', alt);
    						$lightbox2.find('strong').text(title);
    						$lightbox2.find('p').text(info);
    						$lightbox2.find('img').css(css);
    					});
		$lightbox2.on('shown.bs.modal', function (e) {
			var $img = $lightbox2.find('img');

			$lightbox2.find('.modal-dialog').css({});
			$lightbox2.find('.close').removeClass('hidden');
		});
	});
</script>
