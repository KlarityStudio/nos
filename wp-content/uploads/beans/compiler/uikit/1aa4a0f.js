/*! UIkit 2.24.3 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */
!function(t){if("function"==typeof define&&define.amd&&define("uikit",function(){var n=window.UIkit||t(window,window.jQuery,window.document);return n.load=function(t,e,o,i){var r,a=t.split(","),s=[],u=(i.config&&i.config.uikit&&i.config.uikit.base?i.config.uikit.base:"").replace(/\/+$/g,"");if(!u)throw new Error("Please define base path to UIkit in the requirejs config.");for(r=0;r<a.length;r+=1){var c=a[r].replace(/\./g,"/");s.push(u+"/components/"+c)}e(s,function(){o(n)})},n}),!window.jQuery)throw new Error("UIkit requires jQuery");window&&window.jQuery&&t(window,window.jQuery,window.document)}(function(t,n,e){"use strict";var o={},i=t.UIkit?Object.create(t.UIkit):void 0;if(o.version="2.24.3",o.noConflict=function(){return i&&(t.UIkit=i,n.UIkit=i,n.fn.uk=i.fn),o},o.prefix=function(t){return t},o.$=n,o.$doc=o.$(document),o.$win=o.$(window),o.$html=o.$("html"),o.support={},o.support.transition=function(){var t=function(){var t,n=e.body||e.documentElement,o={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(t in o)if(void 0!==n.style[t])return o[t]}();return t&&{end:t}}(),o.support.animation=function(){var t=function(){var t,n=e.body||e.documentElement,o={WebkitAnimation:"webkitAnimationEnd",MozAnimation:"animationend",OAnimation:"oAnimationEnd oanimationend",animation:"animationend"};for(t in o)if(void 0!==n.style[t])return o[t]}();return t&&{end:t}}(),function(){Date.now=Date.now||function(){return(new Date).getTime()};for(var t=["webkit","moz"],n=0;n<t.length&&!window.requestAnimationFrame;++n){var e=t[n];window.requestAnimationFrame=window[e+"RequestAnimationFrame"],window.cancelAnimationFrame=window[e+"CancelAnimationFrame"]||window[e+"CancelRequestAnimationFrame"]}if(/iP(ad|hone|od).*OS 6/.test(window.navigator.userAgent)||!window.requestAnimationFrame||!window.cancelAnimationFrame){var o=0;window.requestAnimationFrame=function(t){var n=Date.now(),e=Math.max(o+16,n);return setTimeout(function(){t(o=e)},e-n)},window.cancelAnimationFrame=clearTimeout}}(),o.support.touch="ontouchstart"in document||t.DocumentTouch&&document instanceof t.DocumentTouch||t.navigator.msPointerEnabled&&t.navigator.msMaxTouchPoints>0||t.navigator.pointerEnabled&&t.navigator.maxTouchPoints>0||!1,o.support.mutationobserver=t.MutationObserver||t.WebKitMutationObserver||null,o.Utils={},o.Utils.isFullscreen=function(){return document.webkitFullscreenElement||document.mozFullScreenElement||document.msFullscreenElement||document.fullscreenElement||!1},o.Utils.str2json=function(t,n){try{return n?JSON.parse(t.replace(/([\$\w]+)\s*:/g,function(t,n){return'"'+n+'":'}).replace(/'([^']+)'/g,function(t,n){return'"'+n+'"'})):new Function("","var json = "+t+"; return JSON.parse(JSON.stringify(json));")()}catch(e){return!1}},o.Utils.debounce=function(t,n,e){var o;return function(){var i=this,r=arguments,a=function(){o=null,e||t.apply(i,r)},s=e&&!o;clearTimeout(o),o=setTimeout(a,n),s&&t.apply(i,r)}},o.Utils.removeCssRules=function(t){var n,e,o,i,r,a,s,u,c,d;t&&setTimeout(function(){try{for(d=document.styleSheets,i=0,s=d.length;s>i;i++){for(o=d[i],e=[],o.cssRules=o.cssRules,n=r=0,u=o.cssRules.length;u>r;n=++r)o.cssRules[n].type===CSSRule.STYLE_RULE&&t.test(o.cssRules[n].selectorText)&&e.unshift(n);for(a=0,c=e.length;c>a;a++)o.deleteRule(e[a])}}catch(m){}},0)},o.Utils.isInView=function(t,e){var i=n(t);if(!i.is(":visible"))return!1;var r=o.$win.scrollLeft(),a=o.$win.scrollTop(),s=i.offset(),u=s.left,c=s.top;return e=n.extend({topoffset:0,leftoffset:0},e),c+i.height()>=a&&c-e.topoffset<=a+o.$win.height()&&u+i.width()>=r&&u-e.leftoffset<=r+o.$win.width()?!0:!1},o.Utils.checkDisplay=function(t,e){var i=o.$("[data-uk-margin], [data-uk-grid-match], [data-uk-grid-margin], [data-uk-check-display]",t||document);return t&&!i.length&&(i=n(t)),i.trigger("display.uk.check"),e&&("string"!=typeof e&&(e='[class*="uk-animation-"]'),i.find(e).each(function(){var t=o.$(this),n=t.attr("class"),e=n.match(/uk\-animation\-(.+)/);t.removeClass(e[0]).width(),t.addClass(e[0])})),i},o.Utils.options=function(t){if("string"!=n.type(t))return t;-1!=t.indexOf(":")&&"}"!=t.trim().substr(-1)&&(t="{"+t+"}");var e=t?t.indexOf("{"):-1,i={};if(-1!=e)try{i=o.Utils.str2json(t.substr(e))}catch(r){}return i},o.Utils.animate=function(t,e){var i=n.Deferred();return t=o.$(t),e=e,t.css("display","none").addClass(e).one(o.support.animation.end,function(){t.removeClass(e),i.resolve()}).width(),t.css("display",""),i.promise()},o.Utils.uid=function(t){return(t||"id")+(new Date).getTime()+"RAND"+Math.ceil(1e5*Math.random())},o.Utils.template=function(t,n){for(var e,o,i,r,a=t.replace(/\n/g,"\\n").replace(/\{\{\{\s*(.+?)\s*\}\}\}/g,"{{!$1}}").split(/(\{\{\s*(.+?)\s*\}\})/g),s=0,u=[],c=0;s<a.length;){if(e=a[s],e.match(/\{\{\s*(.+?)\s*\}\}/))switch(s+=1,e=a[s],o=e[0],i=e.substring(e.match(/^(\^|\#|\!|\~|\:)/)?1:0),o){case"~":u.push("for(var $i=0;$i<"+i+".length;$i++) { var $item = "+i+"[$i];"),c++;break;case":":u.push("for(var $key in "+i+") { var $val = "+i+"[$key];"),c++;break;case"#":u.push("if("+i+") {"),c++;break;case"^":u.push("if(!"+i+") {"),c++;break;case"/":u.push("}"),c--;break;case"!":u.push("__ret.push("+i+");");break;default:u.push("__ret.push(escape("+i+"));")}else u.push("__ret.push('"+e.replace(/\'/g,"\\'")+"');");s+=1}return r=new Function("$data",["var __ret = [];","try {","with($data){",c?'__ret = ["Not all blocks are closed correctly."]':u.join(""),"};","}catch(e){__ret = [e.message];}",'return __ret.join("").replace(/\\n\\n/g, "\\n");',"function escape(html) { return String(html).replace(/&/g, '&amp;').replace(/\"/g, '&quot;').replace(/</g, '&lt;').replace(/>/g, '&gt;');}"].join("\n")),n?r(n):r},o.Utils.events={},o.Utils.events.click=o.support.touch?"tap":"click",t.UIkit=o,o.fn=function(t,e){var i=arguments,r=t.match(/^([a-z\-]+)(?:\.([a-z]+))?/i),a=r[1],s=r[2];return o[a]?this.each(function(){var t=n(this),r=t.data(a);r||t.data(a,r=o[a](this,s?void 0:e)),s&&r[s].apply(r,Array.prototype.slice.call(i,1))}):(n.error("UIkit component ["+a+"] does not exist."),this)},n.UIkit=o,n.fn.uk=o.fn,o.langdirection="rtl"==o.$html.attr("dir")?"right":"left",o.components={},o.component=function(t,e){var i=function(e,r){var a=this;return this.UIkit=o,this.element=e?o.$(e):null,this.options=n.extend(!0,{},this.defaults,r),this.plugins={},this.element&&this.element.data(t,this),this.init(),(this.options.plugins.length?this.options.plugins:Object.keys(i.plugins)).forEach(function(t){i.plugins[t].init&&(i.plugins[t].init(a),a.plugins[t]=!0)}),this.trigger("init.uk.component",[t,this]),this};return i.plugins={},n.extend(!0,i.prototype,{defaults:{plugins:[]},boot:function(){},init:function(){},on:function(t,n,e){return o.$(this.element||this).on(t,n,e)},one:function(t,n,e){return o.$(this.element||this).one(t,n,e)},off:function(t){return o.$(this.element||this).off(t)},trigger:function(t,n){return o.$(this.element||this).trigger(t,n)},find:function(t){return o.$(this.element?this.element:[]).find(t)},proxy:function(t,n){var e=this;n.split(" ").forEach(function(n){e[n]||(e[n]=function(){return t[n].apply(t,arguments)})})},mixin:function(t,n){var e=this;n.split(" ").forEach(function(n){e[n]||(e[n]=t[n].bind(e))})},option:function(){return 1==arguments.length?this.options[arguments[0]]||void 0:(2==arguments.length&&(this.options[arguments[0]]=arguments[1]),void 0)}},e),this.components[t]=i,this[t]=function(){var e,i;if(arguments.length)switch(arguments.length){case 1:"string"==typeof arguments[0]||arguments[0].nodeType||arguments[0]instanceof jQuery?e=n(arguments[0]):i=arguments[0];break;case 2:e=n(arguments[0]),i=arguments[1]}return e&&e.data(t)?e.data(t):new o.components[t](e,i)},o.domready&&o.component.boot(t),i},o.plugin=function(t,n,e){this.components[t].plugins[n]=e},o.component.boot=function(t){o.components[t].prototype&&o.components[t].prototype.boot&&!o.components[t].booted&&(o.components[t].prototype.boot.apply(o,[]),o.components[t].booted=!0)},o.component.bootComponents=function(){for(var t in o.components)o.component.boot(t)},o.domObservers=[],o.domready=!1,o.ready=function(t){o.domObservers.push(t),o.domready&&t(document)},o.on=function(t,n,e){return t&&t.indexOf("ready.uk.dom")>-1&&o.domready&&n.apply(o.$doc),o.$doc.on(t,n,e)},o.one=function(t,n,e){return t&&t.indexOf("ready.uk.dom")>-1&&o.domready?(n.apply(o.$doc),o.$doc):o.$doc.one(t,n,e)},o.trigger=function(t,n){return o.$doc.trigger(t,n)},o.domObserve=function(t,n){o.support.mutationobserver&&(n=n||function(){},o.$(t).each(function(){var t=this,e=o.$(t);if(!e.data("observer"))try{var i=new o.support.mutationobserver(o.Utils.debounce(function(){n.apply(t,[]),e.trigger("changed.uk.dom")},50));i.observe(t,{childList:!0,subtree:!0}),e.data("observer",i)}catch(r){}}))},o.init=function(t){t=t||document,o.domObservers.forEach(function(n){n(t)})},o.on("domready.uk.dom",function(){o.init(),o.domready&&o.Utils.checkDisplay()}),document.addEventListener("DOMContentLoaded",function(){var t=function(){o.$body=o.$("body"),o.ready(function(){o.domObserve("[data-uk-observe]")}),o.on("changed.uk.dom",function(t){o.init(t.target),o.Utils.checkDisplay(t.target)}),o.trigger("beforeready.uk.dom"),o.component.bootComponents(),requestAnimationFrame(function(){var t,n={x:window.pageXOffset,y:window.pageYOffset},e=function(){(n.x!=window.pageXOffset||n.y!=window.pageYOffset)&&(t={x:0,y:0},window.pageXOffset!=n.x&&(t.x=window.pageXOffset>n.x?1:-1),window.pageYOffset!=n.y&&(t.y=window.pageYOffset>n.y?1:-1),n={dir:t,x:window.pageXOffset,y:window.pageYOffset},o.$doc.trigger("scrolling.uk.document",[n])),requestAnimationFrame(e)};return o.support.touch&&o.$html.on("touchmove touchend MSPointerMove MSPointerUp pointermove pointerup",e),(n.x||n.y)&&e(),e}()),o.trigger("domready.uk.dom"),o.support.touch&&navigator.userAgent.match(/(iPad|iPhone|iPod)/g)&&o.$win.on("load orientationchange resize",o.Utils.debounce(function(){var t=function(){return n(".uk-height-viewport").css("height",window.innerHeight),t};return t()}(),100)),o.trigger("afterready.uk.dom"),o.domready=!0};return("complete"==document.readyState||"interactive"==document.readyState)&&setTimeout(t),t}()),o.$html.addClass(o.support.touch?"uk-touch":"uk-notouch"),o.support.touch){var r,a=!1,s="uk-hover",u=".uk-overlay, .uk-overlay-hover, .uk-overlay-toggle, .uk-animation-hover, .uk-has-hover";o.$html.on("mouseenter touchstart MSPointerDown pointerdown",u,function(){a&&n("."+s).removeClass(s),a=n(this).addClass(s)}).on("mouseleave touchend MSPointerUp pointerup",function(t){r=n(t.target).parents(u),a&&a.not(r).removeClass(s)})}return o});

/*! UIkit 2.24.3 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */
!function(t){"use strict";var i=[];t.component("stackMargin",{defaults:{cls:"uk-margin-small-top",rowfirst:!1},boot:function(){t.ready(function(i){t.$("[data-uk-margin]",i).each(function(){var i,s=t.$(this);s.data("stackMargin")||(i=t.stackMargin(s,t.Utils.options(s.attr("data-uk-margin"))))})})},init:function(){var s=this;this.columns=[],t.$win.on("resize orientationchange",function(){var i=function(){s.process()};return t.$(function(){i(),t.$win.on("load",i)}),t.Utils.debounce(i,20)}()),t.$html.on("changed.uk.dom",function(){s.process()}),this.on("display.uk.check",function(){this.element.is(":visible")&&this.process()}.bind(this)),i.push(this)},process:function(){var i=this;if(this.columns=this.element.children(),t.Utils.stackMargin(this.columns,this.options),!this.options.rowfirst)return this;var s=this.columns.removeClass(this.options.rowfirst).filter(":visible").first().position();return s&&this.columns.each(function(){t.$(this)[t.$(this).position().left==s.left?"addClass":"removeClass"](i.options.rowfirst)}),this},revert:function(){return this.columns.removeClass(this.options.cls),this}}),function(){var i=[],s=function(t){if(t.is(":visible")){var i=t.parent().width(),s=t.data("width"),n=i/s,e=Math.floor(n*t.data("height"));t.css({height:s>i?e:t.data("height")})}};t.component("responsiveElement",{defaults:{},boot:function(){t.ready(function(i){t.$("iframe.uk-responsive-width, [data-uk-responsive]",i).each(function(){var i,s=t.$(this);s.data("responsiveIframe")||(i=t.responsiveElement(s,{}))})})},init:function(){var t=this.element;t.attr("width")&&t.attr("height")&&(t.data({width:t.attr("width"),height:t.attr("height")}).on("display.uk.check",function(){s(t)}),s(t),i.push(t))}}),t.$win.on("resize load",t.Utils.debounce(function(){i.forEach(function(t){s(t)})},15))}(),t.Utils.stackMargin=function(i,s){s=t.$.extend({cls:"uk-margin-small-top"},s),s.cls=s.cls,i=t.$(i).removeClass(s.cls);var n=!1,e=i.filter(":visible:first"),o=e.length?e.position().top+e.outerHeight()-1:!1;o!==!1&&1!=i.length&&i.each(function(){var i=t.$(this);i.is(":visible")&&(n?i.addClass(s.cls):i.position().top>=o&&(n=i.addClass(s.cls)))})},t.Utils.matchHeights=function(i,s){i=t.$(i).css("min-height",""),s=t.$.extend({row:!0},s);var n=function(i){if(!(i.length<2)){var s=0;i.each(function(){s=Math.max(s,t.$(this).outerHeight())}).each(function(){var i=t.$(this),n=s-("border-box"==i.css("box-sizing")?0:i.outerHeight()-i.height());i.css("min-height",n+"px")})}};s.row?(i.first().width(),setTimeout(function(){var s=!1,e=[];i.each(function(){var i=t.$(this),o=i.offset().top;o!=s&&e.length&&(n(t.$(e)),e=[],o=i.offset().top),e.push(i),s=o}),e.length&&n(t.$(e))},0)):n(i)},function(i){t.Utils.inlineSvg=function(s,n){t.$(s||'img[src$=".svg"]',n||document).each(function(){var s=t.$(this),n=s.attr("src");if(!i[n]){var e=t.$.Deferred();t.$.get(n,{nc:Math.random()},function(i){e.resolve(t.$(i).find("svg"))}),i[n]=e.promise()}i[n].then(function(i){var n=t.$(i).clone();s.attr("id")&&n.attr("id",s.attr("id")),s.attr("class")&&n.attr("class",s.attr("class")),s.attr("style")&&n.attr("style",s.attr("style")),s.attr("width")&&(n.attr("width",s.attr("width")),s.attr("height")||n.removeAttr("height")),s.attr("height")&&(n.attr("height",s.attr("height")),s.attr("width")||n.removeAttr("width")),s.replaceWith(n)})})},t.ready(function(i){t.Utils.inlineSvg("[data-uk-svg]",i)})}({})}(UIkit);

/*! UIkit 2.24.3 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */
!function(e){function t(e,t,n,o){return Math.abs(e-t)>=Math.abs(n-o)?e-t>0?"Left":"Right":n-o>0?"Up":"Down"}function n(){p=null,g.last&&(void 0!==g.el&&g.el.trigger("longTap"),g={})}function o(){p&&clearTimeout(p),p=null}function i(){a&&clearTimeout(a),l&&clearTimeout(l),u&&clearTimeout(u),p&&clearTimeout(p),a=l=u=p=null,g={}}function r(e){return e.pointerType==e.MSPOINTER_TYPE_TOUCH&&e.isPrimary}if(!e.fn.swipeLeft){var a,l,u,p,c,g={},s=750;e(function(){var v,y,w,f=0,d=0;"MSGesture"in window&&(c=new MSGesture,c.target=document.body),e(document).on("MSGestureEnd gestureend",function(e){var t=e.originalEvent.velocityX>1?"Right":e.originalEvent.velocityX<-1?"Left":e.originalEvent.velocityY>1?"Down":e.originalEvent.velocityY<-1?"Up":null;t&&void 0!==g.el&&(g.el.trigger("swipe"),g.el.trigger("swipe"+t))}).on("touchstart MSPointerDown pointerdown",function(t){("MSPointerDown"!=t.type||r(t.originalEvent))&&(w="MSPointerDown"==t.type||"pointerdown"==t.type?t:t.originalEvent.touches[0],v=Date.now(),y=v-(g.last||v),g.el=e("tagName"in w.target?w.target:w.target.parentNode),a&&clearTimeout(a),g.x1=w.pageX,g.y1=w.pageY,y>0&&250>=y&&(g.isDoubleTap=!0),g.last=v,p=setTimeout(n,s),!c||"MSPointerDown"!=t.type&&"pointerdown"!=t.type&&"touchstart"!=t.type||c.addPointer(t.originalEvent.pointerId))}).on("touchmove MSPointerMove pointermove",function(e){("MSPointerMove"!=e.type||r(e.originalEvent))&&(w="MSPointerMove"==e.type||"pointermove"==e.type?e:e.originalEvent.touches[0],o(),g.x2=w.pageX,g.y2=w.pageY,f+=Math.abs(g.x1-g.x2),d+=Math.abs(g.y1-g.y2))}).on("touchend MSPointerUp pointerup",function(n){("MSPointerUp"!=n.type||r(n.originalEvent))&&(o(),g.x2&&Math.abs(g.x1-g.x2)>30||g.y2&&Math.abs(g.y1-g.y2)>30?u=setTimeout(function(){void 0!==g.el&&(g.el.trigger("swipe"),g.el.trigger("swipe"+t(g.x1,g.x2,g.y1,g.y2))),g={}},0):"last"in g&&(isNaN(f)||30>f&&30>d?l=setTimeout(function(){var t=e.Event("tap");t.cancelTouch=i,void 0!==g.el&&g.el.trigger(t),g.isDoubleTap?(void 0!==g.el&&g.el.trigger("doubleTap"),g={}):a=setTimeout(function(){a=null,void 0!==g.el&&g.el.trigger("singleTap"),g={}},250)},0):g={},f=d=0))}).on("touchcancel MSPointerCancel",i),e(window).on("scroll",i)}),["swipe","swipeLeft","swipeRight","swipeUp","swipeDown","doubleTap","tap","singleTap","longTap"].forEach(function(t){e.fn[t]=function(n){return e(this).on(t,n)}})}}(jQuery);

/*! UIkit 2.24.3 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */
!function(t){"use strict";var i=[];t.component("gridMatchHeight",{defaults:{target:!1,row:!0,ignorestacked:!1},boot:function(){t.ready(function(i){t.$("[data-uk-grid-match]",i).each(function(){var i,n=t.$(this);n.data("gridMatchHeight")||(i=t.gridMatchHeight(n,t.Utils.options(n.attr("data-uk-grid-match"))))})})},init:function(){var n=this;this.columns=this.element.children(),this.elements=this.options.target?this.find(this.options.target):this.columns,this.columns.length&&(t.$win.on("load resize orientationchange",function(){var i=function(){n.match()};return t.$(function(){i()}),t.Utils.debounce(i,50)}()),t.$html.on("changed.uk.dom",function(){n.columns=n.element.children(),n.elements=n.options.target?n.find(n.options.target):n.columns,n.match()}),this.on("display.uk.check",function(){this.element.is(":visible")&&this.match()}.bind(this)),i.push(this))},match:function(){var i=this.columns.filter(":visible:first");if(i.length){var n=Math.ceil(100*parseFloat(i.css("width"))/parseFloat(i.parent().css("width")))>=100;return n&&!this.options.ignorestacked?this.revert():t.Utils.matchHeights(this.elements,this.options),this}},revert:function(){return this.elements.css("min-height",""),this}}),t.component("gridMargin",{defaults:{cls:"uk-grid-margin",rowfirst:"uk-row-first"},boot:function(){t.ready(function(i){t.$("[data-uk-grid-margin]",i).each(function(){var i,n=t.$(this);n.data("gridMargin")||(i=t.gridMargin(n,t.Utils.options(n.attr("data-uk-grid-margin"))))})})},init:function(){t.stackMargin(this.element,this.options)}})}(UIkit);

/*! UIkit 2.24.3 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */
!function(i){"use strict";function t(t){var s=i.$(t),a="auto";if(s.is(":visible"))a=s.outerHeight();else{var e={position:s.css("position"),visibility:s.css("visibility"),display:s.css("display")};a=s.css({position:"absolute",visibility:"hidden",display:"block"}).outerHeight(),s.css(e)}return a}i.component("nav",{defaults:{toggle:">li.uk-parent > a[href='#']",lists:">li.uk-parent > ul",multiple:!1},boot:function(){i.ready(function(t){i.$("[data-uk-nav]",t).each(function(){var t=i.$(this);if(!t.data("nav")){i.nav(t,i.Utils.options(t.attr("data-uk-nav")))}})})},init:function(){var t=this;this.on("click.uikit.nav",this.options.toggle,function(s){s.preventDefault();var a=i.$(this);t.open(a.parent()[0]==t.element[0]?a:a.parent("li"))}),this.find(this.options.lists).each(function(){var s=i.$(this),a=s.parent(),e=a.hasClass("uk-active");s.wrap('<div style="overflow:hidden;height:0;position:relative;"></div>'),a.data("list-container",s.parent()[e?"removeClass":"addClass"]("uk-hidden")),a.attr("aria-expanded",a.hasClass("uk-open")),e&&t.open(a,!0)})},open:function(s,a){var e=this,n=this.element,o=i.$(s),l=o.data("list-container");this.options.multiple||n.children(".uk-open").not(s).each(function(){var t=i.$(this);t.data("list-container")&&t.data("list-container").stop().animate({height:0},function(){i.$(this).parent().removeClass("uk-open").end().addClass("uk-hidden")})}),o.toggleClass("uk-open"),o.attr("aria-expanded",o.hasClass("uk-open")),l&&(o.hasClass("uk-open")&&l.removeClass("uk-hidden"),a?(l.stop().height(o.hasClass("uk-open")?"auto":0),o.hasClass("uk-open")||l.addClass("uk-hidden"),this.trigger("display.uk.check")):l.stop().animate({height:o.hasClass("uk-open")?t(l.find("ul:first")):0},function(){o.hasClass("uk-open")?l.css("height",""):l.addClass("uk-hidden"),e.trigger("display.uk.check")}))}})}(UIkit);

/*! UIkit 2.24.3 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */
!function(t){"use strict";t.component("buttonRadio",{defaults:{activeClass:"uk-active",target:".uk-button"},boot:function(){t.$html.on("click.buttonradio.uikit","[data-uk-button-radio]",function(i){var a=t.$(this);if(!a.data("buttonRadio")){var e=t.buttonRadio(a,t.Utils.options(a.attr("data-uk-button-radio"))),o=t.$(i.target);o.is(e.options.target)&&o.trigger("click")}})},init:function(){var i=this;this.find(i.options.target).attr("aria-checked","false").filter("."+i.options.activeClass).attr("aria-checked","true"),this.on("click",this.options.target,function(a){var e=t.$(this);e.is('a[href="#"]')&&a.preventDefault(),i.find(i.options.target).not(e).removeClass(i.options.activeClass).blur(),e.addClass(i.options.activeClass),i.find(i.options.target).not(e).attr("aria-checked","false"),e.attr("aria-checked","true"),i.trigger("change.uk.button",[e])})},getSelected:function(){return this.find("."+this.options.activeClass)}}),t.component("buttonCheckbox",{defaults:{activeClass:"uk-active",target:".uk-button"},boot:function(){t.$html.on("click.buttoncheckbox.uikit","[data-uk-button-checkbox]",function(i){var a=t.$(this);if(!a.data("buttonCheckbox")){var e=t.buttonCheckbox(a,t.Utils.options(a.attr("data-uk-button-checkbox"))),o=t.$(i.target);o.is(e.options.target)&&o.trigger("click")}})},init:function(){var i=this;this.find(i.options.target).attr("aria-checked","false").filter("."+i.options.activeClass).attr("aria-checked","true"),this.on("click",this.options.target,function(a){var e=t.$(this);e.is('a[href="#"]')&&a.preventDefault(),e.toggleClass(i.options.activeClass).blur(),e.attr("aria-checked",e.hasClass(i.options.activeClass)),i.trigger("change.uk.button",[e])})},getSelected:function(){return this.find("."+this.options.activeClass)}}),t.component("button",{defaults:{},boot:function(){t.$html.on("click.button.uikit","[data-uk-button]",function(){var i=t.$(this);if(!i.data("button")){{t.button(i,t.Utils.options(i.attr("data-uk-button")))}i.trigger("click")}})},init:function(){var t=this;this.element.attr("aria-pressed",this.element.hasClass("uk-active")),this.on("click",function(i){t.element.is('a[href="#"]')&&i.preventDefault(),t.toggle(),t.trigger("change.uk.button",[t.element.blur().hasClass("uk-active")])})},toggle:function(){this.element.toggleClass("uk-active"),this.element.attr("aria-pressed",this.element.hasClass("uk-active"))}})}(UIkit);

/*! UIkit 2.24.3 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */
!function(t){"use strict";t.component("alert",{defaults:{fade:!0,duration:200,trigger:".uk-alert-close"},boot:function(){t.$html.on("click.alert.uikit","[data-uk-alert]",function(i){var o=t.$(this);if(!o.data("alert")){var e=t.alert(o,t.Utils.options(o.attr("data-uk-alert")));t.$(i.target).is(e.options.trigger)&&(i.preventDefault(),e.close())}})},init:function(){var t=this;this.on("click",this.options.trigger,function(i){i.preventDefault(),t.close()})},close:function(){var t=this.trigger("close.uk.alert"),i=function(){this.trigger("closed.uk.alert").remove()}.bind(this);this.options.fade?t.css("overflow","hidden").css("max-height",t.height()).animate({height:0,opacity:0,"padding-top":0,"padding-bottom":0,"margin-top":0,"margin-bottom":0},this.options.duration,i):i()}})}(UIkit);

/*! UIkit 2.24.3 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */
!function(t){"use strict";function o(o,e,i,n){if(o=t.$(o),e=t.$(e),i=i||window.innerWidth,n=n||o.offset(),e.length){var r=e.outerWidth();if(o.css("min-width",r),"right"==t.langdirection){var s=i-(e.offset().left+r),d=i-(o.offset().left+o.outerWidth());o.css("margin-right",s-d)}else o.css("margin-left",e.offset().left-n.left)}}var e,i=!1,n={x:{"bottom-left":"bottom-right","bottom-right":"bottom-left","bottom-center":"bottom-right","top-left":"top-right","top-right":"top-left","top-center":"top-right","left-top":"right","left-bottom":"right-bottom","left-center":"right-center","right-top":"left","right-bottom":"left-bottom","right-center":"left-center"},y:{"bottom-left":"top-left","bottom-right":"top-right","bottom-center":"top-center","top-left":"bottom-left","top-right":"bottom-right","top-center":"bottom-center","left-top":"top-left","left-bottom":"left-bottom","left-center":"top-left","right-top":"top-left","right-bottom":"bottom-left","right-center":"top-left"},xy:{}};t.component("dropdown",{defaults:{mode:"hover",pos:"bottom-left",offset:0,remaintime:800,justify:!1,boundary:t.$win,delay:0,dropdownSelector:".uk-dropdown,.uk-dropdown-blank",hoverDelayIdle:250,preventflip:!1},remainIdle:!1,boot:function(){var o=t.support.touch?"click":"mouseenter";t.$html.on(o+".dropdown.uikit","[data-uk-dropdown]",function(e){var i=t.$(this);if(!i.data("dropdown")){var n=t.dropdown(i,t.Utils.options(i.attr("data-uk-dropdown")));("click"==o||"mouseenter"==o&&"hover"==n.options.mode)&&n.element.trigger(o),n.element.find(n.options.dropdownSelector).length&&e.preventDefault()}})},init:function(){var o=this;this.dropdown=this.find(this.options.dropdownSelector),this.offsetParent=this.dropdown.parents().filter(function(){return-1!==t.$.inArray(t.$(this).css("position"),["relative","fixed","absolute"])}).slice(0,1),this.centered=this.dropdown.hasClass("uk-dropdown-center"),this.justified=this.options.justify?t.$(this.options.justify):!1,this.boundary=t.$(this.options.boundary),this.boundary.length||(this.boundary=t.$win),this.dropdown.hasClass("uk-dropdown-up")&&(this.options.pos="top-left"),this.dropdown.hasClass("uk-dropdown-flip")&&(this.options.pos=this.options.pos.replace("left","right")),this.dropdown.hasClass("uk-dropdown-center")&&(this.options.pos=this.options.pos.replace(/(left|right)/,"center")),this.element.attr("aria-haspopup","true"),this.element.attr("aria-expanded",this.element.hasClass("uk-open")),"click"==this.options.mode||t.support.touch?this.on("click.uikit.dropdown",function(e){var i=t.$(e.target);i.parents(o.options.dropdownSelector).length||((i.is("a[href='#']")||i.parent().is("a[href='#']")||o.dropdown.length&&!o.dropdown.is(":visible"))&&e.preventDefault(),i.blur()),o.element.hasClass("uk-open")?(!o.dropdown.find(e.target).length||i.is(".uk-dropdown-close")||i.parents(".uk-dropdown-close").length)&&o.hide():o.show()}):this.on("mouseenter",function(){o.trigger("pointerenter.uk.dropdown",[o]),o.remainIdle&&clearTimeout(o.remainIdle),e&&clearTimeout(e),i&&i==o||(e=i&&i!=o?setTimeout(function(){e=setTimeout(o.show.bind(o),o.options.delay)},o.options.hoverDelayIdle):setTimeout(o.show.bind(o),o.options.delay))}).on("mouseleave",function(){e&&clearTimeout(e),o.remainIdle=setTimeout(function(){i&&i==o&&o.hide()},o.options.remaintime),o.trigger("pointerleave.uk.dropdown",[o])}).on("click",function(e){var n=t.$(e.target);return o.remainIdle&&clearTimeout(o.remainIdle),i&&i==o?((!o.dropdown.find(e.target).length||n.is(".uk-dropdown-close")||n.parents(".uk-dropdown-close").length)&&o.hide(),void 0):((n.is("a[href='#']")||n.parent().is("a[href='#']"))&&e.preventDefault(),o.show(),void 0)})},show:function(){t.$html.off("click.outer.dropdown"),i&&i!=this&&i.hide(!0),e&&clearTimeout(e),this.trigger("beforeshow.uk.dropdown",[this]),this.checkDimensions(),this.element.addClass("uk-open"),this.element.attr("aria-expanded","true"),this.trigger("show.uk.dropdown",[this]),t.Utils.checkDisplay(this.dropdown,!0),i=this,this.registerOuterClick()},hide:function(t){this.trigger("beforehide.uk.dropdown",[this,t]),this.element.removeClass("uk-open"),this.remainIdle&&clearTimeout(this.remainIdle),this.remainIdle=!1,this.element.attr("aria-expanded","false"),this.trigger("hide.uk.dropdown",[this,t]),i==this&&(i=!1)},registerOuterClick:function(){var o=this;t.$html.off("click.outer.dropdown"),setTimeout(function(){t.$html.on("click.outer.dropdown",function(n){e&&clearTimeout(e);t.$(n.target);i!=o||o.element.find(n.target).length||(o.hide(!0),t.$html.off("click.outer.dropdown"))})},10)},checkDimensions:function(){if(this.dropdown.length){this.dropdown.removeClass("uk-dropdown-top uk-dropdown-bottom uk-dropdown-left uk-dropdown-right uk-dropdown-stack").css({"top-left":"",left:"","margin-left":"","margin-right":""}),this.justified&&this.justified.length&&this.dropdown.css("min-width","");var e,i=t.$.extend({},this.offsetParent.offset(),{width:this.offsetParent[0].offsetWidth,height:this.offsetParent[0].offsetHeight}),r=this.options.offset,s=this.dropdown,d=(s.show().offset()||{left:0,top:0},s.outerWidth()),l=s.outerHeight(),h=this.boundary.width(),p=(this.boundary[0]!==window&&this.boundary.offset()?this.boundary.offset():{top:0,left:0},this.options.pos),a={"bottom-left":{top:0+i.height+r,left:0},"bottom-right":{top:0+i.height+r,left:0+i.width-d},"bottom-center":{top:0+i.height+r,left:0+i.width/2-d/2},"top-left":{top:0-l-r,left:0},"top-right":{top:0-l-r,left:0+i.width-d},"top-center":{top:0-l-r,left:0+i.width/2-d/2},"left-top":{top:0,left:0-d-r},"left-bottom":{top:0+i.height-l,left:0-d-r},"left-center":{top:0+i.height/2-l/2,left:0-d-r},"right-top":{top:0,left:0+i.width+r},"right-bottom":{top:0+i.height-l,left:0+i.width+r},"right-center":{top:0+i.height/2-l/2,left:0+i.width+r}},f={};if(e=p.split("-"),f=a[p]?a[p]:a["bottom-left"],this.justified&&this.justified.length)o(s.css({left:0}),this.justified,h);else if(this.options.preventflip!==!0){var u;switch(this.checkBoundary(i.left+f.left,i.top+f.top,d,l,h)){case"x":"x"!==this.options.preventflip&&(u=n.x[p]||"right-top");break;case"y":"y"!==this.options.preventflip&&(u=n.y[p]||"top-left");break;case"xy":this.options.preventflip||(u=n.xy[p]||"right-bottom")}u&&(e=u.split("-"),f=a[u]?a[u]:a["bottom-left"],this.checkBoundary(i.left+f.left,i.top+f.top,d,l,h)&&(e=p.split("-"),f=a[p]?a[p]:a["bottom-left"]))}d>h&&(s.addClass("uk-dropdown-stack"),this.trigger("stack.uk.dropdown",[this])),s.css(f).css("display","").addClass("uk-dropdown-"+e[0])}},checkBoundary:function(o,e,i,n,r){var s="";return(0>o||o-t.$win.scrollLeft()+i>r)&&(s+="x"),(e-t.$win.scrollTop()<0||e-t.$win.scrollTop()+n>window.innerHeight)&&(s+="y"),s}}),t.component("dropdownOverlay",{defaults:{justify:!1,cls:"",duration:200},boot:function(){t.ready(function(o){t.$("[data-uk-dropdown-overlay]",o).each(function(){var o=t.$(this);o.data("dropdownOverlay")||t.dropdownOverlay(o,t.Utils.options(o.attr("data-uk-dropdown-overlay")))})})},init:function(){var e=this;this.justified=this.options.justify?t.$(this.options.justify):!1,this.overlay=this.element.find("uk-dropdown-overlay"),this.overlay.length||(this.overlay=t.$('<div class="uk-dropdown-overlay"></div>').appendTo(this.element)),this.overlay.addClass(this.options.cls),this.on({"beforeshow.uk.dropdown":function(t,i){e.dropdown=i,e.justified&&e.justified.length&&o(e.overlay.css({display:"block","margin-left":"","margin-right":""}),e.justified,e.justified.outerWidth())},"show.uk.dropdown":function(){var o=e.dropdown.dropdown.outerHeight(!0);e.dropdown.element.removeClass("uk-open"),e.overlay.stop().css("display","block").animate({height:o},e.options.duration,function(){e.dropdown.dropdown.css("visibility",""),e.dropdown.element.addClass("uk-open"),t.Utils.checkDisplay(e.dropdown.dropdown,!0)}),e.pointerleave=!1},"hide.uk.dropdown":function(){e.overlay.stop().animate({height:0},e.options.duration)},"pointerenter.uk.dropdown":function(){clearTimeout(e.remainIdle)},"pointerleave.uk.dropdown":function(){e.pointerleave=!0}}),this.overlay.on({mouseenter:function(){e.remainIdle&&(clearTimeout(e.dropdown.remainIdle),clearTimeout(e.remainIdle))},mouseleave:function(){e.pointerleave&&i&&(e.remainIdle=setTimeout(function(){i&&i.hide()},i.options.remaintime))}})}})}(UIkit);

/*! UIkit 2.24.3 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */
!function(a){"use strict";var t={x:window.scrollX,y:window.scrollY},n=(a.$win,a.$doc,a.$html),i={show:function(i){if(i=a.$(i),i.length){var o=a.$("body"),s=i.find(".uk-offcanvas-bar:first"),e="right"==a.langdirection,f=s.hasClass("uk-offcanvas-bar-flip")?-1:1,r=f*(e?-1:1),c=window.innerWidth-o.width();t={x:window.pageXOffset,y:window.pageYOffset},i.addClass("uk-active"),o.css({width:window.innerWidth-c,height:window.innerHeight}).addClass("uk-offcanvas-page"),o.css(e?"margin-right":"margin-left",(e?-1:1)*s.outerWidth()*r).width(),n.css("margin-top",-1*t.y),s.addClass("uk-offcanvas-bar-show"),this._initElement(i),s.trigger("show.uk.offcanvas",[i,s]),i.attr("aria-hidden","false")}},hide:function(i){var o=a.$("body"),s=a.$(".uk-offcanvas.uk-active"),e="right"==a.langdirection,f=s.find(".uk-offcanvas-bar:first"),r=function(){o.removeClass("uk-offcanvas-page").css({width:"",height:"","margin-left":"","margin-right":""}),s.removeClass("uk-active"),f.removeClass("uk-offcanvas-bar-show"),n.css("margin-top",""),window.scrollTo(t.x,t.y),f.trigger("hide.uk.offcanvas",[s,f]),s.attr("aria-hidden","true")};s.length&&(a.support.transition&&!i?(o.one(a.support.transition.end,function(){r()}).css(e?"margin-right":"margin-left",""),setTimeout(function(){f.removeClass("uk-offcanvas-bar-show")},0)):r())},_initElement:function(t){t.data("OffcanvasInit")||(t.on("click.uk.offcanvas swipeRight.uk.offcanvas swipeLeft.uk.offcanvas",function(t){var n=a.$(t.target);if(!t.type.match(/swipe/)&&!n.hasClass("uk-offcanvas-close")){if(n.hasClass("uk-offcanvas-bar"))return;if(n.parents(".uk-offcanvas-bar:first").length)return}t.stopImmediatePropagation(),i.hide()}),t.on("click","a[href*='#']",function(){var t=a.$(this),n=t.attr("href");"#"!=n&&(a.$doc.one("hide.uk.offcanvas",function(){var i;try{i=a.$(t[0].hash)}catch(o){i=""}i.length||(i=a.$('[name="'+t[0].hash.replace("#","")+'"]')),i.length&&a.Utils.scrollToElement?a.Utils.scrollToElement(i,a.Utils.options(t.attr("data-uk-smooth-scroll")||"{}")):window.location.href=n}),i.hide())}),t.data("OffcanvasInit",!0))}};a.component("offcanvasTrigger",{boot:function(){n.on("click.offcanvas.uikit","[data-uk-offcanvas]",function(t){t.preventDefault();var n=a.$(this);if(!n.data("offcanvasTrigger")){{a.offcanvasTrigger(n,a.Utils.options(n.attr("data-uk-offcanvas")))}n.trigger("click")}}),n.on("keydown.uk.offcanvas",function(a){27===a.keyCode&&i.hide()})},init:function(){var t=this;this.options=a.$.extend({target:t.element.is("a")?t.element.attr("href"):!1},this.options),this.on("click",function(a){a.preventDefault(),i.show(t.options.target)})}}),a.offcanvas=i}(UIkit);