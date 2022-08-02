<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $(".show").click(function(){
    $("p").show();
  });
});
</script>
</head>
<body>

<p> I will disappear.</p>

<button id="hide">Hide</button>
<button class="show">Show</button>

</body>
</html>
