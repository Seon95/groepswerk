r("all");function r(a){var s,e;for(s=document.getElementsByClassName("product-container"),a=="all"&&(a=""),e=0;e<s.length;e++)o(s[e],"show"),s[e].className.indexOf(a)>-1&&c(s[e],"show")}function c(a,s){var e,l,t;for(l=a.className.split(" "),t=s.split(" "),e=0;e<t.length;e++)l.indexOf(t[e])==-1&&(a.className+=" "+t[e])}function o(a,s){var e,l,t;for(l=a.className.split(" "),t=s.split(" "),e=0;e<t.length;e++)for(;l.indexOf(t[e])>-1;)l.splice(l.indexOf(t[e]),1);a.className=l.join(" ")}var f=document.getElementById("filter-buttons"),i=f.getElementsByClassName("button-value");for(var n=0;n<i.length;n++)i[n].addEventListener("click",function(){var a=document.getElementsByClassName("active");a[0].className=a[0].className.replace(" active",""),this.className+=" active"});
