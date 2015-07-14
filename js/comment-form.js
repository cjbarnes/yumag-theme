/* global l10n */
/**
 * comment-form.js
 *
 * Handles show/hide behaviour of the comment form.
 */
( function initCommentForm() {

	/* Don't use toggle-menus in IE8, as there's no event listener support. */
	if ( ! ( 'querySelector' in document ) || ! ( 'addEventListener' in window ) ) {
		return;
	}

	var containers,
		container,
		buttonDiv,
		button,
		form,
		i,
		l;

	/**
	 * Handle clicks of the Leave a Comment button.
	 * @param {Element} container The wrapper for both button and comment form.
	 * @param {Element} button    The toggle button.
	 * @param {Element} form      The toggled comment form.
	 */
	function commentFormToggleClick( container, button, form ) {

		// Check initial state.
		var toOpen = container.classList.contains( 'closed' );

		// Update show/hide.
		container.classList.toggle( 'closed' );

		// Update ARIA attributes.
		button.setAttribute( 'aria-expanded', toOpen ? 'true' : 'false' );
		form.setAttribute( 'aria-hidden', toOpen ? 'false' : 'true' );

		// Get rid of the button. (Just delete this bit if you want the comment
		// form to be fully toggleable.)
		button.parentNode.parentNode.removeChild( button.parentNode );

	}

	// Loop through the comment form areas, initializing the logic for each one.
	containers = document.querySelectorAll( '.comment-respond' );
	for ( i = 0, l = containers.length; i < l; i++ ) {

		container = containers[i];
		form = container.querySelector( '.comment-form' );
		if ( null == form ) {
			return;
		}

		// Create the show/hide toggle (with a wrapper element for centring).
		buttonDiv = document.createElement( 'div' );
		buttonDiv.classList.add( 'comment-form-toggle-wrap' );
		buttonDiv.innerHTML = '<button class="comment-form-toggle">' + l10n.toggleLabel + '</button>';
		button = buttonDiv.firstChild;
		container.insertBefore( buttonDiv, container.firstChild );

		// Hook up ARIA attributes.
		if ( ! form.id ) {
			form.id = 'comment-form-autoid-' + i;
		}
		button.setAttribute( 'aria-controls', form.id );
		button.setAttribute( 'aria-expanded', 'false' );
		form.setAttribute( 'aria-hidden', 'true' );

		// Initialize as hidden.
		container.classList.add( 'closed' );

		/*
		 * Using an anonymous function here creates a closure, which preserves
		 * the current values of `container`, `button`, and `form`.
		 */
		button.addEventListener( 'click', ( function( c, b, f ) {
			return function() {
				commentFormToggleClick( c, b, f );
			};
		} )( container, button, form ) );

	}

} )();
