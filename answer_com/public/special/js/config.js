!function(){var t=function(){var t=document.getElementsByTagName("head")[0],a=document.createElement("script");a.src="//hm.baidu.com/hm.js?b931ce72adfb8fbad984e048bfe1a945",t.appendChild(a)},a=function(){var t=document.getElementsByTagName("head")[0],a=document.createElement("script"),e=window.location.protocol.split(":")[0];a.src="https"===e?"https://zz.bdstatic.com/linksubmit/push.js":"http://push.zhanzhang.baidu.com/push.js",t.appendChild(a)},e=function(){var t=document.getElementsByTagName("head")[0],a=document.createElement("script");a.src="http:"===document.location.protocol?"http://js.passport.qihucdn.com/11.0.1.js?3108faf5521f4907dfab3720543c74eb":"https://jspassport.ssl.qhimg.com/11.0.1.js?3108faf5521f4907dfab3720543c74eb",t.appendChild(a)},o=function(t,a){var e,o,n=t.split("#");return t=n[0],e=n[1],n=t.split("?"),t=n[0],o=n[1],o=o?o+"&"+a:a,t=t+"?"+o,e&&(t=t+"#"+e),t};location.host.indexOf(".jiakaobaodian.com")>-1&&-1===location.host.indexOf(".test.")&&(navigator.userAgent.match(/mobile/i)?function(){var t,a,e=location.host,n="m.jiakaobaodian.com";navigator.userAgent.match(/mobile/i)&&(t=function(){var t=e.split(".")[0];if("www"!==t)return t}(),t&&(n=n+"/"+t+"/"),a=location.href.replace(e,n).replace(/(\w)\/\//gi,"$1/"),window.location=o(a,"from=www"))}():function(){t(),a(),e()}())}();