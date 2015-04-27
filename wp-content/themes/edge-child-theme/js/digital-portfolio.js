(function($){

//////////////////////
// LAYOUT
//////////////////////

var wrap = $( ".wrapper" );
var head = $( ".header" );

var carousel = new Carousel( ".slides-container" );

function centerWrapper() {

	// dimensions of images
	var slideW = 1532;
	var slideH = 1080;

	// total margin/padding (top + bottom) for wrapper
	var wrapSpacing = parseInt( wrap.css( "padding-top" ).replace( "px", "" ) ) + parseInt( wrap.css( "padding-top" ).replace( "px", "" ) );
	
	var scrW = parseInt( $(window).width() );
	var scrH = parseInt( $(window).height() );
	var wrapMaxW = scrW * 0.95;
	
	var headH = parseInt( head.outerHeight( true ) );
	
	var imgMaxW = ( wrapMaxW < slideW ) ? wrapMaxW : slideW;
	var imgMaxH = imgMaxW * ( slideH / slideW );
	
	// ensure max width dimensions aren't too tall for screen
	if ( ( scrH - imgMaxH ) < ( headH + wrapSpacing ) ) {

		imgMaxH = scrH - headH - wrapSpacing;
		imgMaxW = imgMaxH * ( slideW / slideH );

	}

	console.log( "scrW is: " + scrW );
	console.log( "scrH is: " + scrH );
	console.log( "wrapMaxW is: " + wrapMaxW );
	console.log( "imgMaxW is: " + imgMaxW );
	console.log( "imgMaxH is: " + imgMaxH );
	console.log( "headH is: " + headH );
	console.log( "wrapSpacing is: " + wrapSpacing );
	
	wrap.css({
		"width" : imgMaxW + "px",
		"margin-top" : function(){
			return "-" + ( ( imgMaxH + headH + wrapSpacing ) / 2 ) + "px";
		}
	});

	var arrPosL = parseFloat( head.css( "margin-left" ) );
	var arrPosR = arrPosL + parseFloat( head.outerWidth() );
	
	$( ".btn-slidenav.nav-prev" ).css( "left", function(){
		return ( arrPosL - parseInt( $(this).outerWidth( true ) ) );
	});
	$( ".btn-slidenav.nav-next" ).css( "left", function(){
		return arrPosR;
	});
}

function wrapPosDisp(){

	wrap.css({
		"width": "95%",
		"margin-top": "0",
		"visibility": "hidden"
	});

	setTimeout( function(){
		centerWrapper();
		wrap.stop()
			.css({
				"opacity": 0,
				"visibility": "visible"
			}).animate({
				opacity: 1
			}, 400 );
		carousel.init();
	}, 100 );

	setTimeout(function(){
		window.scrollTo(0, 1);
	}, 0);
}

$(window).load(function(){
	wrapPosDisp();
});

$(window).resize(function(){
	wrapPosDisp();

	$( "[data-menuitem='fullscreen'] > a" ).html( ( screenfull.isFullscreen ? "Exit" : "Fullscreen" ) );
});

$( "[data-menuitem='fullscreen'] > a" ).click(function(e){
	e.preventDefault();
	
	if (screenfull.enabled) {
		screenfull.toggle();
	}
});

$( '*' ).on('dragstart', function(e) { e.preventDefault(); });

//////////////////////
// MODALS
//////////////////////

$( "[data-menuitem] > a" ).click(function(e){
	e.preventDefault();

	modalClose( $( ".modal-container.show" ).children() );

	var menuItem = $(this).parent().attr( "data-menuitem" );
	var modalItem = $( ".modal-" + menuItem );
	var modal = modalItem.parent( ".modal-container" );

	if( !modalItem.hasClass( "modal-share" ) ) {
		modalItem.width(function(){
			var padBorWidth = parseInt( $(this).css( "padding-right" ) )
				+ parseInt( $(this).css( "padding-left" ) )
				+ parseInt( $(this).css( "border-right-width" ) )
				+ parseInt( $(this).css( "border-left-width" ) );

			return parseInt( modal.width() ) - 10 - padBorWidth;
		});
		modalItem.css( "max-height", function(){
			var padBorHeight = parseInt( $(this).css( "padding-top" ) )
				+ parseInt( $(this).css( "padding-bottom" ) )
				+ parseInt( $(this).css( "border-top-width" ) )
				+ parseInt( $(this).css( "border-bottom-width" ) );

			return parseInt( modal.height() ) - 10 - padBorHeight;
		});
	}

	// calculate positioning only if not currently set
	if ( !modal.hasClass( "show" ) ) {}

	var marTop = modalItem.outerHeight() / 2;
	var marLeft = modalItem.outerWidth() / 2;

	modalItem.css({ "margin-top": "-" + marTop + "px", "margin-left": "-" + marLeft + "px" });

	modal.addClass( "show" )
		.css({
			"opacity": 0
		}).animate({
			opacity: 1
		}, 400 );
});

function modalClose( t ) {
	modal = t.parents( ".modal-container" );
	modal.animate({
		opacity: 0
	}, 400, function(){
		modal.removeClass( "show" );
		modal.find( ".modal-empty" ).attr( "value", "" );
		modal.find( ".wpcf7-response-output, .wpcf7-not-valid-tip" ).hide();
		modal.find( ".mcs-thmb" ).removeClass( "selected" );
	});
	
}

$( ".modal-close" ).click(function() {
	modalClose( $(this) );
});

$(document).keyup(function(e) {
	if (e.keyCode == 27) {
		modalClose( $( ".modal-container.show" ).children() );
	}
});


//////////////////////
// IMAGE SLIDER
//////////////////////
function Carousel(element) {
	
		var self = this;
		element = $(element);

		var container = $(">.slides", element);
		var panes = $(">.slides>.slide", element);

		var pane_width = 0;
		var pane_count = panes.length;

		var current_pane = 0;


		/* initial */
		this.init = function() {
		setPaneDimensions();
	
		$(window).on("load resize orientationchange", function() {
			setPaneDimensions();
		})
		};


		/* set the pane dimensions and scale the container */
		function setPaneDimensions() {
		pane_width = element.width();
		panes.each(function() {
			$(this).width(pane_width);
		});
		container.width(pane_width*pane_count);
		};


		/* show pane by index */
		this.showPane = function(index, animate) {
		// between the bounds
		index = Math.max(0, Math.min(index, pane_count-1));
		current_pane = index;
	
		var offset = -((100/pane_count)*current_pane);
		setContainerOffset(offset, animate);
		};


		function setContainerOffset(percent, animate) {
		container.removeClass("animate");
	
		if(animate) {
			container.addClass("animate");
		}
	
		if(Modernizr.csstransforms3d) {
			container.css("transform", "translate3d("+ percent +"%,0,0) scale3d(1,1,1)");
		}
		else if(Modernizr.csstransforms) {
			container.css("transform", "translate("+ percent +"%,0)");
		}
		else {
			var px = ((pane_width*pane_count) / 100) * percent;
			container.css("left", px+"px");
		}
		}

		this.next = function() { return this.showPane(current_pane+1, true); };
		this.prev = function() { return this.showPane(current_pane-1, true); };
	
	$( ".btn-slidenav" ).click(function(e){
		e.preventDefault();
		var dir = $(this).attr( "data-dir" );
	
		if( dir == "prev" ) {
			self.prev();
		} else if ( dir == "next" ) {
			self.next();
		}
	});
	
	$( ".mcs-link" ).click(function(e){
		var i = $(this).attr( "data-index" );
		
		modalClose( $(this) );
		self.showPane( i, true );
	});


		function handleHammer(ev) {
		// disable browser scrolling
		ev.gesture.preventDefault();
	
		switch(ev.type) {
			case 'dragright':
			case 'dragleft':
				// stick to the finger
				var pane_offset = -(100/pane_count)*current_pane;
				var drag_offset = ((100/pane_width)*ev.gesture.deltaX) / pane_count;
	
				// slow down at the first and last pane
				if((current_pane == 0 && ev.gesture.direction == "right") ||
				(current_pane == pane_count-1 && ev.gesture.direction == "left")) {
					drag_offset *= .4;
				}
	
				setContainerOffset(drag_offset + pane_offset);
				break;
	
			case 'swipeleft':
				self.next();
				ev.gesture.stopDetect();
				break;
	
			case 'swiperight':
				self.prev();
				ev.gesture.stopDetect();
				break;
	
			case 'release':
				// more then 50% moved, navigate
				if(Math.abs(ev.gesture.deltaX) > pane_width/2) {
					if(ev.gesture.direction == 'right') {
						self.prev();
					} else {
						self.next();
					}
				}
				else {
					self.showPane(current_pane, true);
				}
				break;
		}
		}

		new Hammer(element[0], { dragLockToAxis: true }).on("release dragleft dragright swipeleft swiperight", handleHammer);
}

})(jQuery);