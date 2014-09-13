
/*
$(function(){
	$('.nav').setup_navigation();
});
*/
var keyCodeMap = {
        48:"0", 49:"1", 50:"2", 51:"3", 52:"4", 53:"5", 54:"6", 55:"7", 56:"8", 57:"9", 59:";",
        65:"a", 66:"b", 67:"c", 68:"d", 69:"e", 70:"f", 71:"g", 72:"h", 73:"i", 74:"j", 75:"k", 76:"l",
        77:"m", 78:"n", 79:"o", 80:"p", 81:"q", 82:"r", 83:"s", 84:"t", 85:"u", 86:"v", 87:"w", 88:"x", 89:"y", 90:"z",
        96:"0", 97:"1", 98:"2", 99:"3", 100:"4", 101:"5", 102:"6", 103:"7", 104:"8", 105:"9"
}

$.fn.setup_navigation = function(settings) {

	settings = jQuery.extend({
		menuHoverClass: 'show-menu',
	}, settings);
	
	// Add ARIA role to menubar and menu items
	$(this).attr('role', 'menubar').find('li').attr('role', 'menuitem');
	
	var top_level_links = $(this).find('> li > a, > li  > input[type=submit]');
	var second_level_links = $(this).find('ul').prev().not(top_level_links);
	$.merge(top_level_links, second_level_links);
    var bottom_level_links = $(this).find('a, form > input[type=submit]').not(top_level_links);
//	$(second_level_links).each(function() {     
//		$(this).next('ul').hide();
//	})

	// Added by Terrill: (removed temporarily: doesn't fix the JAWS problem after all)
	// Add tabindex="0" to all top-level links 
	// Without at least one of these, JAWS doesn't read widget as a menu, despite all the other ARIA
	//$(top_level_links).attr('tabindex','0');
	
	// Set tabIndex to -1 so that top_level_links can't receive focus until menu is open
	$(top_level_links).next('ul')
		.attr('data-test','true')
		.attr({ 'aria-hidden': 'true', 'role': 'menu' })
		.find('a')
		.attr('tabIndex',-1);
	
	// Adding aria-haspopup for appropriate items
	$(top_level_links).each(function(){
		if($(this).next('ul').length > 0)
			$(this).parent('li').attr('aria-haspopup', 'true');
	});

	var delay = 1000;
	var timer;
	$(top_level_links).hover(function () {
	    clearTimeout(timer)
	    $(this).closest('ul')
        .find('.' + settings.menuHoverClass)
            .attr('aria-hidden', 'true')
            .removeClass(settings.menuHoverClass)
            .find('a, input[type="submit"]')
                .attr('tabIndex', -1);
	    $(this).next('ul')
			.attr('aria-hidden', 'false')
			.addClass(settings.menuHoverClass)
			.find('a, input[type="submit"]').attr('tabIndex', 0);
	}, function () {
	    timer = setTimeout(function () {
	        $('.' + settings.menuHoverClass)
				.attr('aria-hidden', 'true')
				.removeClass(settings.menuHoverClass)
				.find('a, input[type="submit"]')
					.attr('tabIndex', -1);
	    }, delay);
	});

	$(bottom_level_links).hover(function () {
	    clearTimeout(timer)
	}, function() {
	    timer = setTimeout(function () {
	        $('.' + settings.menuHoverClass)
				.attr('aria-hidden', 'true')
				.removeClass(settings.menuHoverClass)
				.find('a, input[type="submit"]')
					.attr('tabIndex', -1);
	    }, delay);
	});

	$(top_level_links).focus(function(){
		$(this).closest('ul')
			// Removed by Terrill 
			// The following was adding aria-hidden="false" to root ul since menu is never hidden
			// and seemed to be causing flakiness in JAWS (needs more testing) 
			// .attr('aria-hidden', 'false') 
			.find('.'+settings.menuHoverClass)
				.attr('aria-hidden', 'true')
				.removeClass(settings.menuHoverClass)
				.find('a, input[type="submit"]')
					.attr('tabIndex',-1);
		$(this).next('ul')
			.attr('aria-hidden', 'false')
			.addClass(settings.menuHoverClass)
			.find('a, input[type="submit"]').attr('tabIndex',0);
	});
//    $('#ltss-mainmenu').focusout(function(){
//		$(this).find('.'+settings.menuHoverClass)
//				.attr('aria-hidden', 'true')
//				.removeClass(settings.menuHoverClass)
//				.find('a')
//					.attr('tabIndex',-1);
//	});
	// Bind arrow keys for navigation
	$(top_level_links).keydown(function(e){
		if(e.keyCode == 37) {
			e.preventDefault();

			if($(this).next('ul').length == 1)
			{
				$(this).next('ul').children('li').find('a').first().focus();
			}
			// This is the first item
//			if($(this).parent('li').prev('li').length == 0) {
//				$(this).parents('ul').find('> li').last().find('a').first().focus();
//			} else {
//				$(this).parent('li').prev('li').find('a').first().focus();
//			}
		} else if(e.keyCode == 38) {
			e.preventDefault();
			if($(this).parent('li').find('ul').length > 0) {
				$(this).parent('li').find('ul')
					.attr('aria-hidden', 'false')
					.addClass(settings.menuHoverClass)
					.find('a, input[type="submit"]').attr('tabIndex',0)
						.last().focus();
			}
		} else if(e.keyCode == 39) {
			e.preventDefault();

//			// This is the last item
			if($(this).parent('li').next('li').length == 0) {
				$(this).parents('ul').find('> li').first().find('a, input[type="submit"]').first().focus();
			} else {
				$(this).parent('li').next('li').find('a').first().focus();
			}
		} else if(e.keyCode == 40) {
			e.preventDefault();
			if($(this).parent('li').find('ul').length > 0) {
				$(this).parent('li').find('ul')
					.attr('aria-hidden', 'false')
					.addClass(settings.menuHoverClass)
					.find('a, input[type="submit"]').attr('tabIndex',0)
						.first().focus();
			}
		} else if(e.keyCode == 13 || e.keyCode == 32) {
			// If submenu is hidden, open it
			e.preventDefault();
			$(this).parent('li').find('ul[aria-hidden=true]')
					.attr('aria-hidden', 'false')
					.addClass(settings.menuHoverClass)
					.find('a, input[type="submit"]').attr('tabIndex',0)
						.first().focus();
		} else if(e.keyCode == 27) {
			e.preventDefault();
			$('.'+settings.menuHoverClass)
				.attr('aria-hidden', 'true')
				.removeClass(settings.menuHoverClass)
				.find('a, input[type="submit"]')
					.attr('tabIndex',-1);
		} else {
			$(this).parent('li').find('ul[aria-hidden=false] a, input[type="submit"]').each(function(){
				if($(this).text().substring(0,1).toLowerCase() == keyCodeMap[e.keyCode]) {
					$(this).focus();
					return false;
				}
			});
		}
	});
	
	
	var links = $(top_level_links).parent('li').find('ul').find('a, input[type="submit"]');
	$(links).keydown(function(e){
		if(e.keyCode == 38) {
			e.preventDefault();
			// This is the first item
			if($(this).parent('li').prev('li').length == 0) {
				$(this).parents('ul').parents('li').find('a, input[type="submit"]').first().focus();
			} else {
				$(this).parent('li').prev('li').find('a, input[type="submit"]').first().focus();
			}
		} else if(e.keyCode == 39) {
			if($(this).parents('ul').first().prev('a, input[type="submit"]').length == 1)
			{
				$(this).parents('ul').first().prev('a, input[type="submit"]').focus();
			}
		} else if(e.keyCode == 40) {
			e.preventDefault();
			if($(this).parent('li').next('li').length == 0) {
				$(this).parents('ul').parents('li').find('a, input[type="submit"]').first().focus();
			} else {
				$(this).parent('li').next('li').find('a, input[type="submit"]').first().focus();
			}
		} else if(e.keyCode == 27 || e.keyCode == 37) {
			e.preventDefault();
//			$(this)
//				.parents('ul').first()
//					.prev('a').focus()
//					.parents('ul').first().find('.'+settings.menuHoverClass)
//						.attr('aria-hidden', 'true')
//						.removeClass(settings.menuHoverClass)
//						.find('a')
//							.attr('tabIndex',-1);
		} else if(e.keyCode == 32) {
			e.preventDefault();
			window.location = $(this).attr('href');
		} else {
			var found = false;
			$(this).parent('li').nextAll('li').find('a, input[type="submit"]').each(function(){
				if($(this).text().substring(0,1).toLowerCase() == keyCodeMap[e.keyCode]) {
					$(this).focus();
					found = true;
					return false;
				}
			});
			
			if(!found) {
				$(this).parent('li').prevAll('li').find('a, input[type="submit"]').each(function(){
					if($(this).text().substring(0,1).toLowerCase() == keyCodeMap[e.keyCode]) {
						$(this).focus();
						return false;
					}
				});
			}
		}
	});

		
	// Hide menu if click or focus occurs outside of navigation
	$(this).find('a, input[type="submit"]').last().keydown(function(e){ 
		if(e.keyCode == 9 ) {
			// If the user tabs out of the navigation hide all menus
			$('.'+settings.menuHoverClass)
				.attr('aria-hidden', 'true')
				.removeClass(settings.menuHoverClass)
				.find('a, input[type="submit"]')
					.attr('tabIndex',-1);
		}
	});

    $(this).find('a, input[type="submit"]').first().keydown(function(e){ 
		if(e.keyCode == 9 && e.shiftKey) {
			// If the user tabs out of the navigation hide all menus
			$('.'+settings.menuHoverClass)
				.attr('aria-hidden', 'true')
				.removeClass(settings.menuHoverClass)
				.find('a, input[type="submit"]')
					.attr('tabIndex',-1);
		}
	});
	$(document).click(function(){ $('.'+settings.menuHoverClass).attr('aria-hidden', 'true').removeClass(settings.menuHoverClass).find('a, input[type="submit"]').attr('tabIndex',-1); });
	
	$(this).click(function(e){
		e.stopPropagation();
	});
}