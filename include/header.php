<div class="py-1" style=" box-shadow:0px 1px 1px 2px;background-color:#d76a18;">
  <div class="container-fluid">
    <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
      <div class="col-lg-12 d-block">
        <div class="row d-flex">
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
            <span class="text">+91 9490809393</span>
          </div>
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
            <span class="text">slcinternationaltrade@gmail.com</span>
          </div>
          <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
            <span class="text"><a id="google_translate_element"></a> </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="color:#d76a18;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span>Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">

      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>

        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>

        <li class="nav-item"><a href="contact.php" class="nav-link"> Contact </a></li>
        <li class="nav-item">
          <a class="nav-link" id="google_translate_element"></a>
        </li>
        <li class="nav-item"><a type="btn" class="btn  pursebg know-about btn-md " data-toggle="modal" data-target="#exampleModal1" style="background-color:#d76a18;color:#fff;">Know About Us</a></li>


      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->
<!--whats app icon -->
<div id="mybutton">
  <a href="https://api.whatsapp.com/send?phone=919490809393  " class="whatsapp" target="_blank"><img class="feedback" src="images/product/whatsapp.png" width="60px" height="60px"></a>
</div>
<!--whats app chat icon end -->

<!-- Back to top button -->
<a id="button"></a>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Enquiry With Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="send.php" method="post">
          <label>Name</label>
          <input type="text" name="name" class="form-control">
          <label>Email</label>
          <input type="email" name="email" class="form-control">
          <label>Mobile No.</label>
          <input type="number" name="number" class="form-control">
          <label>Your Message</label>
          <textarea id="w3review" name="message" rows="3" cols="60">

            </textarea>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Send</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- End Model -->

<!-- Language Converter -->
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en'
    }, 'google_translate_element');
  }
</script>


<script type="text/javascript">
  (function() {
    var gtConstEvalStartTime = new Date();
    /*

     Copyright The Closure Library Authors.
     SPDX-License-Identifier: Apache-2.0
    */
    var h = this || self,
      l = /^[\w+/_-]+[=]{0,2}$/,
      m = null;

    function n(a) {
      return (a = a.querySelector && a.querySelector("script[nonce]")) && (a = a.nonce || a.getAttribute("nonce")) && l.test(a) ? a : ""
    }

    function p(a, b) {
      function c() {}
      c.prototype = b.prototype;
      a.i = b.prototype;
      a.prototype = new c;
      a.prototype.constructor = a;
      a.h = function(g, f, k) {
        for (var e = Array(arguments.length - 2), d = 2; d < arguments.length; d++) e[d - 2] = arguments[d];
        return b.prototype[f].apply(g, e)
      }
    }

    function q(a) {
      return a
    };

    function r(a) {
      if (Error.captureStackTrace) Error.captureStackTrace(this, r);
      else {
        var b = Error().stack;
        b && (this.stack = b)
      }
      a && (this.message = String(a))
    }
    p(r, Error);
    r.prototype.name = "CustomError";

    function u(a, b) {
      a = a.split("%s");
      for (var c = "", g = a.length - 1, f = 0; f < g; f++) c += a[f] + (f < b.length ? b[f] : "%s");
      r.call(this, c + a[g])
    }
    p(u, r);
    u.prototype.name = "AssertionError";

    function v(a, b) {
      throw new u("Failure" + (a ? ": " + a : ""), Array.prototype.slice.call(arguments, 1));
    };
    var w;

    function x(a, b) {
      this.g = b === y ? a : ""
    }
    x.prototype.toString = function() {
      return this.g + ""
    };
    var y = {};

    function z(a) {
      var b = document.getElementsByTagName("head")[0];
      b || (b = document.body.parentNode.appendChild(document.createElement("head")));
      b.appendChild(a)
    }

    function _loadJs(a) {
      var b = document;
      var c = "SCRIPT";
      "application/xhtml+xml" === b.contentType && (c = c.toLowerCase());
      c = b.createElement(c);
      c.type = "text/javascript";
      c.charset = "UTF-8";
      if (void 0 === w) {
        b = null;
        var g = h.trustedTypes;
        if (g && g.createPolicy) {
          try {
            b = g.createPolicy("goog#html", {
              createHTML: q,
              createScript: q,
              createScriptURL: q
            })
          } catch (t) {
            h.console && h.console.error(t.message)
          }
          w = b
        } else w = b
      }
      a = (b = w) ? b.createScriptURL(a) : a;
      a = new x(a, y);
      a: {
        try {
          var f = c && c.ownerDocument,
            k = f && (f.defaultView || f.parentWindow);
          k = k || h;
          if (k.Element && k.Location) {
            var e = k;
            break a
          }
        } catch (t) {}
        e = null
      }
      if (e && "undefined" != typeof e.HTMLScriptElement && (!c || !(c instanceof e.HTMLScriptElement) && (c instanceof e.Location || c instanceof e.Element))) {
        e = typeof c;
        if ("object" == e && null != c || "function" == e) try {
          var d = c.constructor.displayName || c.constructor.name || Object.prototype.toString.call(c)
        } catch (t) {
          d = "<object could not be stringified>"
        } else d = void 0 === c ? "undefined" : null === c ? "null" : typeof c;
        v("Argument is not a %s (or a non-Element, non-Location mock); got: %s",
          "HTMLScriptElement", d)
      }
      a instanceof x && a.constructor === x ? d = a.g : (d = typeof a, v("expected object of type TrustedResourceUrl, got '" + a + "' of type " + ("object" != d ? d : a ? Array.isArray(a) ? "array" : d : "null")), d = "type_error:TrustedResourceUrl");
      c.src = d;
      (d = c.ownerDocument && c.ownerDocument.defaultView) && d != h ? d = n(d.document) : (null === m && (m = n(h.document)), d = m);
      d && c.setAttribute("nonce", d);
      z(c)
    }

    function _loadCss(a) {
      var b = document.createElement("link");
      b.type = "text/css";
      b.rel = "stylesheet";
      b.charset = "UTF-8";
      b.href = a;
      z(b)
    }

    function _isNS(a) {
      a = a.split(".");
      for (var b = window, c = 0; c < a.length; ++c)
        if (!(b = b[a[c]])) return !1;
      return !0
    }

    function _setupNS(a) {
      a = a.split(".");
      for (var b = window, c = 0; c < a.length; ++c) b.hasOwnProperty ? b.hasOwnProperty(a[c]) ? b = b[a[c]] : b = b[a[c]] = {} : b = b[a[c]] || (b[a[c]] = {});
      return b
    }
    window.addEventListener && "undefined" == typeof document.readyState && window.addEventListener("DOMContentLoaded", function() {
      document.readyState = "complete"
    }, !1);
    if (_isNS('google.translate.Element')) {
      return
    }(function() {
      var c = _setupNS('google.translate._const');
      c._cest = gtConstEvalStartTime;
      gtConstEvalStartTime = undefined;
      c._cl = 'en';
      c._cuc = 'googleTranslateElementInit';
      c._cac = '';
      c._cam = '';
      c._ctkk = '449532.3786053938';
      var h = 'translate.googleapis.com';
      var s = (true ? 'https' : window.location.protocol == 'https:' ? 'https' : 'http') + '://';
      var b = s + h;
      c._pah = h;
      c._pas = s;
      c._pbi = b + '/translate_static/img/te_bk.gif';
      c._pci = b + '/translate_static/img/te_ctrl3.gif';
      c._pli = b + '/translate_static/img/loading.gif';
      c._plla = h + '/translate_a/l';
      c._pmi = b + '/translate_static/img/mini_google.png';
      c._ps = b + '/translate_static/css/translateelement.css';
      c._puh = 'translate.google.com';
      _loadCss(c._ps);
      _loadJs(b + '/translate_static/js/element/main.js');
    })();
  })();
</script>
<!-- End Language Converter -->