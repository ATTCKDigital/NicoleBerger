import $ from 'jquery';

console.log('loaded', '/nicoleberger/components/component_representation/representation.js');

function Representation($el) {
	function bindEvents() {
		console.log('/nicoleberger/components/component_representation/representation.js › Representation.bindEvents()');

		$el.on('click', 'a', toggleTray);

		// Grab the mobile icon click
		$('.icon-representation').on('click', function (e) {
			e.preventDefault();

			console.log('icon-representation clicked');

			toggleTray(e);

			$('.representation-container').trigger('click');
		});

		// Hijack this for Vimeo link popups
		bindVimeoLinks();
	}

	function bindVimeoLinks() {
		console.log('bindVimeoLinks');

		// Close modal
		$('.component-video-modal .video-close').on('click', function () {
			$('.component-video-modal iframe').attr('src', '');
			$('body').removeClass('showVideoModal');
		});

		// $('a[href^="https://player.vimeo.com"]').on('mouseenter', function (e) {
		// 	console.log('Vimeo link hovered, this.href: ', $(this).attr('href'));
		// });

		// Open modal
		$('a[href^="https://player.vimeo.com"]').on('click', function (e) {
			e.preventDefault();

			// console.log('vimeo player clicked, this.href: ', $(this).attr('href'));

			$('.component-video-modal iframe').attr('src', $(this).attr('href'));
			$('body').addClass('showVideoModal');
		});
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
