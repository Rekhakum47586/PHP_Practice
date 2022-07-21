<html>

<body>
	
	<script>
	
		function tabledata(str){
		
			if (str == "") {
			    document.getElementById("data").innerHTML = "";
			    return;
			  } else {
			    var xmlhttp = new XMLHttpRequest();
			    xmlhttp.onreadystatechange = function() {
			      if (this.readyState == 4 && this.status == 200) {
				document.getElementById("data").innerHTML = this.responseText;
			      }
			    };
			    xmlhttp.open("GET","Connection.php?q="+str,true);
			    xmlhttp.send();
			  }
		}
	</script>
	
	<form>
	<select name="users" onchange="tabledata(this.value)">
	  <option value="">Select a person:</option>
	  <option value="1">Rekha</option>
	  <option value="2">Ramit</option>
	  <option value="3">Roshni</option>
	  <option value="4">Subham</option>
	  </select>
	</form>
	<br>
	<div id="data"><b>Person info will be listed here...</b></div>

</body>

</html>
