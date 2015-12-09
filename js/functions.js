(function( w ){
	// if the class is already set, we're good.
	// I need to set a cookie here
	if( w.document.documentElement.className.indexOf( "fonts-loaded" ) > -1 ){
		return;
	}
	var fontA = new w.FontFaceObserver( "Windsor", {
		weight: 400
	});
	var fontB = new w.FontFaceObserver( "Franklin Gothic", {
		weight: 400
	});
	var fontD = new w.FontFaceObserver( "Franklin Gothic Book", {
		weight: 400		
	});
	var fontC = new w.FontFaceObserver( "ACaslonPro", {
		weight: 600,
		style: "italic"
	});
	var fontG = new w.FontFaceObserver( "ACaslonPro", {
		weight: 400,
		style: "italic"
	});
	w.Promise
		.all([fontA.check(), fontB.check(), fontC.check(), fontD.check(), fontG.check()])
		.then(function(){
			w.document.documentElement.className += " fonts-loaded";
		});
}( this ));


(function($, undefined) {

	Modernizr.addTest("viewportunits", function() { 
	    var bool;
	    
	    Modernizr.testStyles("#modernizr { width: 50vw; }", function(elem, rule) {   
	        var width = parseInt(window.innerWidth/2,10),
	            compStyle = parseInt((window.getComputedStyle ?
	                      getComputedStyle(elem, null) :
	                      elem.currentStyle)["width"],10);
	        
	        bool= !!(compStyle == width);
	    });
	    
	    return bool;
	});

	SITE = {
    	init: function() {
     		SITE.features.init();
    	}
  	};


  	SITE.features = {
	    common: {
	    	init: function() {

		        if (Modernizr.svg == false) {
		          var imgs = document.getElementsByTagName('img');
		          var dotSVG = /.*\.svg$/;
		          for (var i = 0; i != imgs.length; ++i) {
		            if(imgs[i].src.match(dotSVG)) {
		              imgs[i].src = imgs[i].src.slice(0, -3) + "png";
		            }
		          }
		        };
		        
		        var link = $("a[rel='external']");
		        link.attr("target", "_blank");

		        var triggerBttn = document.getElementById( 'trigger-overlay' ),
				overlay = document.querySelector( 'div.overlay' ),
				closeBttn = overlay.querySelector( 'button.overlay-close' );
				transEndEventNames = {
					'WebkitTransition': 'webkitTransitionEnd',
					'MozTransition': 'transitionend',
					'OTransition': 'oTransitionEnd',
					'msTransition': 'MSTransitionEnd',
					'transition': 'transitionend'
				},
				transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
				support = { transitions : Modernizr.csstransitions };

				function toggleOverlay() {
				if( classie.has( overlay, 'open' ) ) {
				  classie.remove( overlay, 'open' );
				  classie.add( overlay, 'close' );
				  var onEndTransitionFn = function( ev ) {
				    if( support.transitions ) {
				      if( ev.propertyName !== 'visibility' ) return;
				      this.removeEventListener( transEndEventName, onEndTransitionFn );
				    }
				    classie.remove( overlay, 'close' );
				  };
				  if( support.transitions ) {
				    overlay.addEventListener( transEndEventName, onEndTransitionFn );
				  }
				  else {
				    onEndTransitionFn();
				  }
				}
				else if( !classie.has( overlay, 'close' ) ) {
				  classie.add( overlay, 'open' );
				}
				}

				triggerBttn.addEventListener( 'click', toggleOverlay );
				closeBttn.addEventListener( 'click', toggleOverlay );

				var snapper = new Snap({
  					element: document.getElementById('panel'),
  					disable: "left"
				});
				$("#book").on("click", function(e) {
					e.preventDefault();
					snapper.open('right');
				});
				$("#book2").on("click", function(e) {
					e.preventDefault();
					snapper.open('right');
				});
				
				$("#close").on("click", function(e) {
					e.preventDefault();
					snapper.close();
				});

				$("input#startDate").addClass('datepicker');
			    $("#OT_searchWrapper .imgCal").css("visibility", "hidden");
			    $("#OT_submitWrap").append('<button id="book" class="btn--new-submit borderDouble">Find A Table</button>');

			    $("input#startDate").addClass('datepicker');
			    $("#OT_searchWrapper .imgCal").css("visibility", "hidden");
			    
			    
			    //Booking Widget Datepicker
			    $('.datepicker').pickadate({
			    	container: '.widget',
			      	format: 'dd/mm/yyyy',
					formatSubmit: 'dd/mm/yyyy',
					hiddenName: true,
					close: '',
					weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
					showMonthsShort: true
			    });
			    $('#date-form input').pickadate({
			    	container: '.widget',
			      	format: 'dd/mm/yyyy',
					formatSubmit: 'dd/mm/yyyy',
					hiddenName: true,
					close: '',
					weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
					showMonthsShort: true
			    });
			    snapper.on('open', function(){
  					$("#book").hide();
  					$("#menu").css("z-index", "52");
				});
				snapper.on('close', function(){
  					$("#book").show();
  					$("#menu").css("z-index", "1");
				});


				$("#panel").scroll( $.throttle( 250, book ) );

				function book() {
					var nav = $("#topbar");
		    		var visibleArea = $("#panel").scrollTop().valueOf();

		    		if( visibleArea > 100 ) {
		    			nav.addClass("stickit");
		    		} 
		    		else {
		    			nav.removeClass("stickit");
		    			
		    		}
				}

				$("#modal").on("click", function(e) {
		            e.preventDefault();
		            $("body").addClass("modal-active");
		        });
		          $("#modal-close").on("click", function(e) {
		            e.preventDefault();
		            $("body").removeClass("modal-active");
		        });
		        $(document).keyup(function(e) {
		            if (e.keyCode == 27) { 
		              $("body").removeClass("modal-active"); 
		            }   // escape key maps to keycode `27`
		        });

	      	} // END init
	    }, // END common

	    hack: {
	    	init: function() {
	        
	        // Simple boxsizing polyfill

		        if(($("html").hasClass("no-boxsizing"))){
		          $("*").each(function(){
		              if( $(".noce > img:first").css("display")=="block"){
		                  var f, a, n;
		                  f = $(this).outerWidth();
		                  a = $(this).width();
		                  n = a-(f-a);
		                  $(this).css("width", n);
		              	}
		            });
		        };
		        var isSafari = /constructor/i.test(window.HTMLElement);
		        if(isSafari) {
		          $("html").addClass("safari");
		        };
		        var isFF = !!navigator.userAgent.match(/firefox/i);
		        if(isFF) {
		          $("html").addClass("firefox");
		        };
		        if (!Modernizr.viewportunits) {
		          var vHeight = $(window).height();
		          $(".vh").css("min-height", vHeight);
		          $(".section-story").css("min-height", vHeight);
		        }
		        
	      	} // END init
	    }, // END hack

	    page17: {
	    	init: function() {
	    		$('.flexslider').flexslider({
	    			directionNav: false
	    		});
	    	}
	    },

	    page15: {
	    	init: function() {
	    		$(".map-overlay").on("click", function() {
	    			$(this).hide();
	    		});
	    	}
	    },
	    newstorypage: {
	    	init: function() {
	    		$('.flexslider').flexslider({
	    			directionNav: false,
	    			slideshow: false,
	    			animation: "fade"
	    		});
	    		$(".next").on("click", function(e) {
	    			e.preventDefault();
	    			$(".flexslider").flexslider("next");
	    		});
	    		$(".prev").on("click", function(e) {
	    			e.preventDefault();
	    			$(".flexslider").flexslider("prev");
	    		});
	    	}		
	    },

	    blogSingle: {
	    	init: function() {
	    		$.fn.matchHeight._throttle = 80;
	    		$('.match').matchHeight({property: 'min-height'});
	    	}
	    },

	   //  page11: {
	   //  	init: function() {
	   //  		$('.gallery-item').magnificPopup({
				//   type: 'image',
				//   gallery:{
				//     enabled:true
				//   },
				//   image: {
				//   	titleSrc: function(item) {
				// 		return '<span>' + item.el.find('img').attr('alt') + '</span>';
				// 	}
				//   }
				// });
				// $('#mixitup').mixItUp(); //to remove

	   //  	}
	   //  },

	    newgallerypage: {
	    	init: function() {
	    		console.log('dsd');
	    		$(".lazy").unveil(100, function() {
				  $(this).load(function() {
				    this.style.opacity = 1;
				  });
				});
				$(".lazy").trigger("unveil");
				$(window).on("load", function() {
					$("html,body").trigger("scroll");
					$(window).resize();
				});
	    		$('.gallery-item').magnificPopup({
				  type: 'image',
				  gallery:{
				    enabled:true
				  },
				  image: {
				  	titleSrc: function(item) {
						return '<span>' + item.el.find('img').attr('alt') + '</span>';
					}
				  }
				});
	    	}
	    },

	    init: function() {
			var features = $('body').data('features');
			var featuresArray = [];

			if(features) {
				featuresArray = features.split(' ');

				for(var x = 0, length = featuresArray.length; x < length; x++) {
				  	var func = featuresArray[x];

					if(this[func] && typeof this[func].init === 'function') {
				    	this[func].init();
				  	}
				}
			}
	    } // END init 
	};

	SITE.init();

})(jQuery);

//Contact Form jQuery END
