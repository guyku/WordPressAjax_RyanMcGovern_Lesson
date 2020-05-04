(function($){

	$(document).ready(function(){
		$(document).on('click', '.js-filter-item > a', function(e){
			e.preventDefault();

			var category = $(this).data('category');

			$.ajax({
				url:wp_ajax.ajax_url,
				data: { action: 'filter', category: category },
				type: 'post',
				success: function(result) {
					$('.js-filter').html(result);
				},
				error: function(result) {
					console.warn(result);
				}
			});
		});
	});

})(jQuery);
