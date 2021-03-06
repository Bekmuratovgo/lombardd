!function (t, e) {
	"object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.IMask = e()
}(this, function () {
	"use strict";

	function t(t, e) {
		return e = {exports: {}}, t(e, e.exports), e.exports
	}

	function e(t) {
		return "string" == typeof t || t instanceof String
	}

	function n(t, n) {
		var u = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "";
		return e(t) ? t : t ? n : u
	}

	function u(t, e) {
		return e === ht.LEFT && --t, t
	}

	function r(t) {
		return t.replace(/([.*+?^=!:${}()|[\]/\\])/g, "\\$1")
	}

	function i(t, e) {
		if (e === t) return !0;
		var n, u = Array.isArray(e), r = Array.isArray(t);
		if (u && r) {
			if (e.length != t.length) return !1;
			for (n = 0; n < e.length; n++) if (!i(e[n], t[n])) return !1;
			return !0
		}
		if (u != r) return !1;
		if (e && t && "object" === (void 0 === e ? "undefined" : ut(e)) && "object" === (void 0 === t ? "undefined" : ut(t))) {
			var o = Object.keys(e), s = e instanceof Date, a = t instanceof Date;
			if (s && a) return e.getTime() == t.getTime();
			if (s != a) return !1;
			var h = e instanceof RegExp, l = t instanceof RegExp;
			if (h && l) return e.toString() == t.toString();
			if (h != l) return !1;
			for (n = 0; n < o.length; n++) if (!Object.prototype.hasOwnProperty.call(t, o[n])) return !1;
			for (n = 0; n < o.length; n++) if (!i(e[o[n]], t[o[n]])) return !1;
			return !0
		}
		return !1
	}

	function o(t) {
		if (null == t) throw new Error("mask property should be defined");
		return t instanceof RegExp ? lt.IMask.MaskedRegExp : e(t) ? lt.IMask.MaskedPattern : t instanceof Date || t === Date ? lt.IMask.MaskedDate : t instanceof Number || "number" == typeof t || t === Number ? lt.IMask.MaskedNumber : Array.isArray(t) || t === Array ? lt.IMask.MaskedDynamic : t.prototype instanceof lt.IMask.Masked ? t : t instanceof Function ? lt.IMask.MaskedFunction : (console.warn("Mask not found for mask", t), lt.IMask.Masked)
	}

	function s(t) {
		var e = (t = ot({}, t)).mask;
		return e instanceof lt.IMask.Masked ? e : new (o(e))(t)
	}

	function a(t) {
		var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
		return new yt(t, e)
	}

	var h = function (t) {
			if (void 0 == t) throw TypeError("Can't call method on  " + t);
			return t
		}, l = function (t) {
			return Object(h(t))
		}, p = {}.hasOwnProperty, c = function (t, e) {
			return p.call(t, e)
		}, f = {}.toString, d = function (t) {
			return f.call(t).slice(8, -1)
		}, v = Object("z").propertyIsEnumerable(0) ? Object : function (t) {
			return "String" == d(t) ? t.split("") : Object(t)
		}, g = function (t) {
			return v(h(t))
		}, m = Math.ceil, A = Math.floor, y = function (t) {
			return isNaN(t = +t) ? 0 : (t > 0 ? A : m)(t)
		}, _ = Math.min, F = function (t) {
			return t > 0 ? _(y(t), 9007199254740991) : 0
		}, C = Math.max, D = Math.min, E = function (t, e) {
			return t = y(t), t < 0 ? C(t + e, 0) : D(t, e)
		}, k = t(function (t) {
			var e = t.exports = "undefined" != typeof window && window.Math == Math ? window : "undefined" != typeof self && self.Math == Math ? self : Function("return this")();
			"number" == typeof __g && (__g = e)
		}), B = k["__core-js_shared__"] || (k["__core-js_shared__"] = {}), w = 0, x = Math.random(), b = function (t) {
			return "Symbol(".concat(void 0 === t ? "" : t, ")_", (++w + x).toString(36))
		}, P = function (t) {
			return B[t] || (B[t] = {})
		}("keys"), S = function (t) {
			return function (e, n, u) {
				var r, i = g(e), o = F(i.length), s = E(u, o);
				if (t && n != n) {
					for (; o > s;) if ((r = i[s++]) != r) return !0
				} else for (; o > s; s++) if ((t || s in i) && i[s] === n) return t || s || 0;
				return !t && -1
			}
		}(!1), I = function (t) {
			return P[t] || (P[t] = b(t))
		}("IE_PROTO"), T = function (t, e) {
			var n, u = g(t), r = 0, i = [];
			for (n in u) n != I && c(u, n) && i.push(n);
			for (; e.length > r;) c(u, n = e[r++]) && (~S(i, n) || i.push(n));
			return i
		}, M = "constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(","),
		O = Object.keys || function (t) {
			return T(t, M)
		}, R = t(function (t) {
			var e = t.exports = {version: "2.4.0"};
			"number" == typeof __e && (__e = e)
		}), L = (R.version, function (t) {
			return "object" == typeof t ? null !== t : "function" == typeof t
		}), V = function (t) {
			if (!L(t)) throw TypeError(t + " is not an object!");
			return t
		}, j = function (t) {
			try {
				return !!t()
			} catch (t) {
				return !0
			}
		}, H = !j(function () {
			return 7 != Object.defineProperty({}, "a", {
				get: function () {
					return 7
				}
			}).a
		}), U = k.document, N = L(U) && L(U.createElement), z = function (t) {
			return N ? U.createElement(t) : {}
		}, Y = !H && !j(function () {
			return 7 != Object.defineProperty(z("div"), "a", {
				get: function () {
					return 7
				}
			}).a
		}), G = function (t, e) {
			if (!L(t)) return t;
			var n, u;
			if (e && "function" == typeof(n = t.toString) && !L(u = n.call(t))) return u;
			if ("function" == typeof(n = t.valueOf) && !L(u = n.call(t))) return u;
			if (!e && "function" == typeof(n = t.toString) && !L(u = n.call(t))) return u;
			throw TypeError("Can't convert object to primitive value")
		}, Z = Object.defineProperty, W = {
			f: H ? Object.defineProperty : function (t, e, n) {
				if (V(t), e = G(e, !0), V(n), Y) try {
					return Z(t, e, n)
				} catch (t) {
				}
				if ("get" in n || "set" in n) throw TypeError("Accessors not supported!");
				return "value" in n && (t[e] = n.value), t
			}
		}, $ = function (t, e) {
			return {enumerable: !(1 & t), configurable: !(2 & t), writable: !(4 & t), value: e}
		}, X = H ? function (t, e, n) {
			return W.f(t, e, $(1, n))
		} : function (t, e, n) {
			return t[e] = n, t
		}, q = t(function (t) {
			var e = b("src"), n = Function.toString, u = ("" + n).split("toString");
			R.inspectSource = function (t) {
				return n.call(t)
			}, (t.exports = function (t, n, r, i) {
				var o = "function" == typeof r;
				o && (c(r, "name") || X(r, "name", n)), t[n] !== r && (o && (c(r, e) || X(r, e, t[n] ? "" + t[n] : u.join(String(n)))), t === k ? t[n] = r : i ? t[n] ? t[n] = r : X(t, n, r) : (delete t[n], X(t, n, r)))
			})(Function.prototype, "toString", function () {
				return "function" == typeof this && this[e] || n.call(this)
			})
		}), J = function (t) {
			if ("function" != typeof t) throw TypeError(t + " is not a function!");
			return t
		}, K = function (t, e, n) {
			if (J(t), void 0 === e) return t;
			switch (n) {
				case 1:
					return function (n) {
						return t.call(e, n)
					};
				case 2:
					return function (n, u) {
						return t.call(e, n, u)
					};
				case 3:
					return function (n, u, r) {
						return t.call(e, n, u, r)
					}
			}
			return function () {
				return t.apply(e, arguments)
			}
		}, Q = function (t, e, n) {
			var u, r, i, o, s = t & Q.F, a = t & Q.G, h = t & Q.S, l = t & Q.P, p = t & Q.B,
				c = a ? k : h ? k[e] || (k[e] = {}) : (k[e] || {}).prototype, f = a ? R : R[e] || (R[e] = {}),
				d = f.prototype || (f.prototype = {});
			a && (n = e);
			for (u in n) i = ((r = !s && c && void 0 !== c[u]) ? c : n)[u], o = p && r ? K(i, k) : l && "function" == typeof i ? K(Function.call, i) : i, c && q(c, u, i, t & Q.U), f[u] != i && X(f, u, o), l && d[u] != i && (d[u] = i)
		};
	k.core = R, Q.F = 1, Q.G = 2, Q.S = 4, Q.P = 8, Q.B = 16, Q.W = 32, Q.U = 64, Q.R = 128;
	var tt = Q;
	!function (t, e) {
		var n = (R.Object || {})[t] || Object[t], u = {};
		u[t] = e(n), tt(tt.S + tt.F * j(function () {
			n(1)
		}), "Object", u)
	}("keys", function () {
		return function (t) {
			return O(l(t))
		}
	});
	R.Object.keys;
	var et = function (t) {
		var e = String(h(this)), n = "", u = y(t);
		if (u < 0 || u == 1 / 0) throw RangeError("Count can't be negative");
		for (; u > 0; (u >>>= 1) && (e += e)) 1 & u && (n += e);
		return n
	};
	tt(tt.P, "String", {repeat: et});
	R.String.repeat;
	var nt = function (t, e, n, u) {
		var r = String(h(t)), i = r.length, o = void 0 === n ? " " : String(n), s = F(e);
		if (s <= i || "" == o) return r;
		var a = s - i, l = et.call(o, Math.ceil(a / o.length));
		return l.length > a && (l = l.slice(0, a)), u ? l + r : r + l
	};
	tt(tt.P, "String", {
		padStart: function (t) {
			return nt(this, t, arguments.length > 1 ? arguments[1] : void 0, !0)
		}
	});
	R.String.padStart;
	tt(tt.P, "String", {
		padEnd: function (t) {
			return nt(this, t, arguments.length > 1 ? arguments[1] : void 0, !1)
		}
	});
	R.String.padEnd;
	var ut = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
			return typeof t
		} : function (t) {
			return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
		}, rt = function (t, e) {
			if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
		}, it = function () {
			function t(t, e) {
				for (var n = 0; n < e.length; n++) {
					var u = e[n];
					u.enumerable = u.enumerable || !1, u.configurable = !0, "value" in u && (u.writable = !0), Object.defineProperty(t, u.key, u)
				}
			}

			return function (e, n, u) {
				return n && t(e.prototype, n), u && t(e, u), e
			}
		}(), ot = Object.assign || function (t) {
			for (var e = 1; e < arguments.length; e++) {
				var n = arguments[e];
				for (var u in n) Object.prototype.hasOwnProperty.call(n, u) && (t[u] = n[u])
			}
			return t
		}, st = function (t, e) {
			if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function, not " + typeof e);
			t.prototype = Object.create(e && e.prototype, {
				constructor: {
					value: t,
					enumerable: !1,
					writable: !0,
					configurable: !0
				}
			}), e && (Object.setPrototypeOf ? Object.setPrototypeOf(t, e) : t.__proto__ = e)
		}, at = function (t, e) {
			if (!t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
			return !e || "object" != typeof e && "function" != typeof e ? t : e
		}, ht = {NONE: 0, LEFT: -1, RIGHT: 1},
		lt = "undefined" != typeof window && window || "undefined" != typeof global && global.global === global && global || "undefined" != typeof self && self.self === self && self || {},
		pt = function () {
			function t(e, n, u, r) {
				for (rt(this, t), this.value = e, this.cursorPos = n, this.oldValue = u, this.oldSelection = r; this.value.slice(0, this.startChangePos) !== this.oldValue.slice(0, this.startChangePos);) --this.oldSelection.start
			}

			return it(t, [{
				key: "startChangePos", get: function () {
					return Math.min(this.cursorPos, this.oldSelection.start)
				}
			}, {
				key: "insertedCount", get: function () {
					return this.cursorPos - this.startChangePos
				}
			}, {
				key: "inserted", get: function () {
					return this.value.substr(this.startChangePos, this.insertedCount)
				}
			}, {
				key: "removedCount", get: function () {
					return Math.max(this.oldSelection.end - this.startChangePos || this.oldValue.length - this.value.length, 0)
				}
			}, {
				key: "removed", get: function () {
					return this.oldValue.substr(this.startChangePos, this.removedCount)
				}
			}, {
				key: "head", get: function () {
					return this.value.substring(0, this.startChangePos)
				}
			}, {
				key: "tail", get: function () {
					return this.value.substring(this.startChangePos + this.insertedCount)
				}
			}, {
				key: "removeDirection", get: function () {
					return !this.removedCount || this.insertedCount ? ht.NONE : this.oldSelection.end === this.cursorPos || this.oldSelection.start === this.cursorPos ? ht.RIGHT : ht.LEFT
				}
			}]), t
		}(), ct = function () {
			function t(e) {
				rt(this, t), ot(this, {inserted: "", overflow: !1, removedCount: 0, shift: 0}, e)
			}

			return t.prototype.aggregate = function (t) {
				return this.inserted += t.inserted, this.removedCount += t.removedCount, this.shift += t.shift, this.overflow = this.overflow || t.overflow, t.rawInserted && (this.rawInserted += t.rawInserted), this
			}, it(t, [{
				key: "offset", get: function () {
					return this.shift + this.inserted.length - this.removedCount
				}
			}, {
				key: "rawInserted", get: function () {
					return null != this._rawInserted ? this._rawInserted : this.inserted
				}, set: function (t) {
					this._rawInserted = t
				}
			}]), t
		}(), ft = function () {
			function t(e) {
				rt(this, t), this._value = "", this._update(ot({}, t.DEFAULTS, e)), this.isInitialized = !0
			}

			return t.prototype.updateOptions = function (t) {
				this.withValueRefresh(this._update.bind(this, t))
			}, t.prototype._update = function (t) {
				ot(this, t)
			}, t.prototype.clone = function () {
				var e = new t(this);
				return e._value = this.value.slice(), e
			}, t.prototype.reset = function () {
				this._value = ""
			}, t.prototype.resolve = function (t) {
				return this.reset(), this._append(t, {input: !0}), this._appendTail(), this.doCommit(), this.value
			}, t.prototype.nearestInputPos = function (t, e) {
				return t
			}, t.prototype.extractInput = function () {
				var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
					e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : this.value.length;
				return this.value.slice(t, e)
			}, t.prototype._extractTail = function () {
				var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
					e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : this.value.length;
				return this.extractInput(t, e)
			}, t.prototype._appendTail = function () {
				var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "";
				return this._append(t, {tail: !0})
			}, t.prototype._append = function (t) {
				var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}, n = this.value.length,
					u = this.clone(), r = !1;
				t = this.doPrepare(t, e);
				for (var i = 0; i < t.length; ++i) {
					if (this._value += t[i], !1 === this.doValidate(e) && (ot(this, u), !e.input)) {
						r = !0;
						break
					}
					u = this.clone()
				}
				return new ct({inserted: this.value.slice(n), overflow: r})
			}, t.prototype.appendWithTail = function (t, e) {
				for (var n = new ct, u = this.clone(), r = void 0, i = 0; i < t.length; ++i) {
					var o = t[i], s = this._append(o, {input: !0});
					if (r = this.clone(), !(!s.overflow && !this._appendTail(e).overflow) || !1 === this.doValidate({tail: !0})) {
						ot(this, u);
						break
					}
					ot(this, r), u = this.clone(), n.aggregate(s)
				}
				return n.shift += this._appendTail(e).shift, n
			}, t.prototype._unmask = function () {
				return this.value
			}, t.prototype.remove = function () {
				var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
					e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : this.value.length - t;
				this._value = this.value.slice(0, t) + this.value.slice(t + e)
			}, t.prototype.withValueRefresh = function (t) {
				if (this._refreshing || !this.isInitialized) return t();
				this._refreshing = !0;
				var e = this.unmaskedValue, n = t();
				return this.unmaskedValue = e, delete this._refreshing, n
			}, t.prototype.doPrepare = function (t) {
				var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
				return this.prepare(t, this, e)
			}, t.prototype.doValidate = function (t) {
				return this.validate(this.value, this, t)
			}, t.prototype.doCommit = function () {
				this.commit(this.value, this)
			}, t.prototype.splice = function (t, e, n, u) {
				var r = t + e, i = this._extractTail(r), o = this.nearestInputPos(t, u);
				this.remove(o);
				var s = this.appendWithTail(n, i);
				return s.shift += o - t, s
			}, it(t, [{
				key: "value", get: function () {
					return this._value
				}, set: function (t) {
					this.resolve(t)
				}
			}, {
				key: "unmaskedValue", get: function () {
					return this._unmask()
				}, set: function (t) {
					this.reset(), this._append(t), this._appendTail(), this.doCommit()
				}
			}, {
				key: "rawInputValue", get: function () {
					return this.extractInput(0, this.value.length, {raw: !0})
				}, set: function (t) {
					this.reset(), this._append(t, {raw: !0}), this._appendTail(), this.doCommit()
				}
			}, {
				key: "isComplete", get: function () {
					return !0
				}
			}]), t
		}();
	ft.DEFAULTS = {
		prepare: function (t) {
			return t
		}, validate: function () {
			return !0
		}, commit: function () {
		}
	};
	var dt = function () {
		function t(e) {
			rt(this, t), ot(this, e), this.mask && (this._masked = s(e))
		}

		return t.prototype.reset = function () {
			this.isHollow = !1, this.isRawInput = !1, this._masked && this._masked.reset()
		}, t.prototype.resolve = function (t) {
			return !!this._masked && this._masked.resolve(t)
		}, it(t, [{
			key: "isInput", get: function () {
				return this.type === t.TYPES.INPUT
			}
		}, {
			key: "isHiddenHollow", get: function () {
				return this.isHollow && this.optional
			}
		}]), t
	}();
	dt.DEFAULTS = {
		0: /\d/,
		a: /[\u0041-\u005A\u0061-\u007A\u00AA\u00B5\u00BA\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02C1\u02C6-\u02D1\u02E0-\u02E4\u02EC\u02EE\u0370-\u0374\u0376\u0377\u037A-\u037D\u0386\u0388-\u038A\u038C\u038E-\u03A1\u03A3-\u03F5\u03F7-\u0481\u048A-\u0527\u0531-\u0556\u0559\u0561-\u0587\u05D0-\u05EA\u05F0-\u05F2\u0620-\u064A\u066E\u066F\u0671-\u06D3\u06D5\u06E5\u06E6\u06EE\u06EF\u06FA-\u06FC\u06FF\u0710\u0712-\u072F\u074D-\u07A5\u07B1\u07CA-\u07EA\u07F4\u07F5\u07FA\u0800-\u0815\u081A\u0824\u0828\u0840-\u0858\u08A0\u08A2-\u08AC\u0904-\u0939\u093D\u0950\u0958-\u0961\u0971-\u0977\u0979-\u097F\u0985-\u098C\u098F\u0990\u0993-\u09A8\u09AA-\u09B0\u09B2\u09B6-\u09B9\u09BD\u09CE\u09DC\u09DD\u09DF-\u09E1\u09F0\u09F1\u0A05-\u0A0A\u0A0F\u0A10\u0A13-\u0A28\u0A2A-\u0A30\u0A32\u0A33\u0A35\u0A36\u0A38\u0A39\u0A59-\u0A5C\u0A5E\u0A72-\u0A74\u0A85-\u0A8D\u0A8F-\u0A91\u0A93-\u0AA8\u0AAA-\u0AB0\u0AB2\u0AB3\u0AB5-\u0AB9\u0ABD\u0AD0\u0AE0\u0AE1\u0B05-\u0B0C\u0B0F\u0B10\u0B13-\u0B28\u0B2A-\u0B30\u0B32\u0B33\u0B35-\u0B39\u0B3D\u0B5C\u0B5D\u0B5F-\u0B61\u0B71\u0B83\u0B85-\u0B8A\u0B8E-\u0B90\u0B92-\u0B95\u0B99\u0B9A\u0B9C\u0B9E\u0B9F\u0BA3\u0BA4\u0BA8-\u0BAA\u0BAE-\u0BB9\u0BD0\u0C05-\u0C0C\u0C0E-\u0C10\u0C12-\u0C28\u0C2A-\u0C33\u0C35-\u0C39\u0C3D\u0C58\u0C59\u0C60\u0C61\u0C85-\u0C8C\u0C8E-\u0C90\u0C92-\u0CA8\u0CAA-\u0CB3\u0CB5-\u0CB9\u0CBD\u0CDE\u0CE0\u0CE1\u0CF1\u0CF2\u0D05-\u0D0C\u0D0E-\u0D10\u0D12-\u0D3A\u0D3D\u0D4E\u0D60\u0D61\u0D7A-\u0D7F\u0D85-\u0D96\u0D9A-\u0DB1\u0DB3-\u0DBB\u0DBD\u0DC0-\u0DC6\u0E01-\u0E30\u0E32\u0E33\u0E40-\u0E46\u0E81\u0E82\u0E84\u0E87\u0E88\u0E8A\u0E8D\u0E94-\u0E97\u0E99-\u0E9F\u0EA1-\u0EA3\u0EA5\u0EA7\u0EAA\u0EAB\u0EAD-\u0EB0\u0EB2\u0EB3\u0EBD\u0EC0-\u0EC4\u0EC6\u0EDC-\u0EDF\u0F00\u0F40-\u0F47\u0F49-\u0F6C\u0F88-\u0F8C\u1000-\u102A\u103F\u1050-\u1055\u105A-\u105D\u1061\u1065\u1066\u106E-\u1070\u1075-\u1081\u108E\u10A0-\u10C5\u10C7\u10CD\u10D0-\u10FA\u10FC-\u1248\u124A-\u124D\u1250-\u1256\u1258\u125A-\u125D\u1260-\u1288\u128A-\u128D\u1290-\u12B0\u12B2-\u12B5\u12B8-\u12BE\u12C0\u12C2-\u12C5\u12C8-\u12D6\u12D8-\u1310\u1312-\u1315\u1318-\u135A\u1380-\u138F\u13A0-\u13F4\u1401-\u166C\u166F-\u167F\u1681-\u169A\u16A0-\u16EA\u1700-\u170C\u170E-\u1711\u1720-\u1731\u1740-\u1751\u1760-\u176C\u176E-\u1770\u1780-\u17B3\u17D7\u17DC\u1820-\u1877\u1880-\u18A8\u18AA\u18B0-\u18F5\u1900-\u191C\u1950-\u196D\u1970-\u1974\u1980-\u19AB\u19C1-\u19C7\u1A00-\u1A16\u1A20-\u1A54\u1AA7\u1B05-\u1B33\u1B45-\u1B4B\u1B83-\u1BA0\u1BAE\u1BAF\u1BBA-\u1BE5\u1C00-\u1C23\u1C4D-\u1C4F\u1C5A-\u1C7D\u1CE9-\u1CEC\u1CEE-\u1CF1\u1CF5\u1CF6\u1D00-\u1DBF\u1E00-\u1F15\u1F18-\u1F1D\u1F20-\u1F45\u1F48-\u1F4D\u1F50-\u1F57\u1F59\u1F5B\u1F5D\u1F5F-\u1F7D\u1F80-\u1FB4\u1FB6-\u1FBC\u1FBE\u1FC2-\u1FC4\u1FC6-\u1FCC\u1FD0-\u1FD3\u1FD6-\u1FDB\u1FE0-\u1FEC\u1FF2-\u1FF4\u1FF6-\u1FFC\u2071\u207F\u2090-\u209C\u2102\u2107\u210A-\u2113\u2115\u2119-\u211D\u2124\u2126\u2128\u212A-\u212D\u212F-\u2139\u213C-\u213F\u2145-\u2149\u214E\u2183\u2184\u2C00-\u2C2E\u2C30-\u2C5E\u2C60-\u2CE4\u2CEB-\u2CEE\u2CF2\u2CF3\u2D00-\u2D25\u2D27\u2D2D\u2D30-\u2D67\u2D6F\u2D80-\u2D96\u2DA0-\u2DA6\u2DA8-\u2DAE\u2DB0-\u2DB6\u2DB8-\u2DBE\u2DC0-\u2DC6\u2DC8-\u2DCE\u2DD0-\u2DD6\u2DD8-\u2DDE\u2E2F\u3005\u3006\u3031-\u3035\u303B\u303C\u3041-\u3096\u309D-\u309F\u30A1-\u30FA\u30FC-\u30FF\u3105-\u312D\u3131-\u318E\u31A0-\u31BA\u31F0-\u31FF\u3400-\u4DB5\u4E00-\u9FCC\uA000-\uA48C\uA4D0-\uA4FD\uA500-\uA60C\uA610-\uA61F\uA62A\uA62B\uA640-\uA66E\uA67F-\uA697\uA6A0-\uA6E5\uA717-\uA71F\uA722-\uA788\uA78B-\uA78E\uA790-\uA793\uA7A0-\uA7AA\uA7F8-\uA801\uA803-\uA805\uA807-\uA80A\uA80C-\uA822\uA840-\uA873\uA882-\uA8B3\uA8F2-\uA8F7\uA8FB\uA90A-\uA925\uA930-\uA946\uA960-\uA97C\uA984-\uA9B2\uA9CF\uAA00-\uAA28\uAA40-\uAA42\uAA44-\uAA4B\uAA60-\uAA76\uAA7A\uAA80-\uAAAF\uAAB1\uAAB5\uAAB6\uAAB9-\uAABD\uAAC0\uAAC2\uAADB-\uAADD\uAAE0-\uAAEA\uAAF2-\uAAF4\uAB01-\uAB06\uAB09-\uAB0E\uAB11-\uAB16\uAB20-\uAB26\uAB28-\uAB2E\uABC0-\uABE2\uAC00-\uD7A3\uD7B0-\uD7C6\uD7CB-\uD7FB\uF900-\uFA6D\uFA70-\uFAD9\uFB00-\uFB06\uFB13-\uFB17\uFB1D\uFB1F-\uFB28\uFB2A-\uFB36\uFB38-\uFB3C\uFB3E\uFB40\uFB41\uFB43\uFB44\uFB46-\uFBB1\uFBD3-\uFD3D\uFD50-\uFD8F\uFD92-\uFDC7\uFDF0-\uFDFB\uFE70-\uFE74\uFE76-\uFEFC\uFF21-\uFF3A\uFF41-\uFF5A\uFF66-\uFFBE\uFFC2-\uFFC7\uFFCA-\uFFCF\uFFD2-\uFFD7\uFFDA-\uFFDC]/,
		"*": /./
	}, dt.TYPES = {INPUT: "input", FIXED: "fixed"};
	var vt = function () {
		function t(e, n) {
			var u = n.name, r = n.offset, i = n.mask, o = n.validate;
			rt(this, t), this.masked = e, this.name = u, this.offset = r, this.mask = i, this.validate = o || function () {
				return !0
			}
		}

		return t.prototype.doValidate = function (t) {
			return this.validate(this.value, this, t)
		}, it(t, [{
			key: "value", get: function () {
				return this.masked.value.slice(this.masked.mapDefIndexToPos(this.offset), this.masked.mapDefIndexToPos(this.offset + this.mask.length))
			}
		}, {
			key: "unmaskedValue", get: function () {
				return this.masked.extractInput(this.masked.mapDefIndexToPos(this.offset), this.masked.mapDefIndexToPos(this.offset + this.mask.length))
			}
		}]), t
	}(), gt = function () {
		function t(e) {
			var n = e[0], u = e[1],
				r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : String(u).length;
			rt(this, t), this._from = n, this._to = u, this._maxLength = r, this.validate = this.validate.bind(this), this._update()
		}

		return t.prototype._update = function () {
			this._maxLength = Math.max(this._maxLength, String(this.to).length), this.mask = "0".repeat(this._maxLength)
		}, t.prototype.validate = function (t) {
			var e = "", n = "", u = t.match(/^(\D*)(\d*)(\D*)/) || [], r = u[1], i = u[2];
			return i && (e = "0".repeat(r.length) + i, n = "9".repeat(r.length) + i), -1 === t.search(/[^0]/) && t.length <= this._matchFrom || (e = e.padEnd(this._maxLength, "0"), n = n.padEnd(this._maxLength, "9"), this.from <= Number(n) && Number(e) <= this.to)
		}, it(t, [{
			key: "to", get: function () {
				return this._to
			}, set: function (t) {
				this._to = t, this._update()
			}
		}, {
			key: "from", get: function () {
				return this._from
			}, set: function (t) {
				this._from = t, this._update()
			}
		}, {
			key: "maxLength", get: function () {
				return this._maxLength
			}, set: function (t) {
				this._maxLength = t, this._update()
			}
		}, {
			key: "_matchFrom", get: function () {
				return this.maxLength - String(this.from).length
			}
		}]), t
	}();
	vt.Range = gt, vt.Enum = function (t) {
		return {
			mask: "*".repeat(t[0].length), validate: function (e, n, u) {
				return t.some(function (t) {
					return t.indexOf(n.unmaskedValue) >= 0
				})
			}
		}
	};
	var mt = function (t) {
		function e() {
			var n = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
			return rt(this, e), n.definitions = ot({}, dt.DEFAULTS, n.definitions), at(this, t.call(this, ot({}, e.DEFAULTS, n)))
		}

		return st(e, t), e.prototype._update = function () {
			var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
			e.definitions = ot({}, this.definitions, e.definitions), null != e.placeholder && (console.warn("'placeholder' option is deprecated and will be removed in next major release, use 'placeholderChar' and 'lazy' instead."), "char" in e.placeholder && (e.placeholderChar = e.placeholder.char), "lazy" in e.placeholder && (e.lazy = e.placeholder.lazy), delete e.placeholder), null != e.placeholderLazy && (console.warn("'placeholderLazy' option is deprecated and will be removed in next major release, use 'lazy' instead."), e.lazy = e.placeholderLazy, delete e.placeholderLazy), t.prototype._update.call(this, e), this._updateMask()
		}, e.prototype._updateMask = function () {
			var t = this, n = this.definitions;
			this._charDefs = [], this._groupDefs = [];
			var u = this.mask;
			if (u && n) {
				var r = !1, i = !1, o = !1;
				t:for (var s = 0; s < u.length; ++s) switch (function (a) {
					if (t.groups) {
						var h = u.slice(a), l = Object.keys(t.groups).filter(function (t) {
							return 0 === h.indexOf(t)
						});
						l.sort(function (t, e) {
							return e.length - t.length
						});
						var p = l[0];
						if (p) {
							var c = t.groups[p];
							t._groupDefs.push(new vt(t, {
								name: p,
								offset: t._charDefs.length,
								mask: c.mask,
								validate: c.validate
							})), u = u.replace(p, c.mask)
						}
					}
					var f = u[a], d = !r && f in n ? dt.TYPES.INPUT : dt.TYPES.FIXED, v = d === dt.TYPES.INPUT || r,
						g = d === dt.TYPES.INPUT && i;
					if (f === e.STOP_CHAR) return o = !0, "continue";
					if ("{" === f || "}" === f) return r = !r, "continue";
					if ("[" === f || "]" === f) return i = !i, "continue";
					if (f === e.ESCAPE_CHAR) {
						if (++a, !(f = u[a])) return "break";
						d = dt.TYPES.FIXED
					}
					t._charDefs.push(new dt({
						char: f,
						type: d,
						optional: g,
						stopAlign: o,
						unmasking: v,
						mask: d === dt.TYPES.INPUT ? n[f] : function (t) {
							return t === f
						}
					})), o = !1, s = a
				}(s)) {
					case"continue":
						continue;
					case"break":
						break t
				}
			}
		}, e.prototype.doValidate = function () {
			for (var e, n = arguments.length, u = Array(n), r = 0; r < n; r++) u[r] = arguments[r];
			return this._groupDefs.every(function (t) {
				return t.doValidate.apply(t, u)
			}) && (e = t.prototype.doValidate).call.apply(e, [this].concat(u))
		}, e.prototype.clone = function () {
			var t = this, n = new e(this);
			return n._value = this.value, n._charDefs.forEach(function (e, n) {
				return ot(e, t._charDefs[n])
			}), n._groupDefs.forEach(function (e, n) {
				return ot(e, t._groupDefs[n])
			}), n
		}, e.prototype.reset = function () {
			t.prototype.reset.call(this), this._charDefs.forEach(function (t) {
				delete t.isHollow
			})
		}, e.prototype.hiddenHollowsBefore = function (t) {
			return this._charDefs.slice(0, t).filter(function (t) {
				return t.isHiddenHollow
			}).length
		}, e.prototype.mapDefIndexToPos = function (t) {
			return t - this.hiddenHollowsBefore(t)
		}, e.prototype.mapPosToDefIndex = function (t) {
			for (var e = t, n = 0; n < this._charDefs.length; ++n) {
				var u = this._charDefs[n];
				if (n >= e) break;
				u.isHiddenHollow && ++e
			}
			return e
		}, e.prototype._unmask = function () {
			for (var t = this.value, e = "", n = 0, u = 0; n < t.length && u < this._charDefs.length; ++u) {
				var r = t[n], i = this._charDefs[u];
				i.isHiddenHollow || (i.unmasking && !i.isHollow && (e += r), ++n)
			}
			return e
		}, e.prototype._appendTail = function () {
			var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : [];
			return this._appendChunks(t, {tail: !0}).aggregate(this._appendPlaceholder())
		}, e.prototype._append = function (t) {
			var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}, u = this.value.length, r = "",
				i = !1;
			t = this.doPrepare(t, e);
			for (var o = 0, s = this.mapPosToDefIndex(this.value.length); o < t.length;) {
				var a = t[o], h = this._charDefs[s];
				if (null == h) {
					i = !0;
					break
				}
				h.isHollow = !1;
				var l = void 0, p = void 0, c = n(h.resolve(a), a);
				h.type === dt.TYPES.INPUT ? (c && (this._value += c, this.doValidate() || (c = "", this._value = this.value.slice(0, -1))), l = !!c, p = !c && !h.optional, c ? r += c : (h.optional || e.input || (this._value += this.placeholderChar, p = !1), p || (h.isHollow = !0))) : (this._value += h.char, l = c && (h.unmasking || e.input || e.raw) && !e.tail, h.isRawInput = l && (e.raw || e.input), h.isRawInput && (r += h.char)), p || ++s, (l || p) && ++o
			}
			return new ct({inserted: this.value.slice(u), rawInserted: r, overflow: i})
		}, e.prototype._appendChunks = function (t) {
			for (var e = new ct, n = arguments.length, u = Array(n > 1 ? n - 1 : 0), r = 1; r < n; r++) u[r - 1] = arguments[r];
			for (var i = 0; i < t.length; ++i) {
				var o = t[i], s = o[0], a = o[1];
				if (null != s && e.aggregate(this._appendPlaceholder(s)), e.aggregate(this._append.apply(this, [a].concat(u))).overflow) break
			}
			return e
		}, e.prototype._extractTail = function () {
			var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
				e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : this.value.length;
			return this._extractInputChunks(t, e)
		}, e.prototype.extractInput = function () {
			var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
				e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : this.value.length,
				n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
			if (t === e) return "";
			for (var u = this.value, r = "", i = this.mapPosToDefIndex(e), o = t, s = this.mapPosToDefIndex(t); o < e && o < u.length && s < i; ++s) {
				var a = u[o], h = this._charDefs[s];
				if (!h) break;
				h.isHiddenHollow || ((h.isInput && !h.isHollow || n.raw && !h.isInput && h.isRawInput) && (r += a), ++o)
			}
			return r
		}, e.prototype._extractInputChunks = function () {
			var t = this, e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
				n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : this.value.length;
			if (e === n) return [];
			var u = this.mapPosToDefIndex(e), r = this.mapPosToDefIndex(n), i = this._charDefs.map(function (t, e) {
				return [t, e]
			}).slice(u, r).filter(function (t) {
				return t[0].stopAlign
			}).map(function (t) {
				return t[1]
			}), o = [u].concat(i, [r]);
			return o.map(function (e, n) {
				return [i.indexOf(e) >= 0 ? e : null, t.extractInput(t.mapDefIndexToPos(e), t.mapDefIndexToPos(o[++n]))]
			}).filter(function (t) {
				var e = t[0], n = t[1];
				return null != e || n
			})
		}, e.prototype._appendPlaceholder = function (t) {
			for (var e = this.value.length, n = t || this._charDefs.length, u = this.mapPosToDefIndex(this.value.length); u < n; ++u) {
				var r = this._charDefs[u];
				r.isInput && (r.isHollow = !0), this.lazy && !t || (this._value += r.isInput || null == r.char ? r.optional ? "" : this.placeholderChar : r.char)
			}
			return new ct({inserted: this.value.slice(e)})
		}, e.prototype.remove = function () {
			var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
				e = t + (arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : this.value.length - t);
			this._value = this.value.slice(0, t) + this.value.slice(e);
			var n = this.mapPosToDefIndex(t), u = this.mapPosToDefIndex(e);
			this._charDefs.slice(n, u).forEach(function (t) {
				return t.reset()
			})
		}, e.prototype.nearestInputPos = function (t) {
			var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : ht.NONE, n = e || ht.LEFT,
				r = this.mapPosToDefIndex(t), i = this._charDefs[r], o = r, s = void 0, a = void 0, h = void 0,
				l = void 0;
			if (e !== ht.RIGHT && (i && i.isInput || e === ht.NONE && t === this.value.length) && (s = r, i && !i.isHollow && (a = r)), null == a && e == ht.LEFT || null == s) for (l = u(o, n); 0 <= l && l < this._charDefs.length; o += n, l += n) {
				var p = this._charDefs[l];
				if (null == s && p.isInput && (s = o), null == h && p.isHollow && !p.isHiddenHollow && (h = o), p.isInput && !p.isHollow) {
					a = o;
					break
				}
			}
			if (e !== ht.LEFT || 0 !== o || i && i.isInput || (s = 0), e !== ht.RIGHT || null == s) {
				var c = !1;
				for (l = u(o, n = -n); 0 <= l && l < this._charDefs.length; o += n, l += n) {
					var f = this._charDefs[l];
					if (f.isInput && (s = o, f.isHollow && !f.isHiddenHollow)) break;
					if (o === r && (c = !0), c && null != s) break
				}
				(c = c || l >= this._charDefs.length) && null != s && (o = s)
			} else null == a && (o = null != h ? h : s);
			return this.mapDefIndexToPos(o)
		}, e.prototype.group = function (t) {
			return this.groupsByName(t)[0]
		}, e.prototype.groupsByName = function (t) {
			return this._groupDefs.filter(function (e) {
				return e.name === t
			})
		}, it(e, [{
			key: "isComplete", get: function () {
				var t = this;
				return !this._charDefs.some(function (e, n) {
					return e.isInput && !e.optional && (e.isHollow || !t.extractInput(n, n + 1))
				})
			}
		}]), e
	}(ft);
	mt.DEFAULTS = {
		lazy: !0,
		placeholderChar: "_"
	}, mt.STOP_CHAR = "`", mt.ESCAPE_CHAR = "\\", mt.Definition = dt, mt.Group = vt;
	var At = function (t) {
		function e(n) {
			return rt(this, e), at(this, t.call(this, ot({}, e.DEFAULTS, n)))
		}

		return st(e, t), e.prototype._update = function (n) {
			n.mask === Date && delete n.mask, n.pattern && (n.mask = n.pattern, delete n.pattern);
			var u = n.groups;
			n.groups = ot({}, e.GET_DEFAULT_GROUPS()), n.min && (n.groups.Y.from = n.min.getFullYear()), n.max && (n.groups.Y.to = n.max.getFullYear()), ot(n.groups, u), t.prototype._update.call(this, n)
		}, e.prototype.doValidate = function () {
			for (var e, n = arguments.length, u = Array(n), r = 0; r < n; r++) u[r] = arguments[r];
			var i = (e = t.prototype.doValidate).call.apply(e, [this].concat(u)), o = this.date;
			return i && (!this.isComplete || this.isDateExist(this.value) && o && (null == this.min || this.min <= o) && (null == this.max || o <= this.max))
		}, e.prototype.isDateExist = function (t) {
			return this.format(this.parse(t)) === t
		}, it(e, [{
			key: "date", get: function () {
				return this.isComplete ? this.parse(this.value) : null
			}, set: function (t) {
				this.value = this.format(t)
			}
		}]), e
	}(mt);
	At.DEFAULTS = {
		pattern: "d{.}`m{.}`Y", format: function (t) {
			return [String(t.getDate()).padStart(2, "0"), String(t.getMonth() + 1).padStart(2, "0"), t.getFullYear()].join(".")
		}, parse: function (t) {
			var e = t.split("."), n = e[0], u = e[1], r = e[2];
			return new Date(r, u - 1, n)
		}
	}, At.GET_DEFAULT_GROUPS = function () {
		return {d: new vt.Range([1, 31]), m: new vt.Range([1, 12]), Y: new vt.Range([1900, 9999])}
	};
	var yt = function () {
		function t(e, n) {
			rt(this, t), this.el = e, this.masked = s(n), this._listeners = {}, this._value = "", this._unmaskedValue = "", this._saveSelection = this._saveSelection.bind(this), this._onInput = this._onInput.bind(this), this._onChange = this._onChange.bind(this), this._onDrop = this._onDrop.bind(this), this.alignCursor = this.alignCursor.bind(this), this.alignCursorFriendly = this.alignCursorFriendly.bind(this), this.bindEvents(), this.updateValue(), this._onChange()
		}

		return t.prototype.bindEvents = function () {
			this.el.addEventListener("keydown", this._saveSelection), this.el.addEventListener("input", this._onInput), this.el.addEventListener("drop", this._onDrop), this.el.addEventListener("click", this.alignCursorFriendly), this.el.addEventListener("change", this._onChange)
		}, t.prototype.unbindEvents = function () {
			this.el.removeEventListener("keydown", this._saveSelection), this.el.removeEventListener("input", this._onInput), this.el.removeEventListener("drop", this._onDrop), this.el.removeEventListener("click", this.alignCursorFriendly), this.el.removeEventListener("change", this._onChange)
		}, t.prototype.fireEvent = function (t) {
			(this._listeners[t] || []).forEach(function (t) {
				return t()
			})
		}, t.prototype._saveSelection = function () {
			this.value !== this.el.value && console.warn("Uncontrolled input change, refresh mask manually!"), this._selection = {
				start: this.selectionStart,
				end: this.cursorPos
			}
		}, t.prototype.updateValue = function () {
			this.masked.value = this.el.value
		}, t.prototype.updateControl = function () {
			var t = this.masked.unmaskedValue, e = this.masked.value, n = this.unmaskedValue !== t || this.value !== e;
			this._unmaskedValue = t, this._value = e, this.el.value !== e && (this.el.value = e), n && this._fireChangeEvents()
		}, t.prototype.updateOptions = function (t) {
			(t = ot({}, t)).mask === Date && this.masked instanceof At && delete t.mask, i(this.masked, t) || (this.masked.updateOptions(t), this.updateControl())
		}, t.prototype.updateCursor = function (t) {
			null != t && (this.cursorPos = t, this._delayUpdateCursor(t))
		}, t.prototype._delayUpdateCursor = function (t) {
			var e = this;
			this._abortUpdateCursor(), this._changingCursorPos = t, this._cursorChanging = setTimeout(function () {
				e.el && (e.cursorPos = e._changingCursorPos, e._abortUpdateCursor())
			}, 10)
		}, t.prototype._fireChangeEvents = function () {
			this.fireEvent("accept"), this.masked.isComplete && this.fireEvent("complete")
		}, t.prototype._abortUpdateCursor = function () {
			this._cursorChanging && (clearTimeout(this._cursorChanging), delete this._cursorChanging)
		}, t.prototype.alignCursor = function () {
			this.cursorPos = this.masked.nearestInputPos(this.cursorPos, ht.LEFT)
		}, t.prototype.alignCursorFriendly = function () {
			this.selectionStart === this.cursorPos && this.alignCursor()
		}, t.prototype.on = function (t, e) {
			return this._listeners[t] || (this._listeners[t] = []), this._listeners[t].push(e), this
		}, t.prototype.off = function (t, e) {
			if (this._listeners[t]) {
				if (e) {
					var n = this._listeners[t].indexOf(e);
					return n >= 0 && this._listeners[t].splice(n, 1), this
				}
				delete this._listeners[t]
			}
		}, t.prototype._onInput = function () {
			this._abortUpdateCursor();
			var t = new pt(this.el.value, this.cursorPos, this.value, this._selection),
				e = this.masked.splice(t.startChangePos, t.removed.length, t.inserted, t.removeDirection).offset,
				n = this.masked.nearestInputPos(t.startChangePos + e);
			this.updateControl(), this.updateCursor(n)
		}, t.prototype._onChange = function () {
			this.value !== this.el.value && this.updateValue(), this.masked.doCommit(), this.updateControl()
		}, t.prototype._onDrop = function (t) {
			t.preventDefault(), t.stopPropagation()
		}, t.prototype.destroy = function () {
			this.unbindEvents(), this._listeners.length = 0, delete this.el
		}, it(t, [{
			key: "mask", get: function () {
				return this.masked.mask
			}, set: function (t) {
				if (null != t && t !== this.masked.mask) if (this.masked.constructor !== o(t)) {
					var e = s({mask: t});
					e.unmaskedValue = this.masked.unmaskedValue, this.masked = e
				} else this.masked.mask = t
			}
		}, {
			key: "value", get: function () {
				return this._value
			}, set: function (t) {
				this.masked.value = t, this.updateControl(), this.alignCursor()
			}
		}, {
			key: "unmaskedValue", get: function () {
				return this._unmaskedValue
			}, set: function (t) {
				this.masked.unmaskedValue = t, this.updateControl(), this.alignCursor()
			}
		}, {
			key: "selectionStart", get: function () {
				return this._cursorChanging ? this._changingCursorPos : this.el.selectionStart
			}
		}, {
			key: "cursorPos", get: function () {
				return this._cursorChanging ? this._changingCursorPos : this.el.selectionEnd
			}, set: function (t) {
				this.el === document.activeElement && (this.el.setSelectionRange(t, t), this._saveSelection())
			}
		}]), t
	}(), _t = function (t) {
		function e(n) {
			return rt(this, e), at(this, t.call(this, ot({}, e.DEFAULTS, n)))
		}

		return st(e, t), e.prototype._update = function (e) {
			e.postFormat && (console.warn("'postFormat' option is deprecated and will be removed in next release, use plain options instead."), ot(e, e.postFormat), delete e.postFormat), t.prototype._update.call(this, e), this._updateRegExps()
		}, e.prototype._updateRegExps = function () {
			var t = "", e = "";
			this.allowNegative ? (t += "([+|\\-]?|([+|\\-]?(0|([1-9]+\\d*))))", e += "[+|\\-]?") : t += "(0|([1-9]+\\d*))", e += "\\d*";
			var n = (this.scale ? "(" + this.radix + "\\d{0," + this.scale + "})?" : "") + "$";
			this._numberRegExpInput = new RegExp("^" + t + n), this._numberRegExp = new RegExp("^" + e + n), this._mapToRadixRegExp = new RegExp("[" + this.mapToRadix.map(r).join("") + "]", "g"), this._thousandsSeparatorRegExp = new RegExp(r(this.thousandsSeparator), "g")
		}, e.prototype._extractTail = function () {
			var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
				n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : this.value.length;
			return this._removeThousandsSeparators(t.prototype._extractTail.call(this, e, n))
		}, e.prototype._removeThousandsSeparators = function (t) {
			return t.replace(this._thousandsSeparatorRegExp, "")
		}, e.prototype._insertThousandsSeparators = function (t) {
			var e = t.split(this.radix);
			return e[0] = e[0].replace(/\B(?=(\d{3})+(?!\d))/g, this.thousandsSeparator), e.join(this.radix)
		}, e.prototype.doPrepare = function (e) {
			for (var n, u = arguments.length, r = Array(u > 1 ? u - 1 : 0), i = 1; i < u; i++) r[i - 1] = arguments[i];
			return (n = t.prototype.doPrepare).call.apply(n, [this, this._removeThousandsSeparators(e.replace(this._mapToRadixRegExp, this.radix))].concat(r))
		}, e.prototype.appendWithTail = function () {
			var e, n = this.value;
			this._value = this._removeThousandsSeparators(this.value);
			for (var u = this.value.length, r = arguments.length, i = Array(r), o = 0; o < r; o++) i[o] = arguments[o];
			var s = (e = t.prototype.appendWithTail).call.apply(e, [this].concat(i));
			this._value = this._insertThousandsSeparators(this.value);
			for (var a = u + s.inserted.length, h = 0; h <= a; ++h) this.value[h] === this.thousandsSeparator && ((h < u || h === u && n[h] === this.thousandsSeparator) && ++u, h < a && ++a);
			return s.rawInserted = s.inserted, s.inserted = this.value.slice(u, a), s.shift += u - n.length, s
		}, e.prototype.nearestInputPos = function (t, e) {
			if (!e) return t;
			var n = u(t, e);
			return this.value[n] === this.thousandsSeparator && (t += e), t
		}, e.prototype.doValidate = function (e) {
			var n = (e.input ? this._numberRegExpInput : this._numberRegExp).test(this._removeThousandsSeparators(this.value));
			if (n) {
				var u = this.number;
				n = n && !isNaN(u) && (null == this.min || this.min >= 0 || this.min <= this.number) && (null == this.max || this.max <= 0 || this.number <= this.max)
			}
			return n && t.prototype.doValidate.call(this, e)
		}, e.prototype.doCommit = function () {
			var e = this.number, n = e;
			null != this.min && (n = Math.max(n, this.min)), null != this.max && (n = Math.min(n, this.max)), n !== e && (this.unmaskedValue = String(n));
			var u = this.value;
			this.normalizeZeros && (u = this._normalizeZeros(u)), this.padFractionalZeros && (u = this._padFractionalZeros(u)), this._value = u, t.prototype.doCommit.call(this)
		}, e.prototype._normalizeZeros = function (t) {
			var e = this._removeThousandsSeparators(t).split(this.radix);
			return e[0] = e[0].replace(/^(\D*)(0*)(\d*)/, function (t, e, n, u) {
				return e + u
			}), t.length && !/\d$/.test(e[0]) && (e[0] = e[0] + "0"), e.length > 1 && (e[1] = e[1].replace(/0*$/, ""), e[1].length || (e.length = 1)), this._insertThousandsSeparators(e.join(this.radix))
		}, e.prototype._padFractionalZeros = function (t) {
			var e = t.split(this.radix);
			return e.length < 2 && e.push(""), e[1] = e[1].padEnd(this.scale, "0"), e.join(this.radix)
		}, it(e, [{
			key: "number", get: function () {
				var t = this._removeThousandsSeparators(this._normalizeZeros(this.unmaskedValue)).replace(this.radix, ".");
				return Number(t)
			}, set: function (t) {
				this.unmaskedValue = String(t).replace(".", this.radix)
			}
		}, {
			key: "allowNegative", get: function () {
				return this.signed || null != this.min && this.min < 0 || null != this.max && this.max < 0
			}
		}]), e
	}(ft);
	_t.DEFAULTS = {
		radix: ",",
		thousandsSeparator: "",
		mapToRadix: ["."],
		scale: 2,
		signed: !1,
		normalizeZeros: !0,
		padFractionalZeros: !1
	};
	var Ft = function (t) {
		function e() {
			return rt(this, e), at(this, t.apply(this, arguments))
		}

		return st(e, t), e.prototype._update = function (e) {
			e.validate = function (t) {
				return t.search(e.mask) >= 0
			}, t.prototype._update.call(this, e)
		}, e
	}(ft), Ct = function (t) {
		function e() {
			return rt(this, e), at(this, t.apply(this, arguments))
		}

		return st(e, t), e.prototype._update = function (e) {
			e.validate = e.mask, t.prototype._update.call(this, e)
		}, e
	}(ft), Dt = function (t) {
		function e(n) {
			rt(this, e);
			var u = at(this, t.call(this, ot({}, e.DEFAULTS, n)));
			return u.currentMask = null, u
		}

		return st(e, t), e.prototype._update = function (e) {
			t.prototype._update.call(this, e), this.compiledMasks = Array.isArray(e.mask) ? e.mask.map(function (t) {
				return s(t)
			}) : []
		}, e.prototype._append = function (t) {
			for (var e = this.value.length, n = new ct, u = arguments.length, r = Array(u > 1 ? u - 1 : 0), i = 1; i < u; i++) r[i - 1] = arguments[i];
			t = this.doPrepare.apply(this, [t].concat(r));
			var o = this.rawInputValue;
			if (this.currentMask = this.doDispatch.apply(this, [t].concat(r)), this.currentMask) {
				var s;
				this.currentMask.rawInputValue = o, n.shift = this.value.length - e, n.aggregate((s = this.currentMask)._append.apply(s, [t].concat(r)))
			}
			return n
		}, e.prototype.doDispatch = function (t) {
			var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
			return this.dispatch(t, this, e)
		}, e.prototype.clone = function () {
			var t = new e(this);
			return t._value = this.value, this.currentMask && (t.currentMask = this.currentMask.clone()), t
		}, e.prototype.reset = function () {
			this.currentMask && this.currentMask.reset(), this.compiledMasks.forEach(function (t) {
				return t.reset()
			})
		}, e.prototype._unmask = function () {
			return this.currentMask ? this.currentMask._unmask() : ""
		}, e.prototype.remove = function () {
			var t;
			this.currentMask && (t = this.currentMask).remove.apply(t, arguments)
		}, e.prototype.extractInput = function () {
			var t;
			return this.currentMask ? (t = this.currentMask).extractInput.apply(t, arguments) : ""
		}, e.prototype.doCommit = function () {
			this.currentMask && this.currentMask.doCommit(), t.prototype.doCommit.call(this)
		}, e.prototype.nearestInputPos = function () {
			for (var e, n, u = arguments.length, r = Array(u), i = 0; i < u; i++) r[i] = arguments[i];
			return this.currentMask ? (e = this.currentMask).nearestInputPos.apply(e, r) : (n = t.prototype.nearestInputPos).call.apply(n, [this].concat(r))
		}, it(e, [{
			key: "value", get: function () {
				return this.currentMask ? this.currentMask.value : ""
			}, set: function (t) {
				this.resolve(t)
			}
		}, {
			key: "isComplete", get: function () {
				return !!this.currentMask && this.currentMask.isComplete
			}
		}]), e
	}(ft);
	return Dt.DEFAULTS = {
		dispatch: function (t, e, n) {
			if (e.compiledMasks.length) {
				var u = e.rawInputValue;
				e.compiledMasks.forEach(function (e) {
					e.rawInputValue = u, e._append(t, n)
				});
				var r = e.compiledMasks.map(function (t, e) {
					return {value: t.rawInputValue.length, index: e}
				});
				return r.sort(function (t, e) {
					return e.value - t.value
				}), e.compiledMasks[r[0].index]
			}
		}
	}, a.InputMask = yt, a.Masked = ft, a.MaskedPattern = mt, a.MaskedNumber = _t, a.MaskedDate = At, a.MaskedRegExp = Ft, a.MaskedFunction = Ct, a.MaskedDynamic = Dt, a.createMask = s, lt.IMask = a, a
});
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

// requestAnimationFrame polyfill by Erik M??ller. fixes from Paul Irish and Tino Zijdel

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
 * ?????? ?????????? ????????????, ?????????????? ?????????? ???????????? ?????????? ??????
 * @type {Object}
 */

var taiLib = {

	/**
	 * [mobileDetect ????????????????????, ?????????????????? ???????????????????? ?????? ??????]
	 */
	mobileDetect: /Android|iPhone|iPad|iPod|BlackBerry|WPDesktop|IEMobile|Opera Mini/i.test(navigator.userAgent),

	/**
	 * @param  tagname ?????????????? ???????????????? ????????
	 * @param  attrs ???????????? ?????????????????? ???????? {'class': 'element', 'href': '/', 'id': 'element'}
	 * @param  parent ???????? ???????????????????? ????????????????, ???? ?????????????????? ??????????????
	 * @return obj ???????????????????? ?????????????????? ??????????????
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
	 * @param  element ??????, ?? ???????????????? ???????????????????? ???????????????????? ?? ?????????????? ?????????? ????????????????
	 * @return {top, left, right, bottom, width, height} ???????????????????? ?????????????? ????????????????????, ??????????, ????????????, ????????????, ???????????? ?? ???????????? ???????????????????????? ?????????????? ?????????? ????????
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

		// ???????? ?????????????????? ?????????? ????????????????
		if(options.range) {

			for(var i = 0, l = options.range.length; i < l ; i += 1) {
				options.range[i].duration = options.range[i].end - options.range[i].start;
				options.range[i].startRange = options.range[i].start / options.duration;
				options.range[i].endRange = options.range[i].end / options.duration;
				options.range[i].easy = options.range[i].easy || "linear";
			}

		}

		requestAnimationFrame(function animate(time) {

			// timeFraction ???? 0 ???? 1
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

			// ???????? ?????????????????? ?????????? ????????????????
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

			// ?????????????? ?????????????????? ????????????????
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

				// ???????? ?????????????????? ?????????? ????????????????
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
 * ???????????????????? ??????????????, ???????? ?????? ??????????????, ???? ???????????????????? ?????? ????????????
 * @type {Object}
 */
var eventsMouseTouch = {
	start: taiLib.mobileDetect ? 'touchstart' : 'mousedown',
	move: taiLib.mobileDetect ? 'touchmove' : 'mousemove',
	end: taiLib.mobileDetect ? 'touchend' : 'mouseup'
};

(function(){function b(){this.tags={},this.tags.popup=d('popup',document.body),this.tags.popup__overlay=d('popup__overlay',this.tags.popup),this.tags.popup__table=d('popup__table',this.tags.popup),this.tags.popup__cell=d('popup__cell',this.tags.popup__table),this.tags.popup__block=d('popup__block',this.tags.popup__cell),this.tags.popup__close=d('popup__close',this.tags.popup__block),this.tags.popup__change=d('popup__change',this.tags.popup__block),this.eventsTrigger=c?'touchend':'mouseup',this.events(),this.scrollWidth=this.scrollWidthElement(),this.defaults={addClassNamePopup:'',closeOverlay:!0,closeShow:!0,background:'',closeButtons:'',offsetY:0,offsetX:0,coordElement:''}}var c=/Android|iPhone|iPad|iPod|BlackBerry|WPDesktop|IEMobile|Opera Mini/i.test(navigator.userAgent),d=function(f,g){var h=document.createElement('div');return h.className=f,g&&g.appendChild(h),h};b.prototype={options:function(f){return this.defaults=this.extend({addClassNamePopup:'',closeOverlay:!0,closeShow:!0,background:'',closeButtons:'',offsetY:0,offsetX:0,coordElement:''},f),this.defaults.background&&(this.tags.popup.style.background=this.defaults.background),this},extend:function(f,g){for(var h in g)g.hasOwnProperty(h)&&(f[h]=g[h]);return f},addCloseButtons:function(){var f=this,g=this.defaults.closeButtons.split(',');g.forEach(function(h){var k=document.querySelectorAll(h.replace(/\s+/g,''));Array.prototype.forEach.call(k,function(l){l.addEventListener(f.eventsTrigger,function(n){return n.stopPropagation(),f.close(),!1},!1)})})},coordSet:function(){var f=this,g=document.querySelector(this.defaults.coordElement);return g&&(this.coords=g.getBoundingClientRect(),this.tags.popup__block.style.left=this.coords.left+this.defaults.offsetX+'px',this.tags.popup__block.style.top=this.coords.top+this.defaults.offsetY+'px',this.tags.popup__block.style.position='absolute'),this},coordReset:function(){var f=this;return this.defaults={addClassNamePopup:'',closeOverlay:!0,closeShow:!0,background:'',closeButtons:'',offsetY:0,offsetX:0,coordElement:''},setTimeout(function(){f.tags.popup.style.background=''},500),this.tags.popup__block.style.left='',this.tags.popup__block.style.top='',this.tags.popup__block.style.position='',this},setBodyStyle:function(){var f=window.innerHeight<document.body.scrollHeight;return document.body.classList.add('popup__body_hidden'),f&&(document.body.style.paddingRight=this.scrollWidth+'px'),this},clearBodyStyle:function(){return document.body.classList.remove('popup__body_hidden'),document.body.style.paddingRight='',this},html:function(f,g){return this.tags.popup__close.style.display=this.defaults.closeShow?'':'none',this.setBodyStyle(),this.defaults.coordElement&&this.coordSet(),this.tags.popup__change.innerHTML=f,g&&g.call(this.tags.popup,this.defaults,this.eventsTrigger),this.defaults.closeButtons&&this.addCloseButtons(),this},append:function(f,g){return this.tags.popup__close.style.display=this.defaults.closeShow?'':'none',this.setBodyStyle(),this.defaults.coordElement&&this.coordSet(),this.tags.popup__change.innerHTML+=f,g&&g.call(this.tags.popup,this.defaults,this.eventsTrigger),this.defaults.closeButtons&&this.addCloseButtons(),this},clear:function(){return this.tags.popup__change.innerHTML='',this},show:function(f){return this.defaults.addClassNamePopup&&this.tags.popup.classList.add(this.defaults.addClassNamePopup),this.tags.popup.classList.add('popup_active'),f&&f.call(this.tags.popup,this.defaults,this.eventsTrigger),this},close:function(f){var g=this;return setTimeout(function(){g.tags.popup.classList.remove('popup_active'),g.defaults.addClassNamePopup&&g.tags.popup.classList.remove(g.defaults.addClassNamePopup),g.clear(),g.coordReset(),f&&f.call(g.tags.popup,g.defaults,g.eventsTrigger),g.clearBodyStyle()},50),this},events:function(){var f=this;this.tags.popup__close.addEventListener(this.eventsTrigger,function(g){return g.stopPropagation(),f.close(),!1},!1),this.tags.popup__overlay.addEventListener(this.eventsTrigger,function(g){return g.stopPropagation(),f.defaults.closeOverlay&&f.close(),!1},!1),document.addEventListener('keydown',function(g){27==g.which&&f.close()},!1)},scrollWidthElement:function(){var f=document.createElement('div');f.style.overflowY='scroll',f.style.width='50px',f.style.height='50px',f.style.visibility='hidden',document.body.appendChild(f);var g=f.offsetWidth-f.clientWidth;return document.body.removeChild(f),g}},window.Popup=b})(window);

(function(){function b(f){return(this.tags={},this.values={},this.eventsTrigger=c?'touchend':'mouseup',this.defaults=this.extend({element:'',mainClass:'slider',min:0,max:1e3,value:0,range:!1,step:1,point:null,division:null,beforeDivisionStep:1,afterDivisionStep:1,handleMinus:null,handlePlus:null,beforeOutSideClickStep:1,afterOutSideClickStep:1,create:function(){},slide:function(){}},f),!!this.defaults.element)&&(this.init(),this)}var c=/Android|iPhone|iPad|iPod|BlackBerry|WPDesktop|IEMobile|Opera Mini/i.test(navigator.userAgent),d=function(f,g){var h=document.createElement('div');return h.className=f,g&&g.appendChild(h),h};b.prototype={init:function(){return this.createDOM(),this.defaults.create.call(this,this.tags.slider,this.defaults,this.tags.handleLeft,c),this.reinit(),this.events(this.tags.handleLeft,'triggerLeft'),this},createDOM:function(){return this.tags={},this.tags.slider=this.defaults.element,this.tags.handleLeft=d(this.defaults.mainClass+'__handle '+this.defaults.mainClass+'__handle_left',this.tags.slider),this.tags.handleRange=d(this.defaults.mainClass+'__range ',this.tags.slider),delete this.defaults.element,this},getValues:function(){return this.values.size=this.tags.slider.offsetWidth,this},setValuesOutSide:function(f){var g;return this.defaults.value=f,g=this.defaults.point&&this.defaults.division?this.defaults.value<=this.defaults.point?this.defaults.value/this.defaults.point*this.defaults.division:(this.defaults.value-this.defaults.point)/(this.defaults.max-this.defaults.point)*(100-this.defaults.division)+this.defaults.division:100*(this.defaults.value/this.defaults.max),this.defaults.value<=this.defaults.min?(g=0,this.defaults.value=this.defaults.min):this.defaults.value>=this.defaults.max&&(g=100,this.defaults.value=this.defaults.max),this.tags.handleLeft.style.left=g+'%',this.defaults.slide(this.defaults.value,this.defaults,this.tags.handleLeft),this},setValues:function(f){var g,h;this.defaults.min<this.defaults.max?this.defaults.division&&this.defaults.point&&this.defaults.point>this.defaults.min&&this.defaults.point<this.defaults.max?f<=this.defaults.division?(h=f/this.defaults.division,g=Math.round((this.defaults.min+Math.abs(-1*this.defaults.min+this.defaults.point)*h)/this.defaults.beforeDivisionStep)*this.defaults.beforeDivisionStep):(h=(f-this.defaults.division)/(100-this.defaults.division),g=Math.round((this.defaults.point+Math.abs(-1*this.defaults.point+this.defaults.max)*h)/this.defaults.beforeDivisionStep)*this.defaults.beforeDivisionStep):(h=f/100,g=Math.round((this.defaults.min+Math.abs(-1*this.defaults.min+this.defaults.max)*h)/this.defaults.step)*this.defaults.step):this.defaults.division&&this.defaults.point&&this.defaults.point>this.defaults.min&&this.defaults.point<this.defaults.max?f<=this.defaults.division?(h=f/this.defaults.division,g=Math.round((this.defaults.min-Math.abs(-1*this.defaults.min+this.defaults.point)*h)/this.defaults.beforeDivisionStep)*this.defaults.beforeDivisionStep):(h=(f-this.defaults.division)/(100-this.defaults.division),g=Math.round((this.defaults.point-Math.abs(-1*this.defaults.point+this.defaults.max)*h)/this.defaults.afterDivisionStep)*this.defaults.afterDivisionStep):(h=f/100,g=Math.round((this.defaults.min-Math.abs(-1*this.defaults.min+this.defaults.max)*h)/this.defaults.step)*this.defaults.step),0>=f?g=this.defaults.min:100<=f&&(g=this.defaults.max);var i=this.defaults.step.toString().split('.')[1];i&&(i=i.length);var j=function(k){return+k.toFixed(i?i:1)};return this.defaults.value=j(g),this.defaults.slide(j(g),this.defaults,this.tags.handleLeft),this},reinit:function(){return this.getValues(),this.setValuesOutSide(this.defaults.value),this},events:function(f,g){var h=this;this.values[g]=!1;var i,j,k=c?'touchstart':'mousedown',l=c?'touchmove':'mousemove',m=c?'touchend':'mouseup';if(this.defaults.handleMinus){var n=document.querySelector(this.defaults.handleMinus);n&&(n.addEventListener(k,function(p){p.stopPropagation(),p.preventDefault(),h.setValuesOutSide(h.defaults.value-(h.defaults.value<=h.defaults.point?h.defaults.beforeOutSideClickStep:h.defaults.afterOutSideClickStep))}),n.addEventListener(m,function(p){p.stopPropagation(),p.preventDefault(),h.values[g]=!1}))}if(this.defaults.handlePlus){var o=document.querySelector(this.defaults.handlePlus);o&&(o.addEventListener(k,function(p){p.stopPropagation(),p.preventDefault(),h.setValuesOutSide(h.defaults.value+(h.defaults.value<=h.defaults.point?h.defaults.beforeOutSideClickStep:h.defaults.afterOutSideClickStep))}),o.addEventListener(m,function(p){p.stopPropagation(),p.preventDefault(),h.values[g]=!1}))}return f.addEventListener('dragstart',function(){return!1}),f.addEventListener(k,function(p){p.stopPropagation(),h.values[g]=!0,j=(c?p.touches[0].pageX:p.pageX)-this.offsetLeft-this.offsetWidth/2},!1),document.addEventListener(l,function(p){return!!h.values[g]&&void(p.preventDefault(),p.stopPropagation(),i=100*(((c?p.touches[0].pageX:p.pageX)-j)/h.values.size),0>i?i=0:100<i&&(i=100),f.style.left=i+'%',h.setValues(i))},!1),document.addEventListener(m,function(p){p.stopPropagation(),h.values[g]=!1},!1),this.tags.handleRange.addEventListener(m,function(p){p.stopPropagation(),p.preventDefault(),h.values[g]=!1,i=100*(((c?p.touches[0].pageX:p.pageX)-h.tags.slider.getBoundingClientRect().left)/h.values.size),0>i?i=0:100<i&&(i=100),f.style.left=i+'%',h.setValues(i)},!1),this},extend:function(f,g){for(var h in g)g.hasOwnProperty(h)&&(f[h]=g[h]);return f}},window.Slider=b})(window);

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