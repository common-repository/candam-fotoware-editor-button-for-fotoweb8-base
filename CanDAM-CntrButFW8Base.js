var c$=jQuery;c$.noConflict();var arDocs=[],getMorePages=!0,nextDocpage="",url="http://www.candam.com",docnbr=0,curdwnlnk="",docnbr=0,arMeta=[],postext="",margetop="",margebot="",fontsize="",dftimgsize="";window.callingApp="CanDAMFw8WPPlg";function getRandomInt(a,b){return Math.floor(Math.random()*(b-a+1))+a}function dateFormat(a,b){b=b.replace("DD",(10>a.getDate()?"0":"")+a.getDate());b=b.replace("MM",(9>a.getMonth()?"0":"")+(a.getMonth()+1));return b=b.replace("YYYY",a.getFullYear())}
function timeFormat(a,b){b=b.replace("hh",(10>a.getHours()?"0":"")+a.getHours());b=b.replace("mm",(10>a.getMinutes()?"0":"")+a.getMinutes());return b=b.replace("ss",(10>a.getSeconds()?"0":"")+a.getSeconds())}
function listener(a){if("CanDAMFw8WPPlg"===window.callingApp){var b=fwParams.fw_url;b.indexOf("/fotoweb");if(a.origin===b)if("authenticated"===a.data){a=document.getElementsByTagName("iframe");for(var c in a)if(a[c].src.match(fwParams.fw_url)){a[c].src=a[c].src;break}}else"assetSelected"===a.data.event?handleSelected(a.data.asset,getFrameURL(a.data,b)):"assetExported"===a.data.event&&handleExported(a.data,b)}}
function handleSelected(a,b){var c=a.doctype;arMeta=a.metadata;dftimgsize=fwParams.fw_dft_size.toString();"image"===c?setTimeout(function(){tb_show("FotoWeb",b)},300):(alert("type of document not supported by this version of the plugin, please upgrade to the PRO version, thanks"),tb_remove())}function handleExported(a,b){var c;tb_remove();c=writeText(a);wp.media.editor.insert(c)}
function writeText(a){return'<div style="display: block; clear: both;margin-top:'+margetop+"; margin-bottom:"+margebot+"; overflow: hidden;font-size:"+fontsize+';"><div style="display: block; clear: both;"><a class="fancybox" href="'+a["export"]["export"].image.doubleResolution+'"><img class="alignleft clearfix size-medium wp-image-14" src="'+a["export"]["export"].image.normal+'" alt=""" width="'+a["export"]["export"].size.w+'" height="'+a["export"]["export"].size.h+'" /></a></div></div>'}
function getFrameURL(a,b){var c=a.asset.doctype;if("image"===c){var d=b+"/fotoweb/widgets/publish?i="+encodeURIComponent(a.asset.href);fwParams.fw_preset_name?d+="&p="+fwParams.fw_preset_name:0<fwParams.fw_dft_size&&(d+="&w="+fwParams.fw_dft_size);d+="&TB_iframe=true&width=600&height=550"}else"document"===c&&(d="");return d}window.addEventListener&&addEventListener("message",listener,!1);