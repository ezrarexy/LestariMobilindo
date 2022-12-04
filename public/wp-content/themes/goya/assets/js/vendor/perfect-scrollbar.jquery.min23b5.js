/* perfect-scrollbar v0.8.0 */
!function r(o,l,i){function s(n,t){if(!l[n]){if(!o[n]){var e="function"==typeof require&&require;if(!t&&e)return e(n,!0);if(a)return a(n,!0);e=new Error("Cannot find module '"+n+"'");throw e.code="MODULE_NOT_FOUND",e}e=l[n]={exports:{}};o[n][0].call(e.exports,function(t){var e=o[n][1][t];return s(e||t)},e,e.exports,r,o,l,i)}return l[n].exports}for(var a="function"==typeof require&&require,t=0;t<i.length;t++)s(i[t]);return s}({1:[function(t,e,n){"use strict";var r=t("../main"),o=t("../plugin/instances");function l(t){t.fn.perfectScrollbar=function(e){return this.each(function(){var t;"object"==typeof e||void 0===e?(t=e,o.get(this)||r.initialize(this,t)):"update"===(t=e)?r.update(this):"destroy"===t&&r.destroy(this)})}}"function"==typeof define&&define.amd?define(["jquery"],l):void 0!==(t=window.jQuery||window.$)&&l(t),e.exports=l},{"../main":6,"../plugin/instances":17}],2:[function(t,e,n){"use strict";var r={};r.create=function(t,e){t=document.createElement(t);return t.className=e,t},r.appendTo=function(t,e){return e.appendChild(t),t},r.css=function(t,e,n){return"object"==typeof e?function(t,e){for(var n in e){var r=e[n];"number"==typeof r&&(r=r.toString()+"px"),t.style[n]=r}return t}(t,e):void 0===n?(r=t,o=e,window.getComputedStyle(r)[o]):(t=t,e=e,"number"==typeof(n=n)&&(n=n.toString()+"px"),t.style[e]=n,t);var r,o},r.matches=function(t,e){return void 0!==t.matches?t.matches(e):t.msMatchesSelector(e)},r.remove=function(t){void 0!==t.remove?t.remove():t.parentNode&&t.parentNode.removeChild(t)},r.queryChildren=function(t,e){return Array.prototype.filter.call(t.childNodes,function(t){return r.matches(t,e)})},e.exports=r},{}],3:[function(t,e,n){"use strict";function r(t){this.element=t,this.events={}}var o=!1;try{var l=Object.defineProperty({},"passive",{get:function(){o=!0}});window.addEventListener("testPassive",null,l),window.removeEventListener("testPassive",null,l)}catch(t){}r.prototype.bind=function(t,e){void 0===this.events[t]&&(this.events[t]=[]),this.events[t].push(e),this.element.addEventListener(t,e,!!o&&{passive:!1})},r.prototype.unbind=function(e,n){var r=void 0!==n;this.events[e]=this.events[e].filter(function(t){return r&&t!==n||(this.element.removeEventListener(e,t,!!o&&{passive:!1}),!1)},this)},r.prototype.unbindAll=function(){for(var t in this.events)this.unbind(t)};function i(){this.eventElements=[]}i.prototype.eventElement=function(e){var t=this.eventElements.filter(function(t){return t.element===e})[0];return void 0===t&&(t=new r(e),this.eventElements.push(t)),t},i.prototype.bind=function(t,e,n){this.eventElement(t).bind(e,n)},i.prototype.unbind=function(t,e,n){this.eventElement(t).unbind(e,n)},i.prototype.unbindAll=function(){for(var t=0;t<this.eventElements.length;t++)this.eventElements[t].unbindAll()},i.prototype.once=function(t,e,n){var r=this.eventElement(t),o=function(t){r.unbind(e,o),n(t)};r.bind(e,o)},e.exports=i},{}],4:[function(t,e,n){"use strict";function r(){return Math.floor(65536*(1+Math.random())).toString(16).substring(1)}e.exports=function(){return r()+r()+"-"+r()+"-"+r()+"-"+r()+"-"+r()+r()+r()}},{}],5:[function(t,e,n){"use strict";var r=t("./dom"),o=n.toInt=function(t){return parseInt(t,10)||0};function l(t){t=void 0===t?["ps--x","ps--y"]:["ps--"+t];return["ps--in-scrolling"].concat(t)}n.isEditable=function(t){return r.matches(t,"input,[contenteditable]")||r.matches(t,"select,[contenteditable]")||r.matches(t,"textarea,[contenteditable]")||r.matches(t,"button,[contenteditable]")},n.removePsClasses=function(t){for(var e=0;e<t.classList.length;e++){var n=t.classList[e];0===n.indexOf("ps-")&&t.classList.remove(n)}},n.outerWidth=function(t){return o(r.css(t,"width"))+o(r.css(t,"paddingLeft"))+o(r.css(t,"paddingRight"))+o(r.css(t,"borderLeftWidth"))+o(r.css(t,"borderRightWidth"))},n.startScrolling=function(t,e){for(var n=l(e),r=0;r<n.length;r++)t.classList.add(n[r])},n.stopScrolling=function(t,e){for(var n=l(e),r=0;r<n.length;r++)t.classList.remove(n[r])},n.env={isWebKit:"undefined"!=typeof document&&"WebkitAppearance"in document.documentElement.style,supportsTouch:"undefined"!=typeof window&&("ontouchstart"in window||window.DocumentTouch&&document instanceof window.DocumentTouch),supportsIePointer:"undefined"!=typeof window&&null!==window.navigator.msMaxTouchPoints}},{"./dom":2}],6:[function(t,e,n){"use strict";var r=t("./plugin/destroy"),o=t("./plugin/initialize"),t=t("./plugin/update");e.exports={initialize:o,update:t,destroy:r}},{"./plugin/destroy":8,"./plugin/initialize":16,"./plugin/update":20}],7:[function(t,e,n){"use strict";e.exports=function(){return{handlers:["click-rail","drag-scrollbar","keyboard","wheel","touch"],maxScrollbarLength:null,minScrollbarLength:null,scrollXMarginOffset:0,scrollYMarginOffset:0,suppressScrollX:!1,suppressScrollY:!1,swipePropagation:!0,swipeEasing:!0,useBothWheelAxes:!1,wheelPropagation:!1,wheelSpeed:1,theme:"default"}}},{}],8:[function(t,e,n){"use strict";var r=t("../lib/helper"),o=t("../lib/dom"),l=t("./instances");e.exports=function(t){var e=l.get(t);e&&(e.event.unbindAll(),o.remove(e.scrollbarX),o.remove(e.scrollbarY),o.remove(e.scrollbarXRail),o.remove(e.scrollbarYRail),r.removePsClasses(t),l.remove(t))}},{"../lib/dom":2,"../lib/helper":5,"./instances":17}],9:[function(t,e,n){"use strict";var r=t("../instances"),l=t("../update-geometry"),i=t("../update-scroll");function o(n,r){function o(t){return t.getBoundingClientRect()}function t(t){t.stopPropagation()}r.event.bind(r.scrollbarY,"click",t),r.event.bind(r.scrollbarYRail,"click",function(t){var e=t.pageY-window.pageYOffset-o(r.scrollbarYRail).top>r.scrollbarYTop?1:-1;i(n,"top",n.scrollTop+e*r.containerHeight),l(n),t.stopPropagation()}),r.event.bind(r.scrollbarX,"click",t),r.event.bind(r.scrollbarXRail,"click",function(t){var e=t.pageX-window.pageXOffset-o(r.scrollbarXRail).left>r.scrollbarXLeft?1:-1;i(n,"left",n.scrollLeft+e*r.containerWidth),l(n),t.stopPropagation()})}e.exports=function(t){o(t,r.get(t))}},{"../instances":17,"../update-geometry":18,"../update-scroll":19}],10:[function(t,e,n){"use strict";var s=t("../../lib/helper"),a=t("../../lib/dom"),r=t("../instances"),c=t("../update-geometry"),u=t("../update-scroll");function o(r,o){var l=null,i=null;function e(t){var e,n;e=t.pageX-i,n=l+e*o.railXRatio,e=Math.max(0,o.scrollbarXRail.getBoundingClientRect().left)+o.railXRatio*(o.railXWidth-o.scrollbarXWidth),o.scrollbarXLeft=n<0?0:e<n?e:n,n=s.toInt(o.scrollbarXLeft*(o.contentWidth-o.containerWidth)/(o.containerWidth-o.railXRatio*o.scrollbarXWidth))-o.negativeScrollAdjustment,u(r,"left",n),c(r),t.stopPropagation(),t.preventDefault()}function n(){s.stopScrolling(r,"x"),o.event.unbind(o.ownerDocument,"mousemove",e)}o.event.bind(o.scrollbarX,"mousedown",function(t){i=t.pageX,l=s.toInt(a.css(o.scrollbarX,"left"))*o.railXRatio,s.startScrolling(r,"x"),o.event.bind(o.ownerDocument,"mousemove",e),o.event.once(o.ownerDocument,"mouseup",n),t.stopPropagation(),t.preventDefault()})}function l(r,o){var l=null,i=null;function e(t){var e,n;e=t.pageY-i,n=l+e*o.railYRatio,e=Math.max(0,o.scrollbarYRail.getBoundingClientRect().top)+o.railYRatio*(o.railYHeight-o.scrollbarYHeight),o.scrollbarYTop=n<0?0:e<n?e:n,n=s.toInt(o.scrollbarYTop*(o.contentHeight-o.containerHeight)/(o.containerHeight-o.railYRatio*o.scrollbarYHeight)),u(r,"top",n),c(r),t.stopPropagation(),t.preventDefault()}function n(){s.stopScrolling(r,"y"),o.event.unbind(o.ownerDocument,"mousemove",e)}o.event.bind(o.scrollbarY,"mousedown",function(t){i=t.pageY,l=s.toInt(a.css(o.scrollbarY,"top"))*o.railYRatio,s.startScrolling(r,"y"),o.event.bind(o.ownerDocument,"mousemove",e),o.event.once(o.ownerDocument,"mouseup",n),t.stopPropagation(),t.preventDefault()})}e.exports=function(t){var e=r.get(t);o(t,e),l(t,e)}},{"../../lib/dom":2,"../../lib/helper":5,"../instances":17,"../update-geometry":18,"../update-scroll":19}],11:[function(t,e,n){"use strict";var a=t("../../lib/helper"),c=t("../../lib/dom"),r=t("../instances"),u=t("../update-geometry"),d=t("../update-scroll");function o(l,i){var s=!1;i.event.bind(l,"mouseenter",function(){s=!0}),i.event.bind(l,"mouseleave",function(){s=!1});i.event.bind(i.ownerDocument,"keydown",function(t){if(!(t.isDefaultPrevented&&t.isDefaultPrevented()||t.defaultPrevented)){var e=c.matches(i.scrollbarX,":focus")||c.matches(i.scrollbarY,":focus");if(s||e){var n=document.activeElement||i.ownerDocument.activeElement;if(n){if("IFRAME"===n.tagName)n=n.contentDocument.activeElement;else for(;n.shadowRoot;)n=n.shadowRoot.activeElement;if(a.isEditable(n))return}var r=0,o=0;switch(t.which){case 37:r=t.metaKey?-i.contentWidth:t.altKey?-i.containerWidth:-30;break;case 38:o=t.metaKey?i.contentHeight:t.altKey?i.containerHeight:30;break;case 39:r=t.metaKey?i.contentWidth:t.altKey?i.containerWidth:30;break;case 40:o=t.metaKey?-i.contentHeight:t.altKey?-i.containerHeight:-30;break;case 33:o=90;break;case 32:o=t.shiftKey?90:-90;break;case 34:o=-90;break;case 35:o=t.ctrlKey?-i.contentHeight:-i.containerHeight;break;case 36:o=t.ctrlKey?l.scrollTop:i.containerHeight;break;default:return}d(l,"top",l.scrollTop-o),d(l,"left",l.scrollLeft+r),u(l),function(t,e){var n=l.scrollTop;if(0===t){if(!i.scrollbarYActive)return!1;if(0===n&&0<e||n>=i.contentHeight-i.containerHeight&&e<0)return!i.settings.wheelPropagation}if(n=l.scrollLeft,0===e){if(!i.scrollbarXActive)return!1;if(0===n&&t<0||n>=i.contentWidth-i.containerWidth&&0<t)return!i.settings.wheelPropagation}return!0}(r,o)&&t.preventDefault()}}})}e.exports=function(t){o(t,r.get(t))}},{"../../lib/dom":2,"../../lib/helper":5,"../instances":17,"../update-geometry":18,"../update-scroll":19}],12:[function(t,e,n){"use strict";var r=t("../instances"),s=t("../update-geometry"),a=t("../update-scroll");function o(o,l){var i=!1;function t(t){var e,n=(n=(e=t).deltaX,r=-1*e.deltaY,void 0!==n&&void 0!==r||(n=-1*e.wheelDeltaX/6,r=e.wheelDeltaY/6),e.deltaMode&&1===e.deltaMode&&(n*=10,r*=10),n!=n&&r!=r&&(n=0,r=e.wheelDelta),e.shiftKey?[-r,-n]:[n,r]),r=n[0],n=n[1];!function(t,e){var n=o.querySelector("textarea:hover, select[multiple]:hover, .ps-child:hover");if(n){var r=window.getComputedStyle(n);if(![r.overflow,r.overflowX,r.overflowY].join("").match(/(scroll|auto)/))return;r=n.scrollHeight-n.clientHeight;if(0<r&&!(0===n.scrollTop&&0<e||n.scrollTop===r&&e<0))return 1;e=n.scrollLeft-n.clientWidth;if(0<e&&!(0===n.scrollLeft&&t<0||n.scrollLeft===e&&0<t))return 1}}(r,n)&&(i=!1,l.settings.useBothWheelAxes?l.scrollbarYActive&&!l.scrollbarXActive?(a(o,"top",n?o.scrollTop-n*l.settings.wheelSpeed:o.scrollTop+r*l.settings.wheelSpeed),i=!0):l.scrollbarXActive&&!l.scrollbarYActive&&(a(o,"left",r?o.scrollLeft+r*l.settings.wheelSpeed:o.scrollLeft-n*l.settings.wheelSpeed),i=!0):(a(o,"top",o.scrollTop-n*l.settings.wheelSpeed),a(o,"left",o.scrollLeft+r*l.settings.wheelSpeed)),s(o),(i=i||function(t,e){var n=o.scrollTop;if(0===t){if(!l.scrollbarYActive)return!1;if(0===n&&0<e||n>=l.contentHeight-l.containerHeight&&e<0)return!l.settings.wheelPropagation}if(n=o.scrollLeft,0===e){if(!l.scrollbarXActive)return!1;if(0===n&&t<0||n>=l.contentWidth-l.containerWidth&&0<t)return!l.settings.wheelPropagation}return!0}(r,n))&&(t.stopPropagation(),t.preventDefault()))}void 0!==window.onwheel?l.event.bind(o,"wheel",t):void 0!==window.onmousewheel&&l.event.bind(o,"mousewheel",t)}e.exports=function(t){o(t,r.get(t))}},{"../instances":17,"../update-geometry":18,"../update-scroll":19}],13:[function(t,e,n){"use strict";var r=t("../instances"),o=t("../update-geometry");e.exports=function(t){var e,n=r.get(t);e=t,n.event.bind(e,"scroll",function(){o(e)})}},{"../instances":17,"../update-geometry":18}],14:[function(t,e,n){"use strict";var d=t("../../lib/helper"),p=t("../instances"),h=t("../update-geometry"),f=t("../update-scroll");function r(i,t){var s=null,a={top:0,left:0};function c(){s&&(clearInterval(s),s=null),d.stopScrolling(i)}var u=!1;t.event.bind(t.ownerDocument,"selectionchange",function(){var t;i.contains(0===(t=window.getSelection?window.getSelection():document.getSelection?document.getSelection():"").toString().length?null:t.getRangeAt(0).commonAncestorContainer)?u=!0:(u=!1,c())}),t.event.bind(window,"mouseup",function(){u&&(u=!1,c())}),t.event.bind(window,"keyup",function(){u&&(u=!1,c())}),t.event.bind(window,"mousemove",function(t){var e,n,r,o,l;u&&(e=t.pageX,n=t.pageY,r=i.offsetLeft,o=i.offsetLeft+i.offsetWidth,l=i.offsetTop,t=i.offsetTop+i.offsetHeight,e<r+3?(a.left=-5,d.startScrolling(i,"x")):o-3<e?(a.left=5,d.startScrolling(i,"x")):a.left=0,n<l+3?(a.top=l+3-n<5?-5:-20,d.startScrolling(i,"y")):t-3<n?(a.top=n-t+3<5?5:20,d.startScrolling(i,"y")):a.top=0,0===a.top&&0===a.left?c():s=s||setInterval(function(){p.get(i)?(f(i,"top",i.scrollTop+a.top),f(i,"left",i.scrollLeft+a.left),h(i)):clearInterval(s)},50))})}e.exports=function(t){r(t,p.get(t))}},{"../../lib/helper":5,"../instances":17,"../update-geometry":18,"../update-scroll":19}],15:[function(t,e,n){"use strict";var r=t("../../lib/helper"),m=t("../instances"),w=t("../update-geometry"),Y=t("../update-scroll");function o(i,s,t,e){function l(t,e){Y(i,"top",i.scrollTop-e),Y(i,"left",i.scrollLeft-t),w(i)}var a={},c=0,u={},n=null,d=!1,p=!1;function r(){d=!0}function o(){d=!1}function h(t){return t.targetTouches?t.targetTouches[0]:t}function f(t){return t.targetTouches&&1===t.targetTouches.length||!(!t.pointerType||"mouse"===t.pointerType||t.pointerType===t.MSPOINTER_TYPE_MOUSE)}function b(t){var e;f(t)&&(p=!0,e=h(t),a.pageX=e.pageX,a.pageY=e.pageY,c=(new Date).getTime(),null!==n&&clearInterval(n),t.stopPropagation())}function g(t){var e,n,r,o;!p&&s.settings.swipePropagation&&b(t),!d&&p&&f(t)&&(l(e=(o={pageX:(r=h(t)).pageX,pageY:r.pageY}).pageX-a.pageX,n=o.pageY-a.pageY),a=o,0<(o=(r=(new Date).getTime())-c)&&(u.x=e/o,u.y=n/o,c=r),function(t,e){var n=i.scrollTop,r=i.scrollLeft,o=Math.abs(t),l=Math.abs(e);if(o<l){if(e<0&&n===s.contentHeight-s.containerHeight||0<e&&0===n)return!s.settings.swipePropagation}else if(l<o&&(t<0&&r===s.contentWidth-s.containerWidth||0<t&&0===r))return!s.settings.swipePropagation;return 1}(e,n)&&(t.stopPropagation(),t.preventDefault()))}function v(){!d&&p&&(p=!1,s.settings.swipeEasing&&(clearInterval(n),n=setInterval(function(){!m.get(i)||!u.x&&!u.y||Math.abs(u.x)<.01&&Math.abs(u.y)<.01?clearInterval(n):(l(30*u.x,30*u.y),u.x*=.8,u.y*=.8)},10)))}t?(s.event.bind(window,"touchstart",r),s.event.bind(window,"touchend",o),s.event.bind(i,"touchstart",b),s.event.bind(i,"touchmove",g),s.event.bind(i,"touchend",v)):e&&(window.PointerEvent?(s.event.bind(window,"pointerdown",r),s.event.bind(window,"pointerup",o),s.event.bind(i,"pointerdown",b),s.event.bind(i,"pointermove",g),s.event.bind(i,"pointerup",v)):window.MSPointerEvent&&(s.event.bind(window,"MSPointerDown",r),s.event.bind(window,"MSPointerUp",o),s.event.bind(i,"MSPointerDown",b),s.event.bind(i,"MSPointerMove",g),s.event.bind(i,"MSPointerUp",v)))}e.exports=function(t){(r.env.supportsTouch||r.env.supportsIePointer)&&o(t,m.get(t),r.env.supportsTouch,r.env.supportsIePointer)}},{"../../lib/helper":5,"../instances":17,"../update-geometry":18,"../update-scroll":19}],16:[function(t,e,n){"use strict";var r=t("./instances"),o=t("./update-geometry"),l={"click-rail":t("./handler/click-rail"),"drag-scrollbar":t("./handler/drag-scrollbar"),keyboard:t("./handler/keyboard"),wheel:t("./handler/mouse-wheel"),touch:t("./handler/touch"),selection:t("./handler/selection")},i=t("./handler/native-scroll");e.exports=function(e,t){e.classList.add("ps");t=r.add(e,"object"==typeof t?t:{});e.classList.add("ps--theme_"+t.settings.theme),t.settings.handlers.forEach(function(t){l[t](e)}),i(e),o(e)}},{"./handler/click-rail":9,"./handler/drag-scrollbar":10,"./handler/keyboard":11,"./handler/mouse-wheel":12,"./handler/native-scroll":13,"./handler/selection":14,"./handler/touch":15,"./instances":17,"./update-geometry":18}],17:[function(t,e,n){"use strict";var a=t("../lib/helper"),c=t("./default-setting"),u=t("../lib/dom"),d=t("../lib/event-manager"),o=t("../lib/guid"),l={};function i(t,e){var n,r,o,l=this;for(n in l.settings=c(),e)l.settings[n]=e[n];function i(){t.classList.add("ps--focus")}function s(){t.classList.remove("ps--focus")}l.containerWidth=null,l.containerHeight=null,l.contentWidth=null,l.contentHeight=null,l.isRtl="rtl"===u.css(t,"direction"),l.isNegativeScroll=(o=t.scrollLeft,t.scrollLeft=-1,r=t.scrollLeft<0,t.scrollLeft=o,r),l.negativeScrollAdjustment=l.isNegativeScroll?t.scrollWidth-t.clientWidth:0,l.event=new d,l.ownerDocument=t.ownerDocument||document,l.scrollbarXRail=u.appendTo(u.create("div","ps__scrollbar-x-rail"),t),l.scrollbarX=u.appendTo(u.create("div","ps__scrollbar-x"),l.scrollbarXRail),l.scrollbarX.setAttribute("tabindex",0),l.event.bind(l.scrollbarX,"focus",i),l.event.bind(l.scrollbarX,"blur",s),l.scrollbarXActive=null,l.scrollbarXWidth=null,l.scrollbarXLeft=null,l.scrollbarXBottom=a.toInt(u.css(l.scrollbarXRail,"bottom")),l.isScrollbarXUsingBottom=l.scrollbarXBottom==l.scrollbarXBottom,l.scrollbarXTop=l.isScrollbarXUsingBottom?null:a.toInt(u.css(l.scrollbarXRail,"top")),l.railBorderXWidth=a.toInt(u.css(l.scrollbarXRail,"borderLeftWidth"))+a.toInt(u.css(l.scrollbarXRail,"borderRightWidth")),u.css(l.scrollbarXRail,"display","block"),l.railXMarginWidth=a.toInt(u.css(l.scrollbarXRail,"marginLeft"))+a.toInt(u.css(l.scrollbarXRail,"marginRight")),u.css(l.scrollbarXRail,"display",""),l.railXWidth=null,l.railXRatio=null,l.scrollbarYRail=u.appendTo(u.create("div","ps__scrollbar-y-rail"),t),l.scrollbarY=u.appendTo(u.create("div","ps__scrollbar-y"),l.scrollbarYRail),l.scrollbarY.setAttribute("tabindex",0),l.event.bind(l.scrollbarY,"focus",i),l.event.bind(l.scrollbarY,"blur",s),l.scrollbarYActive=null,l.scrollbarYHeight=null,l.scrollbarYTop=null,l.scrollbarYRight=a.toInt(u.css(l.scrollbarYRail,"right")),l.isScrollbarYUsingRight=l.scrollbarYRight==l.scrollbarYRight,l.scrollbarYLeft=l.isScrollbarYUsingRight?null:a.toInt(u.css(l.scrollbarYRail,"left")),l.scrollbarYOuterWidth=l.isRtl?a.outerWidth(l.scrollbarY):null,l.railBorderYWidth=a.toInt(u.css(l.scrollbarYRail,"borderTopWidth"))+a.toInt(u.css(l.scrollbarYRail,"borderBottomWidth")),u.css(l.scrollbarYRail,"display","block"),l.railYMarginHeight=a.toInt(u.css(l.scrollbarYRail,"marginTop"))+a.toInt(u.css(l.scrollbarYRail,"marginBottom")),u.css(l.scrollbarYRail,"display",""),l.railYHeight=null,l.railYRatio=null}function r(t){return t.getAttribute("data-ps-id")}n.add=function(t,e){var n,r=o();return n=r,t.setAttribute("data-ps-id",n),l[r]=new i(t,e),l[r]},n.remove=function(t){delete l[r(t)],t.removeAttribute("data-ps-id")},n.get=function(t){return l[r(t)]}},{"../lib/dom":2,"../lib/event-manager":3,"../lib/guid":4,"../lib/helper":5,"./default-setting":7}],18:[function(t,e,n){"use strict";var l=t("../lib/helper"),i=t("../lib/dom"),s=t("./instances"),a=t("./update-scroll");function c(t,e){return t.settings.minScrollbarLength&&(e=Math.max(e,t.settings.minScrollbarLength)),t.settings.maxScrollbarLength&&(e=Math.min(e,t.settings.maxScrollbarLength)),e}e.exports=function(t){var e,n,r,o=s.get(t);o.containerWidth=t.clientWidth,o.containerHeight=t.clientHeight,o.contentWidth=t.scrollWidth,o.contentHeight=t.scrollHeight,t.contains(o.scrollbarXRail)||(0<(r=i.queryChildren(t,".ps__scrollbar-x-rail")).length&&r.forEach(function(t){i.remove(t)}),i.appendTo(o.scrollbarXRail,t)),t.contains(o.scrollbarYRail)||(0<(r=i.queryChildren(t,".ps__scrollbar-y-rail")).length&&r.forEach(function(t){i.remove(t)}),i.appendTo(o.scrollbarYRail,t)),!o.settings.suppressScrollX&&o.containerWidth+o.settings.scrollXMarginOffset<o.contentWidth?(o.scrollbarXActive=!0,o.railXWidth=o.containerWidth-o.railXMarginWidth,o.railXRatio=o.containerWidth/o.railXWidth,o.scrollbarXWidth=c(o,l.toInt(o.railXWidth*o.containerWidth/o.contentWidth)),o.scrollbarXLeft=l.toInt((o.negativeScrollAdjustment+t.scrollLeft)*(o.railXWidth-o.scrollbarXWidth)/(o.contentWidth-o.containerWidth))):o.scrollbarXActive=!1,!o.settings.suppressScrollY&&o.containerHeight+o.settings.scrollYMarginOffset<o.contentHeight?(o.scrollbarYActive=!0,o.railYHeight=o.containerHeight-o.railYMarginHeight,o.railYRatio=o.containerHeight/o.railYHeight,o.scrollbarYHeight=c(o,l.toInt(o.railYHeight*o.containerHeight/o.contentHeight)),o.scrollbarYTop=l.toInt(t.scrollTop*(o.railYHeight-o.scrollbarYHeight)/(o.contentHeight-o.containerHeight))):o.scrollbarYActive=!1,o.scrollbarXLeft>=o.railXWidth-o.scrollbarXWidth&&(o.scrollbarXLeft=o.railXWidth-o.scrollbarXWidth),o.scrollbarYTop>=o.railYHeight-o.scrollbarYHeight&&(o.scrollbarYTop=o.railYHeight-o.scrollbarYHeight),e=t,r={width:(n=o).railXWidth},n.isRtl?r.left=n.negativeScrollAdjustment+e.scrollLeft+n.containerWidth-n.contentWidth:r.left=e.scrollLeft,n.isScrollbarXUsingBottom?r.bottom=n.scrollbarXBottom-e.scrollTop:r.top=n.scrollbarXTop+e.scrollTop,i.css(n.scrollbarXRail,r),r={top:e.scrollTop,height:n.railYHeight},n.isScrollbarYUsingRight?n.isRtl?r.right=n.contentWidth-(n.negativeScrollAdjustment+e.scrollLeft)-n.scrollbarYRight-n.scrollbarYOuterWidth:r.right=n.scrollbarYRight-e.scrollLeft:n.isRtl?r.left=n.negativeScrollAdjustment+e.scrollLeft+2*n.containerWidth-n.contentWidth-n.scrollbarYLeft-n.scrollbarYOuterWidth:r.left=n.scrollbarYLeft+e.scrollLeft,i.css(n.scrollbarYRail,r),i.css(n.scrollbarX,{left:n.scrollbarXLeft,width:n.scrollbarXWidth-n.railBorderXWidth}),i.css(n.scrollbarY,{top:n.scrollbarYTop,height:n.scrollbarYHeight-n.railBorderYWidth}),o.scrollbarXActive?t.classList.add("ps--active-x"):(t.classList.remove("ps--active-x"),o.scrollbarXWidth=0,o.scrollbarXLeft=0,a(t,"left",0)),o.scrollbarYActive?t.classList.add("ps--active-y"):(t.classList.remove("ps--active-y"),o.scrollbarYHeight=0,o.scrollbarYTop=0,a(t,"top",0))}},{"../lib/dom":2,"../lib/helper":5,"./instances":17,"./update-scroll":19}],19:[function(t,e,n){"use strict";function o(t){var e=document.createEvent("Event");return e.initEvent(t,!0,!0),e}var l=t("./instances");e.exports=function(t,e,n){if(void 0===t)throw"You must provide an element to the update-scroll function";if(void 0===e)throw"You must provide an axis to the update-scroll function";if(void 0===n)throw"You must provide a value to the update-scroll function";"top"===e&&n<=0&&(t.scrollTop=n=0,t.dispatchEvent(o("ps-y-reach-start"))),"left"===e&&n<=0&&(t.scrollLeft=n=0,t.dispatchEvent(o("ps-x-reach-start")));var r=l.get(t);"top"===e&&n>=r.contentHeight-r.containerHeight&&((n=r.contentHeight-r.containerHeight)-t.scrollTop<=2?n=t.scrollTop:t.scrollTop=n,t.dispatchEvent(o("ps-y-reach-end"))),"left"===e&&n>=r.contentWidth-r.containerWidth&&((n=r.contentWidth-r.containerWidth)-t.scrollLeft<=2?n=t.scrollLeft:t.scrollLeft=n,t.dispatchEvent(o("ps-x-reach-end"))),void 0===r.lastTop&&(r.lastTop=t.scrollTop),void 0===r.lastLeft&&(r.lastLeft=t.scrollLeft),"top"===e&&n<r.lastTop&&t.dispatchEvent(o("ps-scroll-up")),"top"===e&&n>r.lastTop&&t.dispatchEvent(o("ps-scroll-down")),"left"===e&&n<r.lastLeft&&t.dispatchEvent(o("ps-scroll-left")),"left"===e&&n>r.lastLeft&&t.dispatchEvent(o("ps-scroll-right")),"top"===e&&n!==r.lastTop&&(t.scrollTop=r.lastTop=n,t.dispatchEvent(o("ps-scroll-y"))),"left"===e&&n!==r.lastLeft&&(t.scrollLeft=r.lastLeft=n,t.dispatchEvent(o("ps-scroll-x")))}},{"./instances":17}],20:[function(t,e,n){"use strict";var r=t("../lib/helper"),o=t("../lib/dom"),l=t("./instances"),i=t("./update-geometry"),s=t("./update-scroll");e.exports=function(t){var e=l.get(t);e&&(e.negativeScrollAdjustment=e.isNegativeScroll?t.scrollWidth-t.clientWidth:0,o.css(e.scrollbarXRail,"display","block"),o.css(e.scrollbarYRail,"display","block"),e.railXMarginWidth=r.toInt(o.css(e.scrollbarXRail,"marginLeft"))+r.toInt(o.css(e.scrollbarXRail,"marginRight")),e.railYMarginHeight=r.toInt(o.css(e.scrollbarYRail,"marginTop"))+r.toInt(o.css(e.scrollbarYRail,"marginBottom")),o.css(e.scrollbarXRail,"display","none"),o.css(e.scrollbarYRail,"display","none"),i(t),s(t,"top",t.scrollTop),s(t,"left",t.scrollLeft),o.css(e.scrollbarXRail,"display",""),o.css(e.scrollbarYRail,"display",""))}},{"../lib/dom":2,"../lib/helper":5,"./instances":17,"./update-geometry":18,"./update-scroll":19}]},{},[1]);