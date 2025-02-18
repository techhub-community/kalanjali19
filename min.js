! function(e) {
  "use strict";
  var t = e,
    i = t.document,
    o = "cbinstance";
  var n = {
      get: function(e) {
        return decodeURIComponent(i.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(e).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null
      },
      set: function(e, t, o, n, s, r) {
        if (!e || /^(?:expires|max\-age|path|domain|secure)$/i.test(e)) return !1;
        var a = "";
        if (o) switch (o.constructor) {
          case Number:
            a = o === 1 / 0 ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + o;
            break;
          case String:
            a = "; expires=" + o;
            break;
          case Date:
            a = "; expires=" + o.toUTCString()
        }
        return i.cookie = encodeURIComponent(e) + "=" + encodeURIComponent(t) + a + (s ? "; domain=" + s : "") + (n ? "; path=" + n : "") + (r ? "; secure" : ""), !0
      },
      has: function(e) {
        return new RegExp("(?:^|;\\s*)" + encodeURIComponent(e).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=").test(i.cookie)
      },
      remove: function(e, t, o) {
        return !(!e || !this.has(e)) && (i.cookie = encodeURIComponent(e) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (o ? "; domain=" + o : "") + (t ? "; path=" + t : ""), !0)
      }
    },
    s = {
      merge: function() {
        var e, t = {},
          i = 0,
          o = arguments.length;
        if (0 === o) return t;
        for (; i < o; i++)
          for (e in arguments[i]) Object.prototype.hasOwnProperty.call(arguments[i], e) && (t[e] = arguments[i][e]);
        return t
      },
      str2bool: function(e) {
        switch ((e = "" + e).toLowerCase()) {
          case "false":
          case "no":
          case "0":
          case "":
            return !1;
          default:
            return !0
        }
      },
      fade_in: function(e) {
        e.style.opacity < 1 && (e.style.opacity = (parseFloat(e.style.opacity) + .05).toFixed(2), t.setTimeout(function() {
          s.fade_in(e)
        }, 50))
      },
      get_data_attribs: function(e) {
        var t = {};
        if (Object.prototype.hasOwnProperty.call(e, "dataset")) t = e.dataset;
        else {
          var i, o = e.attributes;
          for (i in o)
            if (Object.prototype.hasOwnProperty.call(o, i)) {
              var n = o[i];
              if (/^data-/.test(n.name)) t[s.camelize(n.name.substr(5))] = n.value
            }
        }
        return t
      },
      normalize_keys: function(e) {
        var t = {};
        for (var i in e)
          if (Object.prototype.hasOwnProperty.call(e, i)) {
            var o = s.camelize(i);
            t[o] = e[o] ? e[o] : e[i]
          }
        return t
      },
      camelize: function(e) {
        for (var t = "-", i = e.indexOf(t); - 1 != i;) {
          var o = i === e.length - 1,
            n = o ? "" : e[i + 1],
            s = n.toUpperCase(),
            r = o ? t : t + n;
          i = (e = e.replace(r, s)).indexOf(t)
        }
        return e
      },
      find_script_by_id: function(e) {
        for (var t = i.getElementsByTagName("script"), o = 0, n = t.length; o < n; o++)
          if (e === t[o].id) return t[o];
        return null
      }
    },
    r = s.find_script_by_id("cookieinfo"),
    a = e.cookieinfo = function(e) {
      this.init(e)
    };
  a.prototype = {
    cookiejar: n,
    init: function(t) {
      this.inserted = !1, this.closed = !1, this.test_mode = !1;
      if (this.default_options = {
          cookie: "",
          closeText: "&#10006;",
          cookiePath: "/",
          debug: !1,
          expires: 1 / 0,
          zindex: 1e20,
          mask: !1,
          maskOpacity: .5,
          maskBackground: "#999",
          height: "auto",
          minHeight: "21px",
          bg: "#eee",
          fg: "#333",
          link: "#31A8F0",
          divlink: "#000",
          divlinkbg: "#F1D600",
          position: "bottom",
          message: "Kalanjali 2019 is over now. Want to contact developers mail us admin@techhub.pro",
          linkmsg: "",
          scriptmsg: "Cookie Info Script",
          moreinfo: "",
          //scriptinfo: "https://cookieinfoscript.com",
          //tracking: "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==",
          effect: null,
          fontSize: "20px",
          fontFamily: "verdana, arial, sans-serif",
          instance: o,
          textAlign: "center",
          acceptOnScroll: !1
        }, this.options = this.default_options, this.script_el = r, this.script_el) {
        var i = s.get_data_attribs(this.script_el);
        this.options = s.merge(this.options, i)
      }
      t && (t = s.normalize_keys(t), this.options = s.merge(this.options, t)), o = this.options.instance, this.options.zindex = parseInt(this.options.zindex, 10), this.options.mask = s.str2bool(this.options.mask), "string" == typeof this.options.expires && "function" == typeof e[this.options.expires] && (this.options.expires = e[this.options.expires]), "function" == typeof this.options.expires && (this.options.expires = this.options.expires()), this.script_el && this.run()
    },
    log: function() {
      "undefined" != typeof console && console.log.apply(console, arguments)
    },
    run: function() {
      if (!this.agreed()) {
        var e = this;
        ! function(e, t) {
          var i = !1,
            o = !0,
            n = e.document,
            s = n.documentElement,
            r = n.addEventListener ? "addEventListener" : "attachEvent",
            a = n.addEventListener ? "removeEventListener" : "detachEvent",
            c = n.addEventListener ? "" : "on",
            l = function(o) {
              "readystatechange" == o.type && "complete" != n.readyState || (("load" == o.type ? e : n)[a](c + o.type, l, !1), !i && (i = !0) && t.call(e, o.type || o))
            },
            p = function() {
              try {
                s.doScroll("left")
              } catch (e) {
                return void setTimeout(p, 50)
              }
              l("poll")
            };
          if ("complete" == n.readyState) t.call(e, "lazy");
          else {
            if (n.createEventObject && s.doScroll) {
              try {
                o = !e.frameElement
              } catch (e) {}
              o && p()
            }
            n[r](c + "DOMContentLoaded", l, !1), n[r](c + "readystatechange", l, !1), e[r](c + "load", l, !1)
          }
        }(t, function() {
          e.insert()
        })
      }
    },
    build_viewport_mask: function() {
      var e = null;
      if (!0 === this.options.mask) {
        var t = this.options.maskOpacity,
          o = '<div id="cookieinfo-mask" style="position:fixed;top:0;left:0;width:100%;height:100%;background:' + this.options.maskBackground + ";zoom:1;filter:alpha(opacity=" + 100 * t + ");opacity:" + t + ";z-index:" + this.options.zindex + ';"></div>',
          n = i.createElement("div");
        n.innerHTML = o, e = n.firstChild
      }
      return e
    },
    agree: function() {
      return this.cookiejar.set(this.options.cookie, 1, this.options.expires, this.options.cookiePath), !0
    },
    agreed: function() {
      return this.cookiejar.has(this.options.cookie)
    },
    close: function() {
      return this.inserted && (this.closed || (this.element && this.element.parentNode.removeChild(this.element), this.element_mask && this.element_mask.parentNode.removeChild(this.element_mask), this.closed = !0)), this.closed
    },
    agree_and_close: function() {
      return this.agree(), this.close()
    },
    cleanup: function() {
      return this.close(), this.unload()
    },
    unload: function() {
      return this.script_el && this.script_el.parentNode.removeChild(this.script_el), e[o] = void 0, !0
    },
    insert: function() {
      this.element_mask = this.build_viewport_mask();
      var e = this.options.zindex;
      this.element_mask && (e += 1);
      var t = i.createElement("div");
      t.className = "cookieinfo", t.style.position = "fixed", t.style.left = 0, t.style.right = 0, t.style.height = this.options.height, t.style.minHeight = this.options.minHeight, t.style.zIndex = e, t.style.background = this.options.bg, t.style.color = this.options.fg, t.style.lineHeight = t.style.minHeight, t.style.padding = "8px 18px", t.style.fontFamily = this.options.fontFamily, t.style.fontSize = this.options.fontSize, t.style.textAlign = this.options.textAlign, "top" === this.options.position ? t.style.top = 0 : t.style.bottom = 0, t.innerHTML = '<div class="cookieinfo-close" style="float:right;display:block;padding:5px 8px 5px 8px;min-width:100px;margin-left:5px;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;">' + this.options.closeText + '</div><span style="display:block;padding:5px 0 5px 0;">' + this.options.message + " <a>" + this.options.linkmsg + "</a><img> <a>" + this.options.scriptmsg + "</a></span>", this.element = t;
      var o = t.getElementsByTagName("a")[0];
      o.href = this.options.moreinfo, o.style.textDecoration = "none", o.style.color = this.options.link;
      var n = t.getElementsByTagName("a")[1];
      n.href = this.options.scriptinfo, n.style.textDecoration = "none", n.style.display = "none", n.style.color = this.options.link;
      var r = t.getElementsByTagName("div")[0];
      r.style.cursor = "pointer", r.style.color = this.options.divlink, r.style.background = this.options.divlinkbg, r.style.textAlign = "center";
      var a = t.getElementsByTagName("img")[0];

      function c(e, t, i) {
        var o = e.addEventListener ? "addEventListener" : "attachEvent",
          n = e.addEventListener ? "" : "on";
        e[o](n + t, i, !1)
      }
      a.src = this.options.tracking, a.style.display = "none";
      var l = this;
      c(r, "click", function() {
        l.agree_and_close()
      }), this.element_mask && (c(this.element_mask, "click", function() {
        l.agree_and_close()
      }), i.body.appendChild(this.element_mask)), this.options.acceptOnScroll && c(window, "scroll", function() {
        l.agree_and_close()
      }), i.body.appendChild(this.element), this.inserted = !0, "fade" === this.options.effect ? (this.element.style.opacity = 0, s.fade_in(this.element)) : this.element.style.opacity = 1
    }
  }, r && (e[o] || (e[o] = new a))
}(window);
