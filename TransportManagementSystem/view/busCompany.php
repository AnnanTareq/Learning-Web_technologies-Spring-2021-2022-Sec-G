<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bus Add</title>
	<style type="text/css">
		h1{
			background-color: lightblue;
			color: green;
			text-align: center;
			font-family: "Times new roman";
			font-size: 80px;
		}
		#field{
			background-color: greenyellow;
		}
		.fnt{
			color: darkred;
			font-family: "Times new roman";
			font-size: 25px;

		}
		#bd{
			background-color: lightblue;
		}
	</style>
</head>
<body id='bd'>
	<center>
		<fieldset id="field">
		<form id ="bxs" method="POST" action="../controller/busCompanyInsertDb.php">
			<h1>Bus Add to the Database</h1>
			<label class="fnt">Bus Name : </label>
			<input type="text" name="busName" placeholder="Enter bus name here"><br><br>
			<label class="fnt">From : </label>
			<input type="text" name="fromm" placeholder="Write journey place name "><br><br>
			<label class="fnt">To : </label>
			<input type="text" name="too" placeholder="Write end of destination place name"><br><br>
			<label class="fnt">Time : </label>
			<input type="time" name="time" placeholder="Starting time"><br><br>
			<label class="fnt">Fare : </label>
			<input type="int" name="fare" placeholder="Fare"><br><br>
			<input type="submit" name="submit" value="SUBMIT">
		</form>	
	</fieldset>
	</center>
	<script type="text/javascript">
		function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bxs").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
	</script>
</body>
</html>