/**
 * layout.js
 *
 * DOM fixes to plug gaps in CSS specs (or browser support).
 */
( function initHomepage() {
	'use strict';

	if ( window.ie_lte9 ) {
		return;
	}

	var i,
		i2,
		l,
		l2,
		divs = document.querySelectorAll( '.js-convert-to-flexbox' );

	// Loop through the divs to be flexboxed.
	i = 0;
	l = divs.length;
	while ( i < l ) {
		var div = divs[i],
			posts = div.querySelectorAll( '.entry' ),
			numberOfColumns = div.getAttribute( 'data-flexbox-columns' ),
			oddColumn = document.createElement( 'div' ),
			evenColumn = oddColumn.cloneNode( true );

		if ( 1 < posts.length ) {

			if ( ( 'string' === typeof numberOfColumns ) && ( 3 === parseInt( numberOfColumns, 10 ) ) ) {

				// Assemble left column.
				for ( i2 = 1, l2 = ( Math.floor( posts.length / 2 ) + 1 ); i2 < l2; i2++ ) {
					oddColumn.appendChild( posts[ i2 ] );
				}

				if ( oddColumn.childNodes.length % 2 ) {
					oddColumn.className = 'issue-section-odd-contents';
				} else {
					oddColumn.className = 'issue-section-even-contents';
				}

				// Assemble right column.
				for ( i2 = l2, l2 = posts.length; i2 < l2; i2++ ) {
					evenColumn.appendChild( posts[ i2 ] );
				}

				if ( evenColumn.childNodes.length % 2 ) {
					evenColumn.className = 'issue-section-odd-contents';
				} else {
					evenColumn.className = 'issue-section-even-contents';
				}

			} else {

				var flexLength = (posts.length < 4) ? posts.length : 4;
				oddColumn.className = '';

				if (posts.length > 4) {
					var leftovers = document.createElement( 'div' );
					leftovers.className = 'issue-section-leftovers';
					div.parentNode.appendChild(leftovers);
				}

				// Assemble the only (non-first) column.
				for ( i2 = 1, l2 = posts.length; i2 < l2; i2++ ) {

					if ( i2 < flexLength ) {
						oddColumn.appendChild( posts[ i2 ] );
					} else {
						leftovers.appendChild( posts[ i2 ] );
					}

				}

			}

			// Add flexbox wrapper elements and classes to the layout.
			div.classList.remove( 'issue-section-noflex' );
			div.classList.add( 'issue-section-flex' );
			div.appendChild( oddColumn );
			if ( evenColumn.children.length ) {
				div.appendChild( evenColumn );
			}

		}

		i++;
	}

} )();

/**
 * Initialize the
 *
 * @since 1.1.0
 */
( function initShowHideBlocks() {
	'use strict';

	/* 'Cuts the mustard' test. */
	if ( ! ( 'querySelector' in document ) || ! ( 'addEventListener' in window ) ) {
		return;
	}

	function createShowHideClickHandler( container ) {
		return function showHideClickHandler( e ) {
			e.preventDefault();
			if ( container ) {
				container.classList.toggle( 'closed' );
			}
		};
	}

	var i,
		l,
		contents,
		summary,
		label = '',
		showhides = document.querySelectorAll( '.show-hide' );

	// Loop through the containers to be toggleable.
	for ( i = 0, l = showhides.length; i < l; i++ ) {
		var container = showhides[ i ];

		// Wrap existing elements in this show-hide in a contents element.
		contents = document.createElement( 'div' );
		contents.classList.add( 'show-hide-contents' );
		while ( 0 < container.childNodes.length ) {
			contents.appendChild( container.childNodes[0] );
		}
		container.appendChild( contents );

		// Add toggle button/heading element.
		label = container.hasAttribute( 'data-summary' )
			? container.getAttribute( 'data-summary' )
			: 'Click to find out more';
		summary = document.createElement( 'a' );
		summary.classList.add( 'show-hide-toggle' );
		summary.appendChild( document.createTextNode( label ) );
		container.insertBefore( summary, container.firstChild );

		// Setup the events.
		summary.addEventListener( 'click', createShowHideClickHandler( container ) );

		// Mark content as hidden. Requires CSS to actually hide the contents.
		container.classList.add( 'closed' );

	}

} )();
