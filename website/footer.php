<div id="link-container">
  <a href="line.php" class="button button-inline button-primary">Line</a>
  <a href="animated.php" class="button button-inline button-primary">Animated Line</a>
  <a href="stackedArea.php" class="button button-inline button-primary">Stacked Area</a>
  <br><br>
</div>
<script>
// These scripts handle changing pages without "refreshing"
// TODO: if you load the animated line "silently" it seems to flash the page, which I can only assume because we change the css included in the header.
// idk if there's a way around it, but that'll be something I'll attempt to keep an eye out for in the future.
function processAjaxData(result, urlPath) {
     document.getElementsByTagName("HTML")[0].innerHTML = result;
     var ttitle = $(result).filter('title').text();
     document.title = ttitle;
     window.history.pushState({"html":result,"pageTitle":ttitle},"", urlPath);
     eval(document.getElementById('primaryscript').innerHTML); // slightly a hack, but oh well. we do this to "activate" the new graph js instructions
     genAllChart();
}

function doAjax(url) {
    $.ajax({url: url, success: function(result){
        processAjaxData(result, url);
    }});
}

document.onclick = function (e) {
  e = e ||  window.event;
  var element = e.target || e.srcElement;

  if (element.tagName == 'A') {
    doAjax(element.href);
    return false; // prevent default action and stop event propagation
  }
};

// Auto-refresh every 15 minutes
setTimeout(function(){
   window.location.reload(1);
}, 15*60000);
</script>
</html>