$(document).ready(function () {

	window.globalPopup = new Popup();

	$(document).on('click', '[data-ajax]', function () {

		$.post(this.href, function (response) {

			globalPopup.html(response, function () {

				var list = document.querySelector('#js-gallery-touch__list');

				if (list) {

					var gallery = new GalleryTouch();

					gallery.init({
						element: list,
						arrow: true,
						nav: false
					})
					gallery.enable();

				}

			}).show();

		});

		return false;

	});

	$(document).on('click', '[data-ajax2]', function () {

		$.post(this.href, function (response) {

			globalPopup.options({
				addClassNamePopup: 'popup_rightshow'
			}).html(response, function () {

				var list = document.querySelector('#js-gallery-touch__list');

				if (list) {

					var gallery = new GalleryTouch();

					gallery.init({
						element: list,
						arrow: true,
						nav: false
					})
					gallery.enable();

				}

			}).show();

		});

		return false;

	});

	// временный вызов попап
	$.post('/ajax/basket-response.html', function (response) {

		globalPopup.options({
			addClassNamePopup: 'popup_rightshow',
			closeButtons: '.js-basket-response__submit'
		}).html(response).show();

	});

	// index
	(function () {

		var menu__col = document.querySelectorAll('.js-main__col');

		$(menu__col).each(function (i) {

			$(this).find('.header-phone, .logo, .header-address').on(eventsMouseTouch.end, function (e) {
				e.stopPropagation();
			});

			if (window.innerWidth < 768 && i == 1) {
				this.classList.add('active');
			}

			this.addEventListener('click', function () {

				$(menu__col).removeClass('active');
				this.classList.add('active');

			});

		});

	})();

	// filter
	(function () {

		var items = document.querySelectorAll('.js-filter__button');
		var sections = document.querySelectorAll('.js-filter__section');
		var sorting__btn = document.querySelector('#js-catalog-sorting__button');

		if (!items.length) {
			return false;
		}

		$(items).each(function () {

			this.addEventListener('click', function (e) {

				e.stopPropagation();

				var slide = this.parentNode.querySelector('.filter__slidedown');

				if (this.classList.contains('active')) {
					this.classList.remove('active');
					slide.style.marginLeft = '';
					return false;
				}

				$(items).each(function () {
					this.classList.remove('active');
				});

				if ((slide.offsetWidth + slide.getBoundingClientRect().left) > document.body.offsetWidth) {
					slide.style.marginLeft = document.body.offsetWidth - (slide.offsetWidth + slide.getBoundingClientRect().left) + 'px';
				}

				this.classList.add('active');

			}, false);

		});

		$(sections).each(function () {

			var _this = this;
			var inputs = this.querySelectorAll('input');

			this.addEventListener('click', function (e) {
				e.stopPropagation();
			});

			this.querySelector('.js-filter__resetblock').addEventListener('click', function () {

				$(inputs).each(function () {
					this.checked = false;
				});

			});

		});

		if (sorting__btn) {
			sorting__btn.addEventListener('click', function (e) {
				e.stopPropagation();
				this.parentNode.classList.toggle('active');
			}, false);
		}

		document.addEventListener('click', function () {

			if (sorting__btn) {
				sorting__btn.parentNode.classList.remove('active');
			}

			$(items).each(function () {

				this.classList.remove('active');

			});

		});

		document.addEventListener('keydown', function (e) {

			if (e.which == 27) {
				if (sorting__btn) {
					sorting__btn.parentNode.classList.remove('active');
				}

				$(items).each(function () {

					this.classList.remove('active');

				});
			}

		}, false);

	})();

	// menu
	(function () {

		var button = document.querySelector('#js-menu-header__burger');

		if (!button) {
			return false;
		}

		var overlay = document.querySelector('#js-menu-header__overlay');
		var section = document.querySelector('#js-menu-header__section');
		var top;

		button.addEventListener(eventsMouseTouch.end, function (e) {

			e.stopPropagation();

			if (this.classList.contains('active')) {
				document.body.style.cssText = '';
				document.body.scrollTop = top;
				this.classList.remove('active');
				return false;
			}

			top = document.body.scrollTop;
			document.body.style.cssText = 'position: fixed; top: ' + (top * (-1)) + 'px; overflow: hidden; width: 100%; left: 0;';
			this.classList.add('active');

		}, false);

		overlay.addEventListener(eventsMouseTouch.end, function () {
			button.classList.remove('active');
			document.body.style.cssText = '';
			document.body.scrollTop = top;
		});

		var resize = function () {

			var right = button.getBoundingClientRect().right;
			if (window.innerWidth > 1099) {
				section.style.right = window.innerWidth - right - 75 + 'px';
			} else {
				section.style.right = '';
			}

		}

		resize();
		window.addEventListener('resize', resize);

	})();

	// menu-horiz
	(function () {

		var button = document.querySelector('#js-menu-horiz__link');

		if (!button) {
			return false;
		}

		var subMenu = button.nextElementSibling;
		var close = document.querySelector('#js-menu-horiz-sub__close');

		var metroPopup = document.querySelector('#js-contact__col');

		button.addEventListener(eventsMouseTouch.end, function (e) {
			e.stopPropagation();
			e.preventDefault();
			this.parentNode.classList.toggle('active');

			if (metroPopup) {
				metroPopup.classList.remove('active');
				metroPopup.parentNode.classList.remove('active');
			}

		});

		button.addEventListener('click', function (e) {
			e.stopPropagation();
			e.preventDefault();
		});

		close.addEventListener(eventsMouseTouch.end, function () {

			button.parentNode.classList.remove('active');

			if (metroPopup) {
				metroPopup.classList.remove('active');
				metroPopup.parentNode.classList.remove('active');
			}

		});

		subMenu.addEventListener(eventsMouseTouch.end, function (e) {
			e.stopPropagation();
		});

		document.addEventListener(eventsMouseTouch.end, function () {

			button.parentNode.classList.remove('active');

			if (metroPopup) {
				metroPopup.classList.remove('active');
				metroPopup.parentNode.classList.remove('active');
			}

		});

	})();

	// header-search
	(function () {

		var search = document.querySelector('#js-header-search');
		if (!search) {
			return false;
		}

		search.addEventListener(eventsMouseTouch.end, function (e) {
			e.stopPropagation();
			search.classList.add('active');
		}, false);

		document.body.addEventListener(eventsMouseTouch.end, function () {
			search.classList.remove('active');
		});

	})();

	$("[type=tel]").mask("+7 (999) 999-99-99");

	// combox
	(function () {

		var titles = document.querySelectorAll('.js-combox__title');

		if (!titles.length) {
			return false;
		}

		$(titles).each(function () {

			var inputs = $(this).parent().find('input');
			var title = this;

			$(inputs).each(function () {

				if (this.checked) {
					this.parentNode.parentNode.classList.add('active');
					title.innerHTML = this.nextElementSibling.innerHTML;
					if (!this.getAttribute('data-default')) {
						title.classList.add('selected');
					}
				}

				this.addEventListener('change', function () {
					title.classList.remove('selected');
					$(inputs).each(function () {
						this.parentNode.parentNode.classList.remove('active');

						if (this.checked) {
							if (!this.getAttribute('data-default')) {
								title.classList.add('selected');
							}
						}
					})
					this.parentNode.parentNode.classList.add('active');

					title.innerHTML = this.nextElementSibling.innerHTML;

				});

			});

			this.addEventListener('click', function (e) {

				var _this = this;

				e.stopPropagation();

				$(titles).each(function () {
					if (this !== _this) {
						this.parentNode.parentNode.classList.remove('active');
					}
				});

				this.parentNode.parentNode.classList.toggle('active');
			});

		});

		document.addEventListener('click', function () {
			$(titles).each(function () {
				this.parentNode.parentNode.classList.remove('active');
			});
		});

	})();

	// catalog filter slider
	(function () {

		var jsSlider = document.querySelector('#js-filter-slide__slider');
		var input = document.querySelector('#js-filter-slide__input');

		if (!jsSlider && !input) {
			return false;
		}

		slider = new Slider({
			element: jsSlider,
			mainClass: 'filter-slide',
			min: parseInt(jsSlider.getAttribute('data-min')),
			max: parseInt(jsSlider.getAttribute('data-max')),
			division: parseInt(jsSlider.getAttribute('data-division')),
			point: parseInt(jsSlider.getAttribute('data-point')),
			beforeDivisionStep: parseInt(jsSlider.getAttribute('data-beforedivisionstep')),
			afterDivisionStep: parseInt(jsSlider.getAttribute('data-afterdivisionstep')),
			handleMinus: '.filter-slide__handle-minus',
			handlePlus: '.filter-slide__handle-plus',
			beforeOutSideClickStep: parseInt(jsSlider.getAttribute('data-beforeoutsideclickstep')),
			afterOutSideClickStep: parseInt(jsSlider.getAttribute('data-afteroutsideclickstep')),
			create: function (slider, opts, handleLeft, mobileDetect) {

				var obj = this;
				opts.tags = {};
				opts.tags.minus = $('<div class="filter-slide__handle-minus"></div>')[0];
				opts.tags.text = $('<div class="filter-slide__handle-text"></div>')[0];
				opts.tags.plus = $('<div class="filter-slide__handle-plus"></div>')[0];

				handleLeft.appendChild(opts.tags.minus);
				handleLeft.appendChild(opts.tags.text);
				handleLeft.appendChild(opts.tags.plus);

				if (mobileDetect) {
					input.setAttribute('type', 'number');
				}

				input.addEventListener('change', function (e) {

					if (/\D/g.test(this.value)) {
						this.value = this.value.replace(/\D/g, '');
					}

					this.value = this.value.replace(/^0+/, '');

					obj.setValuesOutSide(this.value);

				});

			},
			slide: function (x, opts, handleLeft) {

				input.value = x;
				opts.tags.text.innerHTML = x;
				handleLeft.style.marginLeft = (opts.tags.text.offsetWidth / 2) * (-1) + 'px';

			}
		});

	})();

	// drag metall slider
	(function () {

		var jsSlider = document.querySelector('#js-basket-form__slider');
		var input = document.querySelector('#js-slider__input');

		if (!jsSlider && !input) {
			return false;
		}

		slider = new Slider({
			element: jsSlider,
			mainClass: 'basket-form',
			min: parseInt(jsSlider.getAttribute('data-min')),
			max: parseInt(jsSlider.getAttribute('data-max')),
			division: parseInt(jsSlider.getAttribute('data-division')),
			point: parseInt(jsSlider.getAttribute('data-point')),
			beforeDivisionStep: parseInt(jsSlider.getAttribute('data-beforedivisionstep')),
			afterDivisionStep: parseInt(jsSlider.getAttribute('data-afterdivisionstep')),
			handleMinus: '.basket-form__handle-minus',
			handlePlus: '.basket-form__handle-plus',
			beforeOutSideClickStep: parseInt(jsSlider.getAttribute('data-beforeoutsideclickstep')),
			afterOutSideClickStep: parseInt(jsSlider.getAttribute('data-afteroutsideclickstep')),
			create: function (slider, opts, handleLeft, mobileDetect) {

				var obj = this;
				opts.tags = {};
				opts.tags.minus = $('<div class="basket-form__handle-minus"></div>')[0];
				opts.tags.text = $('<div class="basket-form__handle-text"></div>')[0];
				opts.tags.plus = $('<div class="basket-form__handle-plus"></div>')[0];

				handleLeft.appendChild(opts.tags.minus);
				handleLeft.appendChild(opts.tags.text);
				handleLeft.appendChild(opts.tags.plus);

			},
			slide: function (x, opts, handleLeft) {

				input.value = x;
				opts.tags.text.innerHTML = x;
				handleLeft.style.marginLeft = (opts.tags.text.offsetWidth / 2) * (-1) + 'px';

			}
		});

	})();

	// Прибивка адаптивного футера к низу
	(function (footerSelector, wrapperSelector) {

		var footer = document.querySelector(footerSelector);
		var wrapper = document.querySelector(wrapperSelector);
		var height;
		var setSize;

		if (!wrapper || !footer) {
			return false;
		}

		setSize = function () {

			height = footer.offsetHeight;

			wrapper.style.paddingBottom = height + 'px';
			footer.style.marginTop = (height * (-1)) + 'px';

		}

		setSize();

		window.addEventListener('resize', setSize, false);

	})('#js-footer', '#js-wrapper');

});