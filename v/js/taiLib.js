// Polyfill matches
window.Element.prototype.matches || (window.Element.prototype.matches = window.Element.prototype.matchesSelector || window.Element.prototype.webkitMatchesSelector || window.Element.prototype.mozMatchesSelector || window.Element.prototype.msMatchesSelector);

/*
	Masked Input plugin for jQuery
	Copyright (c) 2007-2013 Josh Bush (digitalbush.com)
	Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
	Version: 1.3.1
*/
;(function(e){function t(){var e=document.createElement("input"),t="onpaste";return e.setAttribute(t,""),"function"==typeof e[t]?"paste":"input"}var n,a=t()+".mask",r=navigator.userAgent,i=/iphone/i.test(r),o=/android/i.test(r);e.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},dataName:"rawMaskFn",placeholder:"_"},e.fn.extend({caret:function(e,t){var n;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof e?(t="number"==typeof t?t:e,this.each(function(){this.setSelectionRange?this.setSelectionRange(e,t):this.createTextRange&&(n=this.createTextRange(),n.collapse(!0),n.moveEnd("character",t),n.moveStart("character",e),n.select())})):(this[0].setSelectionRange?(e=this[0].selectionStart,t=this[0].selectionEnd):document.selection&&document.selection.createRange&&(n=document.selection.createRange(),e=0-n.duplicate().moveStart("character",-1e5),t=e+n.text.length),{begin:e,end:t})},unmask:function(){return this.trigger("unmask")},mask:function(t,r){var c,l,s,u,f,h;return!t&&this.length>0?(c=e(this[0]),c.data(e.mask.dataName)()):(r=e.extend({placeholder:e.mask.placeholder,completed:null},r),l=e.mask.definitions,s=[],u=h=t.length,f=null,e.each(t.split(""),function(e,t){"?"==t?(h--,u=e):l[t]?(s.push(RegExp(l[t])),null===f&&(f=s.length-1)):s.push(null)}),this.trigger("unmask").each(function(){function c(e){for(;h>++e&&!s[e];);return e}function d(e){for(;--e>=0&&!s[e];);return e}function m(e,t){var n,a;if(!(0>e)){for(n=e,a=c(t);h>n;n++)if(s[n]){if(!(h>a&&s[n].test(R[a])))break;R[n]=R[a],R[a]=r.placeholder,a=c(a)}b(),x.caret(Math.max(f,e))}}function p(e){var t,n,a,i;for(t=e,n=r.placeholder;h>t;t++)if(s[t]){if(a=c(t),i=R[t],R[t]=n,!(h>a&&s[a].test(i)))break;n=i}}function g(e){var t,n,a,r=e.which;8===r||46===r||i&&127===r?(t=x.caret(),n=t.begin,a=t.end,0===a-n&&(n=46!==r?d(n):a=c(n-1),a=46===r?c(a):a),k(n,a),m(n,a-1),e.preventDefault()):27==r&&(x.val(S),x.caret(0,y()),e.preventDefault())}function v(t){var n,a,i,l=t.which,u=x.caret();t.ctrlKey||t.altKey||t.metaKey||32>l||l&&(0!==u.end-u.begin&&(k(u.begin,u.end),m(u.begin,u.end-1)),n=c(u.begin-1),h>n&&(a=String.fromCharCode(l),s[n].test(a)&&(p(n),R[n]=a,b(),i=c(n),o?setTimeout(e.proxy(e.fn.caret,x,i),0):x.caret(i),r.completed&&i>=h&&r.completed.call(x))),t.preventDefault())}function k(e,t){var n;for(n=e;t>n&&h>n;n++)s[n]&&(R[n]=r.placeholder)}function b(){x.val(R.join(""))}function y(e){var t,n,a=x.val(),i=-1;for(t=0,pos=0;h>t;t++)if(s[t]){for(R[t]=r.placeholder;pos++<a.length;)if(n=a.charAt(pos-1),s[t].test(n)){R[t]=n,i=t;break}if(pos>a.length)break}else R[t]===a.charAt(pos)&&t!==u&&(pos++,i=t);return e?b():u>i+1?(x.val(""),k(0,h)):(b(),x.val(x.val().substring(0,i+1))),u?t:f}var x=e(this),R=e.map(t.split(""),function(e){return"?"!=e?l[e]?r.placeholder:e:void 0}),S=x.val();x.data(e.mask.dataName,function(){return e.map(R,function(e,t){return s[t]&&e!=r.placeholder?e:null}).join("")}),x.attr("readonly")||x.one("unmask",function(){x.unbind(".mask").removeData(e.mask.dataName)}).bind("focus.mask",function(){clearTimeout(n);var e;S=x.val(),e=y(),n=setTimeout(function(){b(),e==t.length?x.caret(0,e):x.caret(e)},10)}).bind("blur.mask",function(){y(),x.val()!=S&&x.change()}).bind("keydown.mask",g).bind("keypress.mask",v).bind(a,function(){setTimeout(function(){var e=y(!0);x.caret(e),r.completed&&e==x.val().length&&r.completed.call(x)},0)}),y()}))}})})(jQuery);

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

/**
 * тут лежат методы, которые нужны бывают часто мне
 * @type {Object}
 */

var taiLib = {

	/**
	 * [mobileDetect определяем, мобильное устройство или нет]
	 */
	mobileDetect: /Android|iPhone|iPad|iPod|BlackBerry|WPDesktop|IEMobile|Opera Mini/i.test(navigator.userAgent),

	/**
	 * @param  tagname входное название тега
	 * @param  attrs массив атрибутов вида {'class': 'element', 'href': '/', 'id': 'element'}
	 * @param  parent если существует родитель, то добавляем элемент
	 * @return obj возвращаем созданный элемент
	 */
	createElementFn: function (tagname, attrs, parent) {

        "use strict";

        var tag,
            i;

		tag = document.createElement(tagname);

		for (i in attrs) {
            if (attrs.hasOwnProperty(i)) {
                tag.setAttribute(i, attrs[i]);
            }
		}

		if (parent) {
			parent.appendChild(tag);
		}
		return tag;
	},

	extendFn: function (destination, source) {

        "use strict";

        var property;

		for (property in source) {

			if (source.hasOwnProperty(property)) {
				destination[property] = source[property];
			}
		}
		return destination;
	},

	/**
	 * @param  element тег, у которого определяем координаты в видимой части страницы
	 * @return {top, left, right, bottom, width, height} возвращает верхнюю координату, левую, правую, нижнюю, высоту и ширину относительно видимой части окна
	 */
	getSizePositionElement: function (element) {

        "use strict";

		var tmp = element.getBoundingClientRect();

		return {
			top: tmp.top,
			left: tmp.left,
			right: document.body.offsetWidth - tmp.right,
			bottom: window.innerHeight - tmp.bottom,
			width: tmp.width,
			height: tmp.height
		};
	},

	animate: function(options) {

		options = taiLib.extendFn({
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
	},

	getScrollBarWidth: function() {

		var div = document.createElement('div');
		div.style.overflowY = 'scroll';
		div.style.width = '50px';
		div.style.height = '50px';
		div.style.visibility = 'hidden';
		document.body.appendChild(div);
		var scrollWidth = div.offsetWidth - div.clientWidth;
		document.body.removeChild(div);
		return scrollWidth;
	}
};

/**
 * определяем события, если это мобилка, то возвращаем его эвенты
 * @type {Object}
 */
var eventsMouseTouch = {
	start: taiLib.mobileDetect ? 'touchstart' : 'mousedown',
	move: taiLib.mobileDetect ? 'touchmove' : 'mousemove',
	end: taiLib.mobileDetect ? 'touchend' : 'mouseup'
};

(function(){function b(){this.tags={},this.tags.popup=d('popup',document.body),this.tags.popup__overlay=d('popup__overlay',this.tags.popup),this.tags.popup__table=d('popup__table',this.tags.popup),this.tags.popup__cell=d('popup__cell',this.tags.popup__table),this.tags.popup__block=d('popup__block',this.tags.popup__cell),this.tags.popup__close=d('popup__close',this.tags.popup__block),this.tags.popup__change=d('popup__change',this.tags.popup__block),this.eventsTrigger=c?'touchend':'mouseup',this.events(),this.scrollWidth=this.scrollWidthElement(),this.defaults={addClassNamePopup:'',closeOverlay:!0,closeShow:!0,background:'',closeButtons:'',offsetY:0,offsetX:0,coordElement:''}}var c=/Android|iPhone|iPad|iPod|BlackBerry|WPDesktop|IEMobile|Opera Mini/i.test(navigator.userAgent),d=function(f,g){var h=document.createElement('div');return h.className=f,g&&g.appendChild(h),h};b.prototype={options:function(f){return this.defaults=this.extend({addClassNamePopup:'',closeOverlay:!0,closeShow:!0,background:'',closeButtons:'',offsetY:0,offsetX:0,coordElement:''},f),this.defaults.background&&(this.tags.popup.style.background=this.defaults.background),this},extend:function(f,g){for(var h in g)g.hasOwnProperty(h)&&(f[h]=g[h]);return f},addCloseButtons:function(){var f=this,g=this.defaults.closeButtons.split(',');g.forEach(function(h){var k=document.querySelectorAll(h.replace(/\s+/g,''));Array.prototype.forEach.call(k,function(l){l.addEventListener(f.eventsTrigger,function(n){return n.stopPropagation(),f.close(),!1},!1)})})},coordSet:function(){var f=this,g=document.querySelector(this.defaults.coordElement);return g&&(this.coords=g.getBoundingClientRect(),this.tags.popup__block.style.left=this.coords.left+this.defaults.offsetX+'px',this.tags.popup__block.style.top=this.coords.top+this.defaults.offsetY+'px',this.tags.popup__block.style.position='absolute'),this},coordReset:function(){var f=this;return this.defaults={addClassNamePopup:'',closeOverlay:!0,closeShow:!0,background:'',closeButtons:'',offsetY:0,offsetX:0,coordElement:''},setTimeout(function(){f.tags.popup.style.background=''},500),this.tags.popup__block.style.left='',this.tags.popup__block.style.top='',this.tags.popup__block.style.position='',this},setBodyStyle:function(){var f=window.innerHeight<document.body.scrollHeight;return document.body.classList.add('popup__body_hidden'),f&&(document.body.style.paddingRight=this.scrollWidth+'px'),this},clearBodyStyle:function(){return document.body.classList.remove('popup__body_hidden'),document.body.style.paddingRight='',this},html:function(f,g){return this.tags.popup__close.style.display=this.defaults.closeShow?'':'none',this.setBodyStyle(),this.defaults.coordElement&&this.coordSet(),this.tags.popup__change.innerHTML=f,g&&g.call(this.tags.popup,this.defaults,this.eventsTrigger),this.defaults.closeButtons&&this.addCloseButtons(),this},append:function(f,g){return this.tags.popup__close.style.display=this.defaults.closeShow?'':'none',this.setBodyStyle(),this.defaults.coordElement&&this.coordSet(),this.tags.popup__change.innerHTML+=f,g&&g.call(this.tags.popup,this.defaults,this.eventsTrigger),this.defaults.closeButtons&&this.addCloseButtons(),this},clear:function(){return this.tags.popup__change.innerHTML='',this},show:function(f){return this.defaults.addClassNamePopup&&this.tags.popup.classList.add(this.defaults.addClassNamePopup),this.tags.popup.classList.add('popup_active'),f&&f.call(this.tags.popup,this.defaults,this.eventsTrigger),this},close:function(f){var g=this;return setTimeout(function(){g.tags.popup.classList.remove('popup_active'),g.defaults.addClassNamePopup&&g.tags.popup.classList.remove(g.defaults.addClassNamePopup),g.clear(),g.coordReset(),f&&f.call(g.tags.popup,g.defaults,g.eventsTrigger),g.clearBodyStyle()},50),this},events:function(){var f=this;this.tags.popup__close.addEventListener(this.eventsTrigger,function(g){return g.stopPropagation(),f.close(),!1},!1),this.tags.popup__overlay.addEventListener(this.eventsTrigger,function(g){return g.stopPropagation(),f.defaults.closeOverlay&&f.close(),!1},!1),document.addEventListener('keydown',function(g){27==g.which&&f.close()},!1)},scrollWidthElement:function(){var f=document.createElement('div');f.style.overflowY='scroll',f.style.width='50px',f.style.height='50px',f.style.visibility='hidden',document.body.appendChild(f);var g=f.offsetWidth-f.clientWidth;return document.body.removeChild(f),g}},window.Popup=b})(window);

!function(t){function e(t){return this.tags={},this.values={},this.eventsTrigger=s?"touchend":"mouseup",this.defaults=this.extend({element:"",mainClass:"slider",min:0,max:1e3,range:!1,step:1,point:null,division:null,beforeDivisionStep:1,afterDivisionStep:1,handleMinus:null,handlePlus:null,beforeOutSideClickStep:1,afterOutSideClickStep:1,create:function(){},slide:function(){}},t),!!this.defaults.element&&(this.init(),this)}var s=/Android|iPhone|iPad|iPod|BlackBerry|WPDesktop|IEMobile|Opera Mini/i.test(navigator.userAgent),i=function(t,e){var s=document.createElement("div");return s.className=t,e&&e.appendChild(s),s};e.prototype={init:function(){return this.createDOM(),this.defaults.create.call(this,this.tags.slider,this.defaults,this.tags.handleLeft,s),this.reinit(),this.events(this.tags.handleLeft,"triggerLeft"),this},createDOM:function(){return this.tags={},this.tags.slider=this.defaults.element,this.tags.handleLeft=i(this.defaults.mainClass+"__handle "+this.defaults.mainClass+"__handle_left",this.tags.slider),this.tags.handleRange=i(this.defaults.mainClass+"__range ",this.tags.slider),delete this.defaults.element,this},getValues:function(){return this.values.size=this.tags.slider.offsetWidth,this},setValuesOutSide:function(t,e){var s;return this.defaults.value=t,s=this.defaults.point&&this.defaults.division?this.defaults.value<=this.defaults.point?this.defaults.value/this.defaults.point*this.defaults.division:(this.defaults.value-this.defaults.point)/(this.defaults.max-this.defaults.point)*100/100*this.defaults.division+this.defaults.division:this.defaults.value/this.defaults.max*100,this.defaults.value<=this.defaults.min?(s=0,this.defaults.value=this.defaults.min):this.defaults.value>=this.defaults.max&&(s=100,this.defaults.value=this.defaults.max),this.values[e]=!1,this.tags.handleLeft.style.left=s+"%",this.defaults.slide(this.defaults.value,this.defaults,this.tags.handleLeft),this},setValues:function(t){var e,s;this.defaults.min<this.defaults.max?this.defaults.division&&this.defaults.point&&this.defaults.point>this.defaults.min&&this.defaults.point<this.defaults.max?t<=this.defaults.division?(s=t/this.defaults.division,e=Math.round((this.defaults.min+Math.abs(-1*this.defaults.min+this.defaults.point)*s)/this.defaults.beforeDivisionStep)*this.defaults.beforeDivisionStep):(s=(t-this.defaults.division)/(100-this.defaults.division),e=Math.round((this.defaults.point+Math.abs(-1*this.defaults.point+this.defaults.max)*s)/this.defaults.beforeDivisionStep)*this.defaults.beforeDivisionStep):(s=t/100,e=Math.round((this.defaults.min+Math.abs(-1*this.defaults.min+this.defaults.max)*s)/this.defaults.step)*this.defaults.step):this.defaults.division&&this.defaults.point&&this.defaults.point>this.defaults.min&&this.defaults.point<this.defaults.max?t<=this.defaults.division?(s=t/this.defaults.division,e=Math.round((this.defaults.min-Math.abs(-1*this.defaults.min+this.defaults.point)*s)/this.defaults.beforeDivisionStep)*this.defaults.beforeDivisionStep):(s=(t-this.defaults.division)/(100-this.defaults.division),e=Math.round((this.defaults.point-Math.abs(-1*this.defaults.point+this.defaults.max)*s)/this.defaults.afterDivisionStep)*this.defaults.afterDivisionStep):(s=t/100,e=Math.round((this.defaults.min-Math.abs(-1*this.defaults.min+this.defaults.max)*s)/this.defaults.step)*this.defaults.step),t<=0?e=this.defaults.min:t>=100&&(e=this.defaults.max);var i=this.defaults.step.toString().split(".")[1];i&&(i=i.length);var a=function(t){return+t.toFixed(i||1)};return this.defaults.value=a(e),this.defaults.slide(a(e),this.defaults,this.tags.handleLeft),this},reinit:function(){return this.getValues(),this.setValues(0),this},events:function(t,e){var i=this;this.values[e]=!1;var a,u,n=s?"touchstart":"mousedown",l=s?"touchmove":"mousemove",d=s?"touchend":"mouseup";if(this.defaults.handleMinus){var f=document.querySelector(this.defaults.handleMinus);f&&(f.addEventListener(n,function(t){t.stopPropagation(),t.preventDefault(),i.setValuesOutSide(i.defaults.value-(i.defaults.value<i.defaults.point?i.defaults.beforeOutSideClickStep:i.defaults.afterOutSideClickStep),"triggerLeft")}),f.addEventListener(d,function(t){t.stopPropagation(),t.preventDefault()}))}if(this.defaults.handlePlus){var h=document.querySelector(this.defaults.handlePlus);h&&(h.addEventListener(n,function(t){t.stopPropagation(),t.preventDefault(),i.setValuesOutSide(i.defaults.value+(i.defaults.value<i.defaults.point?i.defaults.beforeOutSideClickStep:i.defaults.afterOutSideClickStep),"triggerLeft")}),h.addEventListener(d,function(t){t.stopPropagation(),t.preventDefault()}))}return t.addEventListener("dragstart",function(){return!1}),t.addEventListener(n,function(t){t.stopPropagation(),i.values[e]=!0,u=(s?t.touches[0].pageX:t.pageX)-this.offsetLeft-this.offsetWidth/2},!1),document.addEventListener(l,function(n){if(!i.values[e])return!1;n.preventDefault(),n.stopPropagation(),(a=((s?n.touches[0].pageX:n.pageX)-u)/i.values.size*100)<0?a=0:a>100&&(a=100),t.style.left=a+"%",i.setValues(a)},!1),document.addEventListener(d,function(t){t.stopPropagation(),i.values[e]=!1},!1),this.tags.handleRange.addEventListener(d,function(u){u.stopPropagation(),u.preventDefault(),i.values[e]=!1,(a=((s?u.touches[0].pageX:u.pageX)-i.tags.slider.getBoundingClientRect().left)/i.values.size*100)<0?a=0:a>100&&(a=100),t.style.left=a+"%",i.setValues(a)},!1),this},extend:function(t,e){for(var s in e)e.hasOwnProperty(s)&&(t[s]=e[s]);return t}},window.Slider=e}(window);

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

	var createElement = function(mainCls, cls, parent) {
		var obj = document.createElement('div');
		obj.classList.add(mainCls + cls);

		if(parent) {
			parent.appendChild(obj);
		}

		return obj
	}

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

	var events = isMobile.any()	? 'touchend' : 'mouseup';

	var GalleryTouch = function() {
		return this;
	}

	GalleryTouch.prototype = {

		constructor: GalleryTouch,

		init: function(opts) {

			this.defaults = this.extend({
				element: '',
				mainClass: 'gallery-touch',
				repeat: false,
				arrow: true,
				nav: true
			}, opts);

			this.tags = {};
			this.values = {};
			this.values.resizeLength = undefined;
			this.values.triggerEnable = false;
			this.values.timer = undefined;

			this.tags.element = this.defaults.element;

			if(!this.tags.element) {
				return false;
			}

			this.tags.parent = this.tags.element.parentNode.parentNode;
			this.tags.scrollSection = this.tags.element.parentNode;

			this.createDOM(this.defaults);
			this.getSize();
			this.resize();

		},

		extend: function(destination,source) {
			for(var property in source) {

				if(source.hasOwnProperty(property)) {
					destination[property] = source[property];
				}
			}
			return destination;
		},

		createDOM: function(opts) {

			this.tags.arrow = createElement(opts.mainClass, '__arrow', this.tags.parent);
			this.tags.prev = createElement(opts.mainClass, '__prev', this.tags.arrow);
			this.tags.next = createElement(opts.mainClass, '__next', this.tags.arrow);
			this.tags.nav = createElement(opts.mainClass, '__nav', this.tags.parent);

			this.tags.prev.innerHTML = '<span><i></i></span>';
			this.tags.next.innerHTML = '<span><i></i></span>';

			this.tags.thumbs = [];

		},

		getSize: function() {

			this.values.step = 0;
			this.values.longTouch = false;
			this.values.triggerEvent = true;
			this.tags.parent.classList.add('enable');
			this.values.width_parent = this.tags.scrollSection.offsetWidth;
			this.values.width = this.tags.element.scrollWidth;

		},

		arrowShow: function() {

			if(this.values.width > this.values.width_parent) {

				if(this.defaults.arrow) {
					this.tags.arrow.classList.add('active');
				}
				if(this.defaults.nav) {
					this.tags.nav.classList.add('active');
				}
			}
			else {
				this.tags.arrow.classList.remove('active');
				this.tags.nav.classList.remove('active');
			}

		},

		resize: function() {

			var obj = this;

			window.addEventListener('resize', function() {
				obj.values.triggerEvent = true;
				obj.getSize();

				if(obj.tags.thumbs.length) {

					obj.tags.thumbs[0].classList.add('active');

				}

				obj.eventNavs();
				obj.arrowShow(obj.defaults);
				obj.cssTransform(obj.tags.element, 0);

			}, false);

		},

		eventsTouch: function() {

			var obj = this;
			var eventsStart = events == 'touchend' ? 'touchstart' : 'mousedown';
			var eventsMove = events == 'touchend' ? 'touchmove' : 'mousemove';
			var eventsEnd = events;
			var shiftX;
			var moveX;
			var startX;
			var startFn;
			var moveFn;
			var endFn;
			var trigger = false;
			var triggerClass = false;

			var translate = function() {

				if(shiftX > 0) {

					obj.values.step = obj.values.step - obj.values.width_parent;

					if(obj.values.step <= 0) {
						obj.values.step = 0;
					}

				}
				else {

					obj.values.step = obj.values.step + obj.values.width_parent;

					if(obj.values.step >= obj.values.width - obj.values.width_parent) {

						if(obj.defaults.repeat) {
							obj.values.step = 0;
						}
						else {
							obj.values.step = obj.values.width - obj.values.width_parent;
						}

					}

				}

				if(obj.tags.thumbs.length) {

					obj.tags.thumbs.forEach(function(node) {
						node.classList.remove('active');
					});

					obj.tags.thumbs[Math.ceil(obj.values.step / obj.values.width_parent)].classList.add('active');

				}

				obj.cssTransform(obj.tags.element, (obj.values.step * (-1)));

			}

			startFn = function(e) {

				shiftX = 0;

				if(!obj.values.triggerEvent) {
					return false;
				}

				obj.values.longTouch = false;

				setTimeout(function() {
					obj.values.longTouch = true;
				}, 250);

				startX = events == 'touchend' ? e.touches[0].pageX : e.pageX;
				trigger = true;

			}

			moveFn = function(e) {

				if(!trigger) {
					return false;
				}

				if(!triggerClass) {
					obj.tags.parent.classList.add('move');
					triggerClass = true;
				}

				e.preventDefault();

				var x = events == 'touchend' ? e.touches[0].pageX : e.pageX;

				shiftX = x - startX;

				if(shiftX - obj.values.step < 0 && shiftX - obj.values.step > ((obj.values.width - obj.values.width_parent) * (-1))) {

					obj.cssTransform(obj.tags.element, shiftX - obj.values.step);

				}
			}

			endFn = function(e) {

				if(!trigger) {
					return false;
				}

				trigger = false;
				triggerClass = false;
				obj.tags.parent.classList.remove('move');

				if(Math.abs(shiftX) < (obj.values.width_parent / 6)) {

					obj.cssTransform(obj.tags.element, (obj.values.step * (-1)));
					return false;
				}

				if(!obj.values.longTouch) {

					translate();

				}
				else
				if(obj.values.longTouch) {

					if(Math.abs(shiftX) < obj.values.width_parent / 2) {
						obj.cssTransform(obj.tags.element, (obj.values.step * (-1)));
					}
					else {

						translate();

					}

				}

			}

			this.tags.scrollSection.addEventListener(eventsStart, startFn);
			this.tags.scrollSection.addEventListener(eventsMove, moveFn);
			document.addEventListener(eventsEnd, endFn);

		},

		eventArrows: function() {

			var obj = this;

			var rotate = function() {

				if(obj.tags.thumbs.length) {

					obj.tags.thumbs.forEach(function(node) {
						node.classList.remove('active');
					});

					obj.tags.thumbs[Math.ceil(obj.values.step / obj.values.width_parent)].classList.add('active');

				}

				obj.cssTransform(obj.tags.element, (obj.values.step * (-1)));

			}

			this.tags.prev.addEventListener(events, function(e) {

				e.stopPropagation();

				obj.values.step = obj.values.step - obj.values.width_parent;

				if(obj.values.step <= 0) {
					obj.values.step = 0;
				}

				rotate();

			}, false);

			this.tags.next.addEventListener(events, function(e) {

				e.stopPropagation();

				obj.values.step = obj.values.step + obj.values.width_parent;

				if(obj.values.step >= obj.values.width - obj.values.width_parent) {

					if(obj.defaults.repeat) {
						obj.values.step = 0;
					}
					else {
						obj.values.step = obj.values.width - obj.values.width_parent;
					}
				}

				rotate();

			}, false);

		},

		eventNavs: function() {

			var obj = this;
			var length = Math.ceil(this.values.width / this.values.width_parent);

			if(this.values.resizeLength == length) {
				return false;
			}

			this.values.resizeLength = length;

			this.tags.nav.innerHTML = '';
			this.tags.thumbs = [];

			for(var i = 0; i < length; i += 1) {

				this.tags.thumbs.push(createElement(this.defaults.mainClass, '__thumb', this.tags.nav));

			}

			this.tags.thumbs.forEach(function(node, index) {

				if(index == 0) {
					node.classList.add('active');
				}

				node.addEventListener(events, function(e) {

					e.stopPropagation();

					obj.tags.thumbs.forEach(function(node) {
						node.classList.remove('active');
					});

					this.classList.add('active');
					obj.values.step = obj.values.width_parent * index;
					if(obj.values.step >= obj.values.width - obj.values.width_parent) {
						obj.values.step = obj.values.width - obj.values.width_parent;
					}

					obj.cssTransform(obj.tags.element, (obj.values.step * (-1)));

				}, false);

			});

		},

		cssTransform: function(obj, x) {

			obj.style['-webkit-transform'] = 'translate3D(' + x + 'px, 0, 0)';
			obj.style['-moz-transform'] = 'translate3D(' + x + 'px, 0, 0)';
			obj.style['-o-transform'] = 'translate3D(' + x + 'px, 0, 0)';
			obj.style['-ms-transform'] = 'translate3D(' + x + 'px, 0, 0)';
			obj.style['transform'] = 'translate3D(' + x + 'px, 0, 0)';

		},

		forcedNavigation: function(index) {

			if(this.tags.thumbs.length) {

				this.tags.thumbs.forEach(function(node) {
					node.classList.remove('active');
				});

				this.tags.thumbs[index].classList.add('active');

			}

			this.values.step = this.values.width_parent * index;

			if(obj.values.step >= obj.values.width - obj.values.width_parent) {
				obj.values.step = obj.values.width - obj.values.width_parent;
			}

			this.cssTransform(this.tags.element, (this.values.step * (-1)));

			return this;
		},

		disable: function() {

			if(this.tags.thumbs.length) {

				this.tags.thumbs.forEach(function(node) {
					node.classList.remove('active');
				});

			}

			this.tags.element.style = '';
			this.tags.parent.classList.remove('enable');
			this.tags.arrow.classList.remove('active');
			this.tags.nav.classList.remove('active');
			this.cssTransform(this.tags.element, 0);
			this.values.triggerEvent = false;
			return this;

		},

		enable: function() {

			this.values.triggerEvent = true;
			this.getSize();

			if(!this.values.triggerEnable) {
				this.eventArrows();
				this.eventsTouch();
			}

			if(this.tags.thumbs.length) {

				this.tags.thumbs[0].classList.add('active');

			}

			this.eventNavs();
			this.arrowShow(this.defaults);
			this.values.triggerEnable = true;
			return this;
		}
	}

	global.GalleryTouch = GalleryTouch;

})(window);