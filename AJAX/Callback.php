<!DOCTYPE html>
<html>
<body>

<div id="demo">

<h1>The XMLHttpRequest Object</h1>

<button type="button"
onclick="loadDoc('ConnCallback.php', myFunction)">Change Content
</button>
</div>

<script>
function loadDoc(url, cFunction) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cFunction(this);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}
function myFunction(xhttp) {
  document.getElementById("demo").innerHTML =
  xhttp.responseText;
   document.getElementById("demo").style.border="5px solid green";
   document.getElementById("demo").style.background="pink";
  
}
</script>
</body>
</html>
