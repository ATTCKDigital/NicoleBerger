import $ from 'jquery';

console.log('loaded', '/nicoleberger/components/component_representation/representation.js');

function Representation($el) {
	function bindEvents() {
		console.log('/nicoleberger/components/component_representation/representation.js › Representation.bindEvents()');

		$el.on('click', 'a', toggleTray);
	}

	function toggleTray(e) {
		console.log('/nicoleberger/components/component_representation/representation.js › Representation.toggleTray()');
		
		e.preventDefault();

		if ($('body').hasClass('trayOpen')) {
			// Show tray if closed
			$('body').removeClass('trayOpen');
		} else {
			// Open tray if open
			$('body').addClass('trayOpen');
		}
	}

	this.init = function ($el) {
		console.log('/nicoleberger/components/component_representation/representation.js › Representation.init()');
		
		bindEvents();

		return this;
	}

	return this.init($el);
}

export default Representation;
