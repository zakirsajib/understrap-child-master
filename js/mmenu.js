$ = jQuery.noConflict();
	$(function ($) {
		var $menu 	= $("#navbarNavDropdown").first().clone(),
		$button = $(".navbar-toggler");
		
		var $panels 		= $();
		var $nopanels 		= $();
		var $vertical 		= $();
		var $nolistview		= $();
		var $inset			= $();
		var $selected		= $menu.find( "li.current-menu-item" );
		var $divider		= $();
		var $spacer			= $();
		$menu.children().not( "div, ul, ol" ).remove();
		$menu.add( $menu.find( "div, ul, ol, li, a, span" ) )
			.off( "click" )
			.removeAttr( "class" )
			.not( "[id^='wpmm-']" )
			.removeAttr( "id" );
	
		$menu.addClass( "wpmm-menu" );
	
		$panels.addClass( "Panel" );
		$nopanels.addClass( "NoPanel" );
		$vertical.addClass( "Vertical" );
		$nolistview.addClass( "NoListview" );
		$inset.addClass( "Inset" );
		$selected.addClass( "Selected" );
		$divider.addClass( "Divider" );
		$spacer.addClass( "Spacer" );
		
		$menu.mmenu({
			"extensions": [
                "pagedim-black"
            ],
			navbars: [
				{
					position : 'bottom',
					content	: [ 
						'<a href="#" target="_blank"><i class="pt pt-facebook pt-2x"></i></a>',
						'<a href="#" target="_blank"><i class="pt pt-instagram pt-2x"></i></a>',
						'<a href="#" target="_blank"><i class="pt pt-twitter pt-2x"></i></a>',
						'<a href="#" target="_blank"><i class="pt pt-envelope pt-2x"></i></a>'
					]
				},
				{
					content: [ "prev", "title" ]
				}
			],
			keyboardNavigation: true
		}
	);
	var api = $menu.data( "mmenu" );
	$button
		.addClass( "wpmm-button" )
		.off( "click" )
		.on( "click", function( e ) {
			e.preventDefault();
			e.stopImmediatePropagation();
			api.open();
		});
});