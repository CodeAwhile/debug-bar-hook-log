jQuery(function($){
	$('.render-hooks-filter').click(function(){
		$('.hook').show();
		$('.render-hooks-filter:checked').each(function(){
			$('.hook-group-' + $(this).val()).hide();
		});
	});

	$('.hook-title').click(function() {
		$(this).parent().find('.hook-args').toggle();
	});

	$('.hook-args').hide();
});