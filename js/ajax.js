// http://code.tutsplus.com/articles/getting-loopy-ajax-powered-loops-with-jquery-and-wordpress--wp-23232

jQuery(document).ready(function($) {
	var ids = $("#loadPosts").data("ids");
    $(document).on("click", "#loadPosts", function(event) {
		event.preventDefault();
		var page = 1;
    	var loading = true;
    	var $this = $(this);
    	var $window = $(window);
    	var $content = $('#loaded');
		$.ajax({
			url: ajax_object.ajaxurl,
			type: 'POST',
			dataType   : "html",
			data: {
				action: 'load_posts',
				postCommentNonce : ajax_object.postCommentNonce,
				numPosts : 4, 
				pageNumber: page,
				ids: ids
			},
			beforeSend : function(){
				$this.addClass("loader-active");
            },
			success: function( data ) {
				$data = $(data);

				if(data == "no") {
					$("<p class='no-posts'>No more Blog Posts</p>").insertAfter($content);
					$this.fadeOut();
				} else {
	                $data.hide();
	                $content.append($data);
	                $.fn.matchHeight._throttle = 80;
		    		$('.blog-posts__content').matchHeight({ property: 'min-height' });
		    		$this.removeClass("loader-active");
	                $data.fadeIn(500);
	                page++;
	                create_array_ID($(".loadedID"));
	            }
			},
			error: function(jqXHR, textStatus, errorThrown) {
                alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
		});
		function create_array_ID(elem) {
			var newIds = [];
			$.each(elem, function() {
				newIds.push($(this).data("ids"));
			});
			var toTxt = newIds.toString();
			ids = ids + "," + toTxt;
			console.log(ids);
		}
	});
});