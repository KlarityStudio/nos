window.Modernizr=function(e,t,n){function r(e){p.cssText=e}function o(e,t){return r(y.join(e+";")+(t||""))}function a(e,t){return typeof e===t}function i(e,t){return!!~(""+e).indexOf(t)}function c(e,t,r){for(var o in e){var i=t[e[o]];if(i!==n)return r===!1?e[o]:a(i,"function")?i.bind(r||t):i}return!1}var l="2.7.1",d={},u=!0,s=t.documentElement,f="modernizr",m=t.createElement(f),p=m.style,h,v={}.toString,y=" -webkit- -moz- -o- -ms- ".split(" "),g={},E={},b={},w=[],C=w.slice,T,F=function(e,n,r,o){var a,i,c,l,d=t.createElement("div"),u=t.body,m=u||t.createElement("body");if(parseInt(r,10))for(;r--;)c=t.createElement("div"),c.id=o?o[r]:f+(r+1),d.appendChild(c);return a=["&#173;",'<style id="s',f,'">',e,"</style>"].join(""),d.id=f,(u?d:m).innerHTML+=a,m.appendChild(d),u||(m.style.background="",m.style.overflow="hidden",l=s.style.overflow,s.style.overflow="hidden",s.appendChild(m)),i=n(d,e),u?d.parentNode.removeChild(d):(m.parentNode.removeChild(m),s.style.overflow=l),!!i},N={}.hasOwnProperty,S;S=a(N,"undefined")||a(N.call,"undefined")?function(e,t){return t in e&&a(e.constructor.prototype[t],"undefined")}:function(e,t){return N.call(e,t)},Function.prototype.bind||(Function.prototype.bind=function(e){var t=this;if("function"!=typeof t)throw new TypeError;var n=C.call(arguments,1),r=function(){if(this instanceof r){var o=function(){};o.prototype=t.prototype;var a=new o,i=t.apply(a,n.concat(C.call(arguments)));return Object(i)===i?i:a}return t.apply(e,n.concat(C.call(arguments)))};return r}),g.touch=function(){var n;return"ontouchstart"in e||e.DocumentTouch&&t instanceof DocumentTouch?n=!0:F(["@media (",y.join("touch-enabled),("),f,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(e){n=9===e.offsetTop}),n},g.video=function(){var e=t.createElement("video"),n=!1;try{(n=!!e.canPlayType)&&(n=new Boolean(n),n.ogg=e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),n.h264=e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),n.webm=e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""))}catch(e){}return n};for(var j in g)S(g,j)&&(T=j.toLowerCase(),d[T]=g[j](),w.push((d[T]?"":"no-")+T));return d.addTest=function(e,t){if("object"==typeof e)for(var r in e)S(e,r)&&d.addTest(r,e[r]);else{if(e=e.toLowerCase(),d[e]!==n)return d;t="function"==typeof t?t():t,"undefined"!=typeof u&&u&&(s.className+=" w-mod-"+(t?"":"no-")+e),d[e]=t}return d},r(""),m=h=null,function(e,t){function n(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function r(){var e=g.elements;return"string"==typeof e?e.split(" "):e}function o(e){var t=v[e[p]];return t||(t={},h++,e[p]=h,v[h]=t),t}function a(e,n,r){if(n||(n=t),y)return n.createElement(e);r||(r=o(n));var a;return a=r.cache[e]?r.cache[e].cloneNode():f.test(e)?(r.cache[e]=r.createElem(e)).cloneNode():r.createElem(e),!a.canHaveChildren||s.test(e)||a.tagUrn?a:r.frag.appendChild(a)}function i(e,n){if(e||(e=t),y)return e.createDocumentFragment();n=n||o(e);for(var a=n.frag.cloneNode(),i=0,c=r(),l=c.length;i<l;i++)a.createElement(c[i]);return a}function c(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return g.shivMethods?a(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+r().join().replace(/[\w\-]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(g,t.frag)}function l(e){e||(e=t);var r=o(e);return g.shivCSS&&!m&&!r.hasCSS&&(r.hasCSS=!!n(e,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),y||c(e,r),e}var d="3.7.0",u=e.html5||{},s=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,f=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,m,p="_html5shiv",h=0,v={},y;!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",m="hidden"in e,y=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return"undefined"==typeof e.cloneNode||"undefined"==typeof e.createDocumentFragment||"undefined"==typeof e.createElement}()}catch(e){m=!0,y=!0}}();var g={elements:u.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:d,shivCSS:u.shivCSS!==!1,supportsUnknownElements:y,shivMethods:u.shivMethods!==!1,type:"default",shivDocument:l,createElement:a,createDocumentFragment:i};e.html5=g,l(t)}(this,t),d._version=l,d._prefixes=y,d.testStyles=F,s.className=s.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(u?" w-mod-js w-mod-"+w.join(" w-mod-"):""),d}(this,this.document),Modernizr.addTest("ios",/(ipod|iphone|ipad)/i.test(navigator.userAgent));