(function(global) {

	var ScrollView = function() {
		return this;
	}

	ScrollView.prototype = {

		constructor: ScrollView,

		init: function(opts) {

			this.defaults = taiLib.extendFn({
				element: null,
				arrow: false,
				arrowScroll: 25,
				mainCls: 'scroll-view'
			}, opts);

			this.tags = {};
			this.values = {};

			if(!opts.element) {
				return false;
			}

			this.tags.element = this.defaults.element;
			this.tags.scrollBlock = this.tags.element.parentNode;
			this.tags.parent = this.tags.scrollBlock.parentNode;

			this.createDOM();
			this.getSize();
			this.setSize();
			this.eventsDocument();
			this.events();
			this.scroll();
			this.setSizeScrollbar();
			return this;

		},

		createDOM: function() {

			this.tags.arrow = taiLib.createElementFn('div', {'class': this.defaults.mainCls + '__arrow'}, this.tags.parent);
			this.tags.prev = taiLib.createElementFn('div', {'class': this.defaults.mainCls + '__prev'}, this.tags.arrow);
			this.tags.next = taiLib.createElementFn('div', {'class': this.defaults.mainCls + '__next'}, this.tags.arrow);

			this.tags.prev.innerHTML = '<b><i></i></b>';
			this.tags.next.innerHTML = '<b><i></i></b>';

			this.tags.scrollbar = taiLib.createElementFn('div', {'class': this.defaults.mainCls + '__scrollbar'}, this.tags.parent);
			this.tags.track = taiLib.createElementFn('div', {'class': this.defaults.mainCls + '__track'}, this.tags.scrollbar);
			this.tags.thumb = taiLib.createElementFn('div', {'class': this.defaults.mainCls + '__thumb'}, this.tags.track);

		},

		getSize: function() {

			this.values.widthParent = this.tags.scrollBlock.offsetWidth;
			this.values.width = this.tags.element.scrollWidth;

		},

		setSize: function() {

			this.tags.thumb.style.width = this.values.widthParent / this.values.width * 100 + '%';
			this.tags.thumb.style.left = (this.tags.scrollBlock.scrollLeft / this.values.width) * 100 + '%';

			if(this.values.widthParent >= this.values.width) {
				this.tags.track.style.display = 'none';
				this.tags.arrow.style.display = 'none';
			}
			else {
				this.tags.track.style.display = 'block';
				this.tags.arrow.style.display = 'block';
			}

		},

		updateSize: function() {
			obj.getSize();
			obj.setSize();
			return this;
		},

		setSizeScrollbar: function() {

			this.tags.scrollbar.style.height = taiLib.getScrollBarWidth() + 'px';

		},

		scroll: function() {

			var obj = this;

			this.tags.scrollBlock.addEventListener('scroll', function() {

				var x = (this.scrollLeft / obj.values.width) * 100;
				obj.tags.thumb.style.left = x + '%';

			}, false);

		},

		events: function() {

			var obj = this;

			this.tags.prev.addEventListener(eventsMouseTouch.end, function(e) {

				e.stopPropagation();

				taiLib.animate({
					duration: 100,
					from: {x: obj.tags.scrollBlock.scrollLeft},
					to: {x: obj.tags.scrollBlock.scrollLeft - obj.values.widthParent / (100 / obj.defaults.arrowScroll)},
					timing: function(timeFraction) {
						return timeFraction;
					},
					draw: function(progress, progressArray) {

						obj.tags.scrollBlock.scrollLeft = progress.x;

					},
					callback: function() {

					}
				});

			}, false);

			this.tags.next.addEventListener(eventsMouseTouch.end, function(e) {

				e.stopPropagation();

				taiLib.animate({
					duration: 100,
					from: {x: obj.tags.scrollBlock.scrollLeft},
					to: {x: obj.tags.scrollBlock.scrollLeft + obj.values.widthParent / (100 / obj.defaults.arrowScroll)},
					timing: function(timeFraction) {
						return timeFraction;
					},
					draw: function(progress, progressArray) {

						obj.tags.scrollBlock.scrollLeft = progress.x;

					},
					callback: function() {

					}
				});

			}, false);

		},

		eventsDocument: function() {

			var obj = this;

			window.addEventListener('resize', function() {
				obj.getSize();
				obj.setSize();
			});

		}
	}

	global.ScrollView = ScrollView;

})(window);

window.addEventListener('load', function () {

	var lists = document.querySelectorAll('.js-scroll-view__list');

	lists.forEach(function(node) {

		var scroll = new ScrollView();

		scroll.init({
			element: node,
			arrow: true
		});

	});

});