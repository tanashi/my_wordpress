/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var container = document.getElementById( 'site-navigation' ),
	    button = document.getElementById( 'toggle-button' ),
	    div    = button.getElementsByTagName( 'div' )[0],
	    menu      = container.getElementsByTagName( 'ul' )[0];

	if ( undefined == button || undefined == menu )
		return false;

	div.onclick = function() {

		if ( -1 != button.className.indexOf( 'toggled-on' ) ) {
			button.className = button.className.replace( ' toggled-on', '' );
			menu.className = menu.className.replace( ' toggled-on', '' );
		} else {
			button.className += ' toggled-on';
			menu.className += ' toggled-on';
		}
	};

	// Hide menu toggle button if menu is empty.
	if ( ! menu.childNodes.length )
		button.style.display = 'none';
} )();