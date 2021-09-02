// http://paulirish.com/2011/requestanimationframe-for-smart-animating/
// http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating

// requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel

// MIT license

(function() {
	var lastTime = 0;
	var vendors = ['ms', 'moz', 'webkit', 'o'];
	for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
		window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
		window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
								   || window[vendors[x]+'CancelRequestAnimationFrame'];
	}

	if (!window.requestAnimationFrame)
		window.requestAnimationFrame = function(callback, element) {
			var currTime = new Date().getTime();
			var timeToCall = Math.max(0, 16 - (currTime - lastTime));
			var id = window.setTimeout(function() { callback(currTime + timeToCall); },
			  timeToCall);
			lastTime = currTime + timeToCall;
			return id;
		};

	if (!window.cancelAnimationFrame)
		window.cancelAnimationFrame = function(id) {
			clearTimeout(id);
		};
}());

window.performance = window.performance || {};
performance.now = (function() {
  return performance.now       ||
		 performance.mozNow    ||
		 performance.msNow     ||
		 performance.oNow      ||
		 performance.webkitNow ||
		 function() { return new Date().getTime(); };
})();

;(function(global) {

	function Lib() {
		return this;
	}

	Lib.prototype = {

		animate: function(options) {

			options = $.extend({
				callback: function() {},
				progress: false,
				fromArray: [],
				toArray: [],
				easy: "linear"
			}, options);

			var start = performance.now();

			var easing = {

				linear: function(p) {
					return p;
				},

				quadratic: function(p) {
					return Math.pow(p, 2);
				},

				swing: function(p) {
					return Math.sqrt(p);
				}
			};

			// если поступает поток анимаций
			if(options.range) {

				for(var i = 0, l = options.range.length; i < l ; i += 1) {
					options.range[i].duration = options.range[i].end - options.range[i].start;
					options.range[i].startRange = options.range[i].start / options.duration;
					options.range[i].endRange = options.range[i].end / options.duration;
					options.range[i].easy = options.range[i].easy || "linear";
				}

			}

			requestAnimationFrame(function animate(time) {

				// timeFraction от 0 до 1
				var timeFraction = (time - start) / options.duration;

				var timers = [];
				var result = {};
				var resultArray = [];
				var progress;
				var progressArray = [];
				var step;

				if (timeFraction > 1) {

					timeFraction = 1;

					options.callback();

				}

				if(timeFraction < 0) {

					timeFraction = 0;

				}

				// если поступает поток анимаций
				if(options.range) {

					for(var i = 0, l = options.range.length; i < l ; i += 1) {

						timers[i] = {};
						progressArray[i] = {};

						step = (1 / (options.range[i].duration / options.duration));

						timers[i].timeFraction = (timeFraction - options.range[i].startRange) * step;

						if(timeFraction <= options.range[i].startRange) {

							timers[i].timeFraction = 0;

						}

						if(timeFraction >= options.range[i].endRange) {

							timers[i].timeFraction = 1;

						}

						progressArray[i].progress = easing[options.range[i].easy](timers[i].timeFraction);

					}

				}

				// текущее состояние анимации
				progress = easing[options.easy](timeFraction);

				if(options.from && options.to) {

					for(var i in options.from) {

						if(options.from.hasOwnProperty(i) && options.to.hasOwnProperty(i)) {

							if(options.from[i] > options.to[i]) {

								result[i] = options.from[i] - (Math.abs(options.from[i] * (-1) + options.to[i]) * progress);

							}
							else {

								result[i] = options.from[i] + (Math.abs(options.from[i] * (-1) + options.to[i]) * progress);

							}

						}

					}

					// если поступает поток анимаций
					if(options.fromArray.length && options.toArray.length) {

						for(var i = 0, l = options.range.length; i < l ; i += 1) {

							resultArray[i] = {};

							for(var j in options.fromArray[i]) {

								if(options.fromArray[i].hasOwnProperty(j) && options.toArray[i].hasOwnProperty(j)) {

									if(options.fromArray[i][j] > options.toArray[i][j]) {

										resultArray[i][j] = options.fromArray[i][j] - (Math.abs(options.fromArray[i][j] * (-1) + options.toArray[i][j]) * progressArray[i].progress);

									}
									else {

										resultArray[i][j] = options.fromArray[i][j] + (Math.abs(options.fromArray[i][j] * (-1) + options.toArray[i][j]) * progressArray[i].progress);

									}

								}

							}

						}

						options.draw(result, resultArray);

					}
					else {

						options.draw(result);

					}

				}

				if(options.progress) {

					options.draw(progress);

				}

				if (timeFraction < 1) {

					requestAnimationFrame(animate);

				}

			});
		}

	}

	global.Lib = new Lib();

})(window);

// $(document).ready(function() {

		// new Lib.animate({
		// 	duration: 4500,
		// 	range: [
		// 		{start: 0, end: 2000},
		// 		{start: 200, end: 2200},
		// 		{start: 270, end: 2270},
		// 		{start: 400, end: 2400},
		// 		{start: 900, end: 3500, easy: "swing"},
		// 		{start: 1000, end: 3600, easy: "swing"},
		// 		{start: 1200, end: 3800, easy: "swing"},
		// 		{start: 1300, end: 3900, easy: "swing"},
		// 		{start: 1500, end: 4100, easy: "swing"},
		// 		{start: 1700, end: 4300, easy: "swing"},
		// 		{start: 1900, end: 4500, easy: "swing"},
		// 		{start: 3000, end: 4500, easy: "swing"},
		// 	],
		// 	from: {x: 0},
		// 	to: {x: 3000},
		// 	fromArray: [
		// 		{ y: height, x: 0 },
		// 		{ y: height, x: 0 },
		// 		{ y: height, x: 0 },
		// 		{ y: height, x: 0 },
		// 		{ y: height, x: 0 },
		// 		{ y: height, x: 0, translateY: 100 },
		// 		{ y: height, x: 0 },
		// 		{ y: height, x: 0 },
		// 		{ y: height, x: 0 },
		// 		{ y: height, x: 0 },
		// 		{ y: height, x: 0 },
		// 		{ y: height, x: 0 },
		// 	],
		// 	toArray: [
		// 		{ y: limitY, x: limitX },
		// 		{ y: limitY, x: limitX },
		// 		{ y: limitY, x: limitX },
		// 		{ y: limitY, x: limitX },
		// 		{ y: limitY - 5, x: limitX + (5 * step) },
		// 		{ y: limitY, x: limitX, translateY: -30 },
		// 		{ y: limitY, x: limitX },
		// 		{ y: limitY, x: limitX },
		// 		{ y: limitY / 2, x: width + ((height / 2) * step)},
		// 		{ y: limitY / 3, x: width + ((height / 3) * step)},
		// 		{ y: 0, x: width },
		// 		{ y: 0, x: width },
		// 	],
		// 	draw: function(progress, vals) {

		//        	renderPic(img[0]);

		//         for (var i = 0, l = Animates.length; i < l; i += 1) {

		//             var v = Animates[i];

		//             v.y = vals[i].y;
		//             v.x = vals[i].x;

		//             if(vals[i].translateY) {
		//             	v.translateY = vals[i].translateY;
		//             }

		//             renderContent(v);

		//         }

		// 	}
		// });

	Lib.animate({
		duration: 100,
		from: {x: 1000},
		to: {x: 15},
		timing: function(timeFraction) {
			return timeFraction;
		},
		draw: function(progress, progressArray) {

			console.log(progress.x);

		},
		callback: function() {

		}
	});

// });

/*
	Masked Input plugin for jQuery
	Copyright (c) 2007-2013 Josh Bush (digitalbush.com)
	Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
	Version: 1.3.1
*/
;(function(e){function t(){var e=document.createElement("input"),t="onpaste";return e.setAttribute(t,""),"function"==typeof e[t]?"paste":"input"}var n,a=t()+".mask",r=navigator.userAgent,i=/iphone/i.test(r),o=/android/i.test(r);e.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},dataName:"rawMaskFn",placeholder:"_"},e.fn.extend({caret:function(e,t){var n;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof e?(t="number"==typeof t?t:e,this.each(function(){this.setSelectionRange?this.setSelectionRange(e,t):this.createTextRange&&(n=this.createTextRange(),n.collapse(!0),n.moveEnd("character",t),n.moveStart("character",e),n.select())})):(this[0].setSelectionRange?(e=this[0].selectionStart,t=this[0].selectionEnd):document.selection&&document.selection.createRange&&(n=document.selection.createRange(),e=0-n.duplicate().moveStart("character",-1e5),t=e+n.text.length),{begin:e,end:t})},unmask:function(){return this.trigger("unmask")},mask:function(t,r){var c,l,s,u,f,h;return!t&&this.length>0?(c=e(this[0]),c.data(e.mask.dataName)()):(r=e.extend({placeholder:e.mask.placeholder,completed:null},r),l=e.mask.definitions,s=[],u=h=t.length,f=null,e.each(t.split(""),function(e,t){"?"==t?(h--,u=e):l[t]?(s.push(RegExp(l[t])),null===f&&(f=s.length-1)):s.push(null)}),this.trigger("unmask").each(function(){function c(e){for(;h>++e&&!s[e];);return e}function d(e){for(;--e>=0&&!s[e];);return e}function m(e,t){var n,a;if(!(0>e)){for(n=e,a=c(t);h>n;n++)if(s[n]){if(!(h>a&&s[n].test(R[a])))break;R[n]=R[a],R[a]=r.placeholder,a=c(a)}b(),x.caret(Math.max(f,e))}}function p(e){var t,n,a,i;for(t=e,n=r.placeholder;h>t;t++)if(s[t]){if(a=c(t),i=R[t],R[t]=n,!(h>a&&s[a].test(i)))break;n=i}}function g(e){var t,n,a,r=e.which;8===r||46===r||i&&127===r?(t=x.caret(),n=t.begin,a=t.end,0===a-n&&(n=46!==r?d(n):a=c(n-1),a=46===r?c(a):a),k(n,a),m(n,a-1),e.preventDefault()):27==r&&(x.val(S),x.caret(0,y()),e.preventDefault())}function v(t){var n,a,i,l=t.which,u=x.caret();t.ctrlKey||t.altKey||t.metaKey||32>l||l&&(0!==u.end-u.begin&&(k(u.begin,u.end),m(u.begin,u.end-1)),n=c(u.begin-1),h>n&&(a=String.fromCharCode(l),s[n].test(a)&&(p(n),R[n]=a,b(),i=c(n),o?setTimeout(e.proxy(e.fn.caret,x,i),0):x.caret(i),r.completed&&i>=h&&r.completed.call(x))),t.preventDefault())}function k(e,t){var n;for(n=e;t>n&&h>n;n++)s[n]&&(R[n]=r.placeholder)}function b(){x.val(R.join(""))}function y(e){var t,n,a=x.val(),i=-1;for(t=0,pos=0;h>t;t++)if(s[t]){for(R[t]=r.placeholder;pos++<a.length;)if(n=a.charAt(pos-1),s[t].test(n)){R[t]=n,i=t;break}if(pos>a.length)break}else R[t]===a.charAt(pos)&&t!==u&&(pos++,i=t);return e?b():u>i+1?(x.val(""),k(0,h)):(b(),x.val(x.val().substring(0,i+1))),u?t:f}var x=e(this),R=e.map(t.split(""),function(e){return"?"!=e?l[e]?r.placeholder:e:void 0}),S=x.val();x.data(e.mask.dataName,function(){return e.map(R,function(e,t){return s[t]&&e!=r.placeholder?e:null}).join("")}),x.attr("readonly")||x.one("unmask",function(){x.unbind(".mask").removeData(e.mask.dataName)}).bind("focus.mask",function(){clearTimeout(n);var e;S=x.val(),e=y(),n=setTimeout(function(){b(),e==t.length?x.caret(0,e):x.caret(e)},10)}).bind("blur.mask",function(){y(),x.val()!=S&&x.change()}).bind("keydown.mask",g).bind("keypress.mask",v).bind(a,function(){setTimeout(function(){var e=y(!0);x.caret(e),r.completed&&e==x.val().length&&r.completed.call(x)},0)}),y()}))}})})(jQuery);

;(function($) {
	$.fn.setEqualHeight = function(params) {
		params = $.extend({itemsSel: false, itemsInLineCount: false, callback: function() {}}, params);

		if(params.itemsSel && params.itemsInLineCount) {
			this.each(function() {
				var items = {};
				var counter = 1;

				$(params.itemsSel, $(this)).each(function() {
					if(counter == params.itemsInLineCount) {
						items = items.add($(this));
						items.setEqualHeight();
						counter = 1;
					} else {
						if(counter == 1)
							items = $(this);
						else
							items = items.add($(this));

						counter++;
					}
				});

				if(items.length > 0)
					items.setEqualHeight();
			});

			return false;
		}

		var maxHeight = 0;

		this.each(function() {
			if (maxHeight < $(this).height()) {
				maxHeight = $(this).height();
			}
		});

		this.each(function() {
			$(this).height(maxHeight);
			params.callback.call(this, maxHeight);
		});
	}
})(jQuery);

// combox custom
;(function($){

	$.fn.combox = function(o) {

		var comBox = $(this),
			list_array = $(comBox).children("ul");

		this.each(function() {

			var opts = o || {},
				change = this.children[0],
				list = this.getElementsByTagName("ul")[0],
				listItems = list.children,
				_this = this;

			opts = {
				count: opts.countSelect || 0,
				focusClass: opts.focusClass || "combox_focus",
				focusTitleClass: opts.focusTitleClass || "combox__title_focus",
				selectedClass: opts.selectedClass || "combox__item_state_current",
				startFn: opts.startFn || function() {},
				changeFn: opts.changeFn || function() {}
			}

			$(this).click(function(e){

				e.stopPropagation();

				$(change).addClass(opts.focusTitleClass);
				$(this).addClass(opts.focusClass);

				for(var i = 0, l = list_array.length; i < l ; i += 1) {

					if(list_array[i] !== list) {

						list_array[i].style.display = "none";

					}

				}

				if(list.style.display == "block") {

					list.style.display = "none";
					$(change).removeClass(opts.focusTitleClass);
					$(_this).removeClass(opts.focusClass);

				}
				else{

					list.style.display = "block";

				}

			});

			$(listItems).each(function(i){

				if($(this).hasClass(opts.selectedClass)) {
					opts.count = i;
				}

				$(this).click(function(e){

					e.stopPropagation();

					$(listItems).removeClass(opts.selectedClass);
					$(this).addClass(opts.selectedClass);

					list.style.display = "none";

					change.innerHTML = this.innerHTML;

					opts.changeFn(this, i, _this);

					$(change).removeClass(opts.focusTitleClass);
					$(_this).removeClass(opts.focusClass);

				});

			});

			$(listItems[opts.count]).addClass(opts.selectedClass);

			change.innerHTML = listItems[opts.count].innerHTML;

			opts.startFn(listItems[opts.count], opts.count, this);

			$(document).click(function() {
				$(change).removeClass(opts.focusTitleClass);
				$(_this).removeClass(opts.focusClass);
			});

		});

		$(document).click(function() {

			for(var i = 0, l = list_array.length; i < l ; i += 1) {

				list_array[i].style.display = "none";

			}

		});

	}

})(jQuery);

;(function($) {

	$.fn.tabs = function(opts) {

		opts = $.extend({
			classLink: "active",
			classHideTab: "tabs__inner_show",
			parentClassActive: null,
			parents: null
		}, opts);

		var tab_blocks = [];
		var links = this;
		var bool;

		$(this).each(function(i) {

			tab_blocks[i] = document.getElementById(this.getAttribute("href").replace("#", ""));

			if($(this).hasClass(opts.classLink) || $(this).parents(opts.parents).hasClass(opts.parentClassActive)) {

				$(tab_blocks[i]).addClass(opts.classHideTab);
				bool = i;

			}

			$(this).click(function() {

				if(opts.parentClassActive && opts.parents) {
					$(links).parents(opts.parents).removeClass(opts.parentClassActive);
					$(this).parents(opts.parents).addClass(opts.parentClassActive);
				}
				else {
					$(links).removeClass(opts.classLink);
					$(this).addClass(opts.classLink);
				}

				$(tab_blocks).removeClass(opts.classHideTab);
				$(tab_blocks[i]).addClass(opts.classHideTab);

				return false;

			});

		});

		if(!bool) {

			$(tab_blocks[0]).addClass(opts.classHideTab);

			if(opts.parentClassActive && opts.parents) {
				$(this).eq(0).parents(opts.parents).addClass(opts.parentClassActive);
			}
			else {
				$(this).eq(0).addClass(opts.classLink);
			}

		}

	}

})(jQuery);

;(function(global) {

	var createElement = function(cls, parent) {
		var obj = document.createElement('div');
		obj.className = cls;
		if (parent) {
			parent.appendChild(obj);
		}
		return obj;
	}

	function Popup() {

		this.tags = {};
		this.tags.popup = createElement('popup', document.body);
		this.tags.popup__overlay = createElement('popup__overlay', this.tags.popup);
		this.tags.popup__table = createElement('popup__table', this.tags.popup);
		this.tags.popup__cell = createElement('popup__cell', this.tags.popup__table);
		this.tags.popup__block = createElement('popup__block', this.tags.popup__cell);
		this.tags.popup__close = createElement('popup__close', this.tags.popup__block);
		this.tags.popup__change = createElement('popup__change', this.tags.popup__block);

		this.eventsTrigger = "click";

		this.events();
		this.scrollWidth = this.scrollWidthElement();

		this.defaults = {
			closeShow: true,
			background: '',
			closeButtons: '',
			offsetY: 0,
			offsetX: 0,
			coordElement: ''
		};

	}

	Popup.prototype = {

		options: function(opts) {

			this.defaults = this.extend({
				closeShow: true,
				background: '',
				closeButtons: '',
				offsetY: 0,
				offsetX: 0,
				coordElement: ''
			}, opts);

			if (this.defaults.background) {
				this.tags.popup.style.background = this.defaults.background;
			}

			return this;

		},

		extend: function(defaults, source) {

			for (var key in source) {
				if (source.hasOwnProperty(key)) {
					defaults[key] = source[key];
				}
			}

			return defaults;
		},

		addCloseButtons: function() {

			var obj = this;
			var buttons = (this.defaults.closeButtons).split(',');

			buttons.forEach(function(item, index) {

				var selectors = document.querySelectorAll(item.replace(/\s+/g, ''));

				Array.prototype.forEach.call(selectors, function(element, i) {

					element.addEventListener(obj.eventsTrigger, function() {

						obj.close();

						return false;

					}, false);

				});

			});

		},

		coordSet: function() {

			var obj = this;
			var button = document.querySelector(this.defaults.coordElement);

			this.coords = button.getBoundingClientRect();

			this.tags.popup__block.style.left = this.coords.left + this.defaults.offsetX + 'px';
			this.tags.popup__block.style.top = this.coords.top + this.defaults.offsetY + 'px';
			this.tags.popup__block.style.position = 'absolute';

			return this;

		},

		coordReset: function() {

			this.defaults = {
				closeShow: true,
				background: '',
				closeButtons: '',
				offsetY: 0,
				offsetX: 0,
				coordElement: ''
			};

			this.tags.popup.style.background = '';

			this.tags.popup__block.style.left = '';
			this.tags.popup__block.style.top = '';
			this.tags.popup__block.style.position = '';
			return this;
		},

		setBodyStyle: function() {

			var trigger = window.innerHeight < document.body.scrollHeight;

			document.body.classList.add('popup__body_hidden');

			if(trigger) {
				document.body.style.paddingRight = this.scrollWidth + 'px';
			}
			return this;

		},

		clearBodyStyle: function() {

			document.body.classList.remove('popup__body_hidden');
			document.body.style.paddingRight = '';
			return this;

		},

		html: function(response, callback) {

			if(this.defaults.closeShow) {
				this.tags.popup__close.style.display = 'block';
			}
			else {
				this.tags.popup__close.style.display = 'none';
			}

			this.setBodyStyle();

			if(this.defaults.coordElement) {

				this.coordSet();

			}

			this.tags.popup__change.innerHTML = response;

			if(callback) {
				callback();
			}

			if (this.defaults.closeButtons) {
				this.addCloseButtons();
			}

			return this;

		},

		append: function(response, callback) {

			if(this.defaults.closeShow) {
				this.tags.popup__close.style.display = 'block';
			}
			else {
				this.tags.popup__close.style.display = 'none';
			}

			this.setBodyStyle();

			if(this.defaults.coordElement) {

				this.coordSet();

			}

			this.tags.popup__change.innerHTML += response;

			if(callback) {
				callback();
			}

			if (this.defaults.closeButtons) {
				this.addCloseButtons();
			}

			return this;
		},

		clear: function() {

			this.tags.popup__change.innerHTML = '';
			return this;

		},

		show: function(callback) {

			this.tags.popup.classList.add('popup_active');

			if(callback) {
				callback();
			}

			return this;

		},

		close: function(callback) {

			this.tags.popup.classList.remove('popup_active');

			this.defaults = {
				closeShow: true,
				background: '',
				closeButtons: '',
				offsetX: 0,
				offsetY: 0,
				coordElement: ''
			};

			if(callback) {
				callback();
			}

			this.clearBodyStyle();

			return this;

		},

		events: function() {

			var obj = this;

			this.tags.popup__close.addEventListener(this.eventsTrigger, function() {

				obj.close();
				return false;

			}, false);

			this.tags.popup__overlay.addEventListener(this.eventsTrigger, function() {

				obj.close();
				return false;

			}, false);

			document.addEventListener('keydown', function(e) {

				if (e.which == 27) {
					obj.close();
				}

			}, false);

		},

		scrollWidthElement: function() {

			var div = document.createElement("div");
			div.style.overflowY = "scroll";
			div.style.width = "50px";
			div.style.height = "50px";
			div.style.visibility = "hidden";

			document.body.appendChild(div);
			var scrollWidth = div.offsetWidth - div.clientWidth;
			document.body.removeChild(div);

			return scrollWidth;

		}
	}

	window.Popup = Popup;

})(window);

;this.Element && function(ElementPrototype) {
	ElementPrototype.matchesSelector = ElementPrototype.matchesSelector ||
	ElementPrototype.mozMatchesSelector ||
	ElementPrototype.msMatchesSelector ||
	ElementPrototype.oMatchesSelector ||
	ElementPrototype.webkitMatchesSelector ||
	function (selector) {
		var node = this, nodes = (node.parentNode || node.document).querySelectorAll(selector), i = -1;

		while (nodes[++i] && nodes[i] != node);

		return !!nodes[i];
	}
}(Element.prototype);

// tooltip
// data-tooltip="tooltip" data-offset="10" data-pos="top" data-text="" data-event="click", data-classname=""
// data-tooltip="tooltip" --> это привязка события, при котором вызывается функция
// data-offset="10" --> смещение, относительно тега
// data-pos="top" --> с какой стороны должен выводится попап
// data-event="click" --> работает по клику или наведению
// data-classname="" --> дополнительный класс родительскому тегу
// data-text="text" --> тут лежит текст

;(function(global) {

	/* From Modernizr */
	var whichTransitionEvent = function(){
		var t;
		var el = document.createElement('fakeelement');
		var transitions = {
		'transition':'transitionend',
		'OTransition':'oTransitionEnd',
		'MozTransition':'transitionend',
		'WebkitTransition':'webkitTransitionEnd'
		}

		for(t in transitions){
			if( el.style[t] !== undefined ){
				return transitions[t];
			}
		}
	};

	/* Listen for a transition! */
	var transitionEvent = whichTransitionEvent();

	var popup;
	var popup__inner;
	var popup__close;
	var popup__change;

	var createElement = function(tag, cls, parent) {

		var obj = document.createElement(tag);
		obj.classList.add(cls);

		if(parent) {
			parent.appendChild(obj);
		}

		return obj;
	};

	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
			return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
		},
		any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

	var eventsTouch = isMobile.any() ? "touchend" : "mousedown";
	var events;
	var trigger = false;
	var target;
	var MARGIN = 40; // используется для анимации

	// задаем координаты попапу
	var posSet = function(element, pos, offset) {

		var coords = element.getBoundingClientRect();
		var width = element.offsetWidth;
		var height = element.offsetHeight;
		var popupHeight = popup.offsetHeight;
		var popupWidth = popup.offsetWidth;
		var x, y;

		var setCoords = function(x, y) {
			popup.style.left = x + 'px';
			popup.style.top = y + window.pageYOffset + 'px';
		};

		var posTop = function() {

			x = coords.left + (width / 2) - (popupWidth / 2);
			y = coords.top - popupHeight - offset + MARGIN; // margin=40 для анимации
			popup.classList.add('tooltip-popup_top');

		};

		var posBottom = function() {
			x = coords.left + (width / 2) - (popupWidth / 2);
			y = coords.top + height + offset - MARGIN; // margin=-40 для анимации
			popup.classList.add('tooltip-popup_bottom');
		};

		var posLeft = function() {
			x = coords.left - popupWidth - offset + MARGIN; // margin=40 для анимации
			y = coords.top + (height / 2) - (popupHeight / 2);
			popup.classList.add('tooltip-popup_left');
		};

		var posRight = function() {
			x = coords.left + width + offset - MARGIN; // margin=-40 для анимации
			y = coords.top + (height / 2) - (popupHeight / 2);
			popup.classList.add('tooltip-popup_right');
		};

		switch(pos) {
			case 'bottom':

				posBottom();

				if((y + MARGIN + popupHeight) > window.innerHeight) {
					posTop();
				}
				break;

			case 'left':

				posLeft();

				if(x < 0) {
					posRight();
				}

				break;

			case 'right':

				posRight();

				if(x + MARGIN + popupWidth > window.innerWidth) {
					posLeft();
				}

				break;

			default:

				posTop();

				if((y - MARGIN) < 0) {
					posBottom();
				}

				break;
		}

		setCoords(x, y);

	};

	var eventsInit = function(e) {

		var targetEvent;
		var targetClass;
		var targetText;
		var targetPos;
		var targetOffset;

		target = e.target || e.toElement;

		if(target.matchesSelector('[data-tooltip="tooltip"]')) {
			trigger = true;
		}
		else {

			trigger = false;

			while(target.parentNode) {

				if(target.matchesSelector('[data-tooltip="tooltip"]')) {
					trigger = true;
					break;
				}
				else {
					trigger = false;
				}

				target = target.parentNode;

			}
		}

		if(trigger) {

			targetEvent = target.getAttribute('data-event') || '';
			targetPos = target.getAttribute('data-pos') || 'top';
			targetOffset = parseFloat(target.getAttribute('data-offset')) || 0;
			targetText = target.getAttribute('data-text') || '';
			targetClass = target.getAttribute('data-classname') || '';

			popup.classList.add(targetClass);

			if(targetEvent == 'click' && e.type == eventsTouch) {

				popup__change.innerHTML = targetText;

				// задаем координаты попап
				posSet(target, targetPos, targetOffset);

				popup.classList.add('tooltip-popup_active');
				popup.classList.add('tooltip-popup_click');
				if(targetClass) {
					popup.classList.add(targetClass);
				}
			}
			else
			if(e.type == 'mouseover' && !targetEvent) {

				popup__change.innerHTML = targetText;

				// задаем координаты попап
				posSet(target, targetPos, targetOffset);

				popup.classList.add('tooltip-popup_active');
				popup.classList.remove('tooltip-popup_click');
				if(targetClass) {
					popup.classList.add(targetClass);
				}
				target.addEventListener('mouseleave', eventsClose, false);
			}

		}
		else {

			if(e.type == eventsTouch) {

				popup.classList.remove('tooltip-popup_active');

				transitionEvent && popup.addEventListener(transitionEvent, function(e) {

					if(e.propertyName == 'opacity' && !e.target.classList.contains('tooltip-popup_active')) {
						popup.style.left = '';
						popup.style.top = '';
						popup__change.innerHTML = '';
						popup.className = 'tooltip-popup';
					}

				});
			}

		}

	};

	var eventsClose = function() {

		target.removeEventListener('mouseleave', eventsClose, false);
		popup.classList.remove('tooltip-popup_active');

		transitionEvent && popup.addEventListener(transitionEvent, function(e) {

			if(e.propertyName == 'opacity' && !e.target.classList.contains('tooltip-popup_active')) {
				popup.style.left = '';
				popup.style.top = '';
				popup__change.innerHTML = '';
				popup.className = 'tooltip-popup';
			}

		});
		trigger = false;

	};

	var init = function() {

		popup = createElement('div', 'tooltip-popup');
		document.body.insertBefore(popup, document.body.firstChild);
		popup__inner = createElement('div', 'tooltip-popup__inner', popup);
		popup__close = createElement('div', 'tooltip-popup__close', popup__inner);
		popup__close.innerHTML = '&times;';
		popup__change = createElement('div', 'tooltip-popup__change', popup__inner);

		document.addEventListener(eventsTouch, eventsInit, false);
		document.addEventListener('mouseover', eventsInit, false);

		popup.addEventListener(eventsTouch, function(e) {
			e.stopPropagation();
		});

		popup__close.addEventListener(eventsTouch, eventsClose, false);

	};

	window.addEventListener('load', function() {

		init();

	}, false);

})(window);
