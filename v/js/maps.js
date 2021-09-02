(function() {

	var select = document.querySelector('#js-contact-address__select');
	var textInput = document.querySelector('#js-contact-address__col_input');
	var map = document.querySelector('#js-contact__map');
	var col = document.querySelector('#js-contact__col');
	var items = document.querySelectorAll('.js-contact-metro__link');
	var zoom = 9;

	$('.js-contact__link').tabs();

	select.addEventListener(eventsMouseTouch.end, function(e) {
		e.stopPropagation();
		col.classList.toggle('active');
		col.parentNode.classList.toggle('active');
	});

	document.addEventListener(eventsMouseTouch.end, function() {
		col.classList.remove('active');
		col.parentNode.classList.remove('active');
	});

	var myPlacemark;
	var myMap;

	var center = (map.getAttribute('data-center')).split(',');

	var coords = []

	$(items).each(function(index) {

		var tmp = (this.getAttribute('data-coords')).split(',');

		if(this.classList.contains('active')) {
			center[0] = tmp[0];
			center[1] = tmp[1];
			zoom = 15;
			select.innerHTML = this.getAttribute('data-metro') || '';
			textInput.innerHTML = this.getAttribute('data-text') || '';
		}

		coords[index] = {
			x: tmp[0],
			y: tmp[1]
		}

		this.addEventListener(eventsMouseTouch.end, function(e) {

			e.stopPropagation();

			$(items).removeClass('active');
			$(this).addClass('active');
			myMap.setCenter([parseFloat(tmp[0]), parseFloat(tmp[1])], 15);

			select.innerHTML = this.getAttribute('data-metro') || '';
			textInput.innerHTML = this.getAttribute('data-text') || '';
			col.classList.toggle('active');
			col.parentNode.classList.toggle('active');
			return false;

		}, false);
	});

	createMaps(map, coords, center, zoom);

	function createMaps(element, coords, center, zoom) {

		if(!element) {
			return false;
		}

		ymaps.ready(function () {

			myPlacemark;
			myMap = new ymaps.Map(element, {
				center: [parseFloat(center[0]), parseFloat(center[1])],
				zoom: zoom
			}, {
				searchControlProvider: 'yandex#search'
			});

			myMap.behaviors.disable('scrollZoom');

			for(var i = 0, l = coords.length; i < l; i += 1) {

				myPlacemark = new ymaps.Placemark([parseFloat(coords[i].x), parseFloat(coords[i].y)], {

				}, {
					preset: 'islands#blueCircleDotIconWithCaption'
				});

				myMap.geoObjects.add(myPlacemark);

			}
		});

	}

})();