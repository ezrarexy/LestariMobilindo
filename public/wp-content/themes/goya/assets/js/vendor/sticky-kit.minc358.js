/**
@license Sticky-kit v1.1.3 | MIT | Leaf Corcoran 2015 | http://leafo.net
 */

(function(){var M,S;M=window.jQuery,S=M(window),M.fn.stick_in_parent=function(t){var x,i,P,o,e,V,s,F,C,r,z,I,A;for(null==t&&(t={}),A=t.sticky_class,V=t.inner_scrolling,I=t.recalc_every,z=t.parent,C=t.offset_top,F=t.spacer,P=t.bottoming,null==C&&(C=0),null==z&&(z=void 0),null==V&&(V=!0),null==A&&(A="is_stuck"),x=M(document),null==P&&(P=!0),r=function(t){var i,o;return window.getComputedStyle?(t[0],i=window.getComputedStyle(t[0]),o=parseFloat(i.getPropertyValue("width"))+parseFloat(i.getPropertyValue("margin-left"))+parseFloat(i.getPropertyValue("margin-right")),"border-box"!==i.getPropertyValue("box-sizing")&&(o+=parseFloat(i.getPropertyValue("border-left-width"))+parseFloat(i.getPropertyValue("border-right-width"))+parseFloat(i.getPropertyValue("padding-left"))+parseFloat(i.getPropertyValue("padding-right"))),o):t.outerWidth(!0)},o=function(n,l,a,c,p,d,u,f){var h,t,g,k,y,m,v,b,i,w,_,e;if(!n.data("sticky_kit")){if(n.data("sticky_kit",!0),y=x.height(),v=n.parent(),null!=z&&(v=v.closest(z)),!v.length)throw"failed to find stick parent";if(h=g=!1,(_=null!=F?F&&n.closest(F):M("<div />"))&&_.css("position",n.css("position")),(b=function(){var t,i,o;if(!f)return y=x.height(),t=parseInt(v.css("border-top-width"),10),i=parseInt(v.css("padding-top"),10),l=parseInt(v.css("padding-bottom"),10),a=v.offset().top+t+i,c=v.height(),g&&(h=g=!1,null==F&&(n.insertAfter(_),_.detach()),n.css({position:"",top:"",width:"",bottom:""}).removeClass(A),o=!0),p=n.offset().top-(parseInt(n.css("margin-top"),10)||0)-C,d=n.outerHeight(!0),u=n.css("float"),_&&_.css({width:r(n),height:d,display:n.css("display"),"vertical-align":n.css("vertical-align"),float:u}),o?e():void 0})(),d!==c)return k=void 0,m=C,w=I,e=function(){var t,i,o,e,s,r;if(!f)return o=!1,null!=w&&(w-=1)<=0&&(w=I,b(),o=!0),!o&&1<Math.abs(x.height()-y)&&(b(),o=!0),e=S.scrollTop(),null!=k&&(i=e-k),k=e,g?(P&&(s=c+a<e+d+m,h&&!s&&(h=!1,n.css({position:"fixed",bottom:"",top:m}).trigger("sticky_kit:unbottom"))),e<p&&(g=!1,m=C,null==F&&("left"!==u&&"right"!==u||n.insertAfter(_),_.detach()),t={position:"",width:"",top:""},n.css(t).removeClass(A).trigger("sticky_kit:unstick")),V&&(r=S.height())<d+C&&(h||(m-=i,m=Math.max(r-d,m),m=Math.min(C,m),g&&n.css({top:m+"px"})))):p<e&&(g=!0,(t={position:"fixed",top:m}).width="border-box"===n.css("box-sizing")?n.outerWidth()+"px":n.width()+"px",n.css(t).addClass(A),null==F&&(n.after(_),"left"!==u&&"right"!==u||_.append(n)),n.trigger("sticky_kit:stick")),g&&P&&(null==s&&(s=c+a<e+d+m),!h&&s)?(h=!0,"static"===v.css("position")&&v.css({position:"relative"}),n.css({position:"absolute",bottom:l,top:"auto"}).trigger("sticky_kit:bottom")):void 0},i=function(){return b(),e()},t=function(){if(f=!0,S.off("touchmove",e),S.off("scroll",e),S.off("resize",i),M(document.body).off("sticky_kit:recalc",i),n.off("sticky_kit:detach",t),n.removeData("sticky_kit"),n.css({position:"",bottom:"",top:"",width:""}),v.position("position",""),g)return null==F&&("left"!==u&&"right"!==u||n.insertAfter(_),_.remove()),n.removeClass(A)},S.on("touchmove",e),S.on("scroll",e),S.on("resize",i),M(document.body).on("sticky_kit:recalc",i),n.on("sticky_kit:detach",t),setTimeout(e,0)}},e=0,s=this.length;e<s;e++)i=this[e],o(M(i));return this}}).call(this);