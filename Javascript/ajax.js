var _____WB$wombat$assign$function_____=function(name){return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name))||self[name];};if(!self.__WB_pmw){self.__WB_pmw=function(obj){this.__WB_source=obj;return this;}}{
let window = _____WB$wombat$assign$function_____("window");
let self = _____WB$wombat$assign$function_____("self");
let document = _____WB$wombat$assign$function_____("document");
let location = _____WB$wombat$assign$function_____("location");
let top = _____WB$wombat$assign$function_____("top");
let parent = _____WB$wombat$assign$function_____("parent");
let frames = _____WB$wombat$assign$function_____("frames");
let opens = _____WB$wombat$assign$function_____("opens");

var req_fifo;
var contentArea;
function GetAsyncData(url, contentArea) {
    this.contentArea = contentArea;
    if (window.XMLHttpRequest) {
      req_fifo = new XMLHttpRequest();
      req_fifo.abort();
      req_fifo.onreadystatechange = GotAsyncData;
      req_fifo.open("GET", url, true);
      req_fifo.send(null);
    } else if (window.ActiveXObject) {
      req_fifo = new ActiveXObject("Microsoft.XMLHTTP");
      if (req_fifo) {
        req_fifo.abort();
        req_fifo.onreadystatechange = GotAsyncData;
        req_fifo.open("GET", url, true);
        req_fifo.send();
      }
    }
}

function GotAsyncData() {
    if (req_fifo.readyState != 4 || req_fifo.status != 200) {
        return;
    }
    document.getElementById(contentArea).innerHTML = req_fifo.responseText;
    return;
}


}
/*
     FILE ARCHIVED ON 22:45:15 Aug 05, 2011 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 04:45:15 Nov 14, 2025.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 1.67
  exclusion.robots: 0.021
  exclusion.robots.policy: 0.01
  esindex: 0.01
  cdx.remote: 8.163
  LoadShardBlock: 116.165 (3)
  PetaboxLoader3.datanode: 116.788 (4)
  load_resource: 13.655
*/