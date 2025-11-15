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