var items = document.querySelectorAll('.js-contact-metro__link');
var select = document.querySelector('#js-contact-address__select');
var map = document.querySelector('#map');
var textInput = document.querySelector('#js-contact-address__col_input');
var coords = [];
var center = [];

$(items).each(function (index) {

	var tmp = (this.getAttribute('data-coords')).split(',');

	if (this.classList.contains('active')) {
		center[0] = tmp[0];
		center[1] = tmp[1];
		zoom = 15;
		select.innerHTML = this.getAttribute('data-metro') || '';
		textInput.innerHTML = this.getAttribute('data-text') || '';
	}

	coords[index] = {
		x: tmp[0],
		y: tmp[1]
	};

	this.addEventListener('click', function (e) {

		e.stopPropagation();

		$(items).removeClass('active');
		$(this).addClass('active');
		myMap.setCenter([parseFloat(tmp[0]), parseFloat(tmp[1])], 15);

		select.innerHTML = this.getAttribute('data-metro') || '';
		textInput.innerHTML = this.getAttribute('data-text') || '';
		e.preventDefault();
		return false;

	}, false);
});


ymaps.ready(function () {

	var myPlacemark;
	myMap = new ymaps.Map(map, {
		center: [55.687761, 37.573447],
		zoom: zoom
	}, {
		searchControlProvider: 'yandex#search'
	});

	myMap.behaviors.disable('scrollZoom');

	var placemark = new ymaps.Placemark([59.97, 30.31], {},
	  {
		  iconLayout: 'default#image'
	  }
	);

	myMap.geoObjects.add(placemark);

})
