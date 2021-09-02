(function (global, classTooltipDefault, initAttributesDefault) {

    "use strict";

    var setPositionHorizontal,
        setPositionTop,
        setPositionBottom,
        setPositionLeft,
        setPositionRight,
        setPositionVerticalRight,
        setPositionVerticalLeft,
        setPositionElement,
        Tooltip,
        ready;


	/**
	 * @param {tooltip} сам тег тултипа, главный контейнер
	 * @param {arrow} стрелка, которая указывает направление
	 * @param {positionSize} координаты элемента + высоты + ширина, над которым выведется тултип
	 */
	setPositionHorizontal = function (tooltip, arrow, positionSize) {

		tooltip.style.right = '';

		var x = (positionSize.right + positionSize.width / 2) - (tooltip.offsetWidth / 2);

		if (x < 0 || document.body.offsetWidth <= tooltip.offsetWidth) {
			x = 0;
			arrow.style.right = positionSize.right + (positionSize.width / 2) + 'px';
			tooltip.style.right = '0px';
			return;
		}

		arrow.style.right = (positionSize.right - x) + (positionSize.width / 2) + 'px';
		tooltip.style.right = x + 'px';

	};

	/**
	 * @param {tooltip} сам тег тултипа, главный контейнер
	 * @param {arrow} стрелка, которая указывает направление
	 * @param {opts} опции, opts.mainClassName главное название класс для тега, opts.offset смещение относительно элемента
	 * @param {positionSize} координаты элемента + высоты + ширина, над которым выведется тултип
	 */
	setPositionTop = function (tooltip, arrow, opts, positionSize) {

		arrow.className = opts.mainClassName + '__arrow ' + opts.mainClassName + '__arrow_bottom';
		setPositionHorizontal(tooltip, arrow, positionSize);
		tooltip.style.top = ((window.pageYOffset + positionSize.top) - tooltip.offsetHeight - opts.offset) + 'px';

	};

	/**
	 * @param {tooltip} сам тег тултипа, главный контейнер
	 * @param {arrow} стрелка, которая указывает направление
	 * @param {opts} опции, opts.mainClassName главное название класс для тега, opts.offset смещение относительно элемента
	 * @param {positionSize} координаты элемента + высоты + ширина, над которым выведется тултип
	 */
	setPositionBottom = function (tooltip, arrow, opts, positionSize) {

		arrow.className = opts.mainClassName + '__arrow ' + opts.mainClassName + '__arrow_top';
		setPositionHorizontal(tooltip, arrow, positionSize);
		tooltip.style.top = (window.pageYOffset + positionSize.top + positionSize.height + opts.offset) + 'px';

	};

	/**
	 * @param {tooltip} сам тег тултипа, главный контейнер
	 * @param {arrow} стрелка, которая указывает направление
	 * @param {opts} опции, opts.mainClassName главное название класс для тега, opts.offset смещение относительно элемента
	 * @param {positionSize} координаты элемента + высоты + ширина, над которым выведется тултип
	 */
	setPositionLeft = function (tooltip, arrow, opts, positionSize) {
		var t;
		arrow.className = opts.mainClassName + '__arrow ' + opts.mainClassName + '__arrow_right';
		t = setPositionVerticalLeft(tooltip, arrow, opts, positionSize);
		if (t) {
			tooltip.style.top = ((window.pageYOffset + positionSize.top + (positionSize.height / 2)) - (tooltip.offsetHeight / 2)) + 'px';
		}

	};

	/**
	 * @param {tooltip} сам тег тултипа, главный контейнер
	 * @param {arrow} стрелка, которая указывает направление
	 * @param {opts} опции, opts.mainClassName главное название класс для тега, opts.offset смещение относительно элемента
	 * @param {positionSize} координаты элемента + высоты + ширина, над которым выведется тултип
	 */
	setPositionRight = function (tooltip, arrow, opts, positionSize) {
		var t;
		arrow.className = opts.mainClassName + '__arrow ' + opts.mainClassName + '__arrow_left';
		t = setPositionVerticalRight(tooltip, arrow, opts, positionSize);
		if (t) {
			tooltip.style.top = ((window.pageYOffset + positionSize.top + (positionSize.height / 2)) - (tooltip.offsetHeight / 2)) + 'px';
		}

	};

	/**
	 * @param {tooltip} сам тег тултипа, главный контейнер
	 * @param {arrow} стрелка, которая указывает направление
	 * @param {opts} опции, opts.mainClassName главное название класс для тега, opts.offset смещение относительно элемента
	 * @param {positionSize} координаты элемента + высоты + ширина, над которым выведется тултип
	 */
	setPositionVerticalRight = function (tooltip, arrow, opts, positionSize) {

		tooltip.style.right = '';

		var x = positionSize.right - tooltip.offsetWidth - opts.offset;

		if (x < 0) {
			x = positionSize.right + positionSize.width + opts.offset;
			arrow.className = opts.mainClassName + '__arrow ' + opts.mainClassName + '__arrow_right';
		}

		if (positionSize.width + tooltip.offsetWidth >= document.body.clientWidth) {
			if ((positionSize.top - opts.offset - tooltip.offsetHeight) > 0) {
				setPositionTop(tooltip, arrow, opts, positionSize);
			} else {
				setPositionBottom(tooltip, arrow, opts, positionSize);
			}
			return false;
		}

		tooltip.style.right = x + 'px';
		return true;
	};

	/**
	 * @param {tooltip} сам тег тултипа, главный контейнер
	 * @param {arrow} стрелка, которая указывает направление
	 * @param {opts} опции, opts.mainClassName главное название класс для тега, opts.offset смещение относительно элемента
	 * @param {positionSize} координаты элемента + высоты + ширина, над которым выведется тултип
	 */
	setPositionVerticalLeft = function (tooltip, arrow, opts, positionSize) {

        var x;

		tooltip.style.right = '';

		x = positionSize.right + positionSize.width + opts.offset;
		arrow.className = opts.mainClassName + '__arrow ' + opts.mainClassName + '__arrow_right';

		if (positionSize.width + tooltip.offsetWidth >= document.body.clientWidth) {
			if ((positionSize.top - opts.offset - tooltip.offsetHeight) > 0) {
				setPositionTop(tooltip, arrow, opts, positionSize);
			} else {
				setPositionBottom(tooltip, arrow, opts, positionSize);
			}
			return false;
		}

		tooltip.style.right = x + 'px';
		return true;

	};

	/**
	 * @param {element} тег, относительно которого вычисляются координаты, ширина его и его высота
	 * @param {tooltip} сам тег тултипа, главный контейнер
	 * @param {arrow} стрелка, которая указывает направление
	 * @param {opts} опции, opts.mainClassName главное название класс для тега, opts.offset смещение относительно элемента
	 */
	setPositionElement = function (element, tooltip, arrow, opts) {

		var positionSize = taiLib.getSizePositionElement(element);
		arrow.style.cssText = '';

		if (opts.position === 'right') {
			setPositionRight(tooltip, arrow, opts, positionSize);
			return;
		}

		if (opts.position === 'left') {
			setPositionLeft(tooltip, arrow, opts, positionSize);
			return;
		}

		if (opts.position === 'top') {

			if ((positionSize.top - opts.offset - tooltip.offsetHeight) > 0) {
				setPositionTop(tooltip, arrow, opts, positionSize);
			} else {
				setPositionBottom(tooltip, arrow, opts, positionSize);
			}
			return;
		}

		if (opts.position === 'bottom') {
			if ((positionSize.top + positionSize.height + opts.offset + tooltip.offsetHeight) < window.innerHeight) {
				setPositionBottom(tooltip, arrow, opts, positionSize);
			} else {
				setPositionTop(tooltip, arrow, opts, positionSize);
			}
			return;
		}

	};

	/**
	 * @param {mainClass} название класса, которое будет у тултипа
	 */
	Tooltip = function (mainClass) {

        this.values = {};
        this.values.triggerClose = false;
		this.values.mainClassName = mainClass;

		this.tags = {};
		this.tags.tooltip = taiLib.createElementFn('div', {'class': mainClass});
		this.tags.tooltip__arrow = taiLib.createElementFn('div', {'class': mainClass + '__arrow'}, this.tags.tooltip);
		this.tags.tooltip__section = taiLib.createElementFn('div', {'class': mainClass + '__section'}, this.tags.tooltip);
		this.tags.tooltip__close = taiLib.createElementFn('div', {'class': mainClass + '__close'}, this.tags.tooltip__section);
		this.tags.tooltip__text = taiLib.createElementFn('div', {'class': mainClass + '__text'}, this.tags.tooltip__section);

	};

	Tooltip.prototype = {

		constructor: Tooltip,

		init: function (element, opts) {

			if (!element) {
				return this;
			}

			this.tags.element = element;

			opts = opts || {};

			/**
			 * значения по дефолту
			 */
			this.opts = taiLib.extendFn({
				offset: 5,
				close: true,
				position: 'top'
			}, opts);

            this.opts.mainClassName = this.values.mainClassName;

			this.events();

			return this;
		},

		/**
		 * @return вешаем событие на крестик попапа
		 */
		events: function () {

			var obj = this;

			if (obj.opts.close) {
				obj.tags.tooltip__close.style.display = 'block';
			} else {
				obj.tags.tooltip__close.style.display = 'none';
			}

			this.tags.tooltip__close.addEventListener(eventsMouseTouch.end, function (e) {
				e.stopPropagation();
				obj.close();
			});

		},

		/**
		 * метод вставки текста
		 * @param  {text} текст, который будет вставлен в тултип
		 * @return {[type]}
		 */
		html: function (text) {

			if(!this.tags.element) {
				return this;
			}

			this.tags.tooltip__text.innerHTML = text;
			return this;
		},

		/**
		 * метод открытия тултипа, там же вычисляются координаты относительно окна
		 * @return {[type]}
		 */
		show: function () {

			if(!this.tags.element) {
				return this;
			}

			var obj = this;
			document.body.insertBefore(this.tags.tooltip, document.body.firstChild);

			setPositionElement(this.tags.element, this.tags.tooltip, this.tags.tooltip__arrow, this.opts);

			window.addEventListener('resize', function () {
				setPositionElement(obj.tags.element, obj.tags.tooltip, obj.tags.tooltip__arrow, obj.opts);
			});

			setTimeout(function () {
				obj.tags.tooltip.classList.add('active');
            }, 10);

            this.values.triggerClose = true;
			return this;
		},

		/**
		 * метод обновления позиционирования
		 */
		updatePosition: function () {

			if(!this.tags.element) {
				return this;
			}

			setPositionElement(this.tags.element, this.tags.tooltip, this.tags.tooltip__arrow, this.opts);
			return this;
		},

		/**
		 * принудительно закрываем тултип
		 */
		close: function () {

			if(!this.tags.element) {
				return this;
			}

            var obj = this;

            if (!this.values.triggerClose) {
                return;
            }

			this.tags.tooltip.classList.remove('active');
			setTimeout(function () {
				document.body.removeChild(obj.tags.tooltip);
            }, 200);
            this.values.triggerClose = false;
			return this;
		}

	};

	global.taiLib.Tooltip = Tooltip;

	/**
	 * вешаются события, которые будут срабатывать даже для вновь созданных элементов
	 * пример
	 * <div data-tooltip data-offset="10" data-pos="right" data-event="click" data-text="Text"></div>
	 */
	ready = function () {

		var timer,
            tooltipElements;

		tooltipElements = new taiLib.Tooltip(classTooltipDefault);

		document.body.addEventListener('mouseenter', function (e) {

			if (e.target.matches(initAttributesDefault)) {

				timer = setTimeout(function () {

					var opts = {
						position: e.target.getAttribute('data-pos') || 'top',
						event: e.target.getAttribute('data-event') || 'hover',
						offset: parseInt(e.target.getAttribute('data-offset')) || 5,
						close: false
					};

					if (opts.event === 'hover') {

						tooltipElements
							.init(e.target, opts)
							.html(e.target.getAttribute('data-text'))
							.show();

					}

				}, 300);

			}

		}, true);

		document.body.addEventListener('mouseleave', function (e) {

			if (e.target.matches(initAttributesDefault)) {

				clearTimeout(timer);

				if (e.target.getAttribute('data-event') === 'hover' || !e.target.getAttribute('data-event')) {
					tooltipElements.close();
				}

			}

		}, true);

		document.body.addEventListener(eventsMouseTouch.end, function (e) {

			if (e.target.matches(initAttributesDefault)) {

				e.preventDefault();

				if (e.target.getAttribute('data-event') === 'click' || eventsMouseTouch.end === 'touchend') {

					var opts = {
						position: e.target.getAttribute('data-pos') || 'top',
						offset: parseInt(e.target.getAttribute('data-offset')) || 5,
						close: true
					};

					tooltipElements
						.init(e.target, opts)
						.html(e.target.getAttribute('data-text'))
						.show();

				}

			} else {
				tooltipElements.close();
			}

		}, true);

	};

	document.addEventListener('DOMContentLoaded', ready);

})(window, 'tooltip', '[data-tooltip]');

window.addEventListener('load', function () {

	/**
	 * описание тултипа:
	 * можем сделать один глобальный тултип, например window.tooltip = new taiLib.Tooltip('tooltip'); , 'tooltip' - можем задать название класса тултипа, если вдруг придется сделать еще извращенный тултип.
	 * Использовать глобальный один объект и через него только выводить тултипы, если на странице есть тултипы, заданные через тег, то они
	 * <div data-tooltip data-offset="10" data-pos="right" data-event="click" data-text="Text"></div> живут отдельно своей жизнью и нас не касаются.
	 * Можно задать отдельные тултипы, загоняя их в переменные var tooltip1, tooltip2, ......, и у каждого будут свои методы и будут жить так же
	 * сами по себе
	 * Теперь сами методы
	 * var tooltip = new taiLib.Tooltip('tooltip'); создали тултип
	 * tooltip.init(element, opts); инициализация, element - тег, по координатам которого выведем,
	 * opts опции:
	 *  {offset: 10, position: 'right', close: true} offset - смещение, относительно тега, position - с какой стороны выводим тег
	 *  close - true, кнопка закрытия есть, false - нет
	 *
	 * tooltip.html('text'); - текст, который надо вывести
	 * tooltip.show(); - принудительно показываем на странице тултип
	 * tooltip.update(); - обновляем координаты, если вдруг вставили новый текст
	 * tooltip.close(); - закрываем тултип
	 */

    var tooltip = new taiLib.Tooltip('tooltip');

	tooltip
		.init(document.querySelector('.js-content__example'), {
			position: 'right',
			offset: 10,
			close: true
		})
		.html('Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem')
		.show();

    setTimeout(function () {

        tooltip
            .html('Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem')
            .updatePosition();

    }, 2000);

    setTimeout(function () {

        tooltip.close();

    }, 4000);

});