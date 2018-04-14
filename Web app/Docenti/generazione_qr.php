<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<title>Generazione QR</title>
</head>
<body>
<?php
include("../header.php");
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script type="text/javascript" src="../jquery.qrcode.min.js"></script>
	<script language="JavaScript">
		function GeneraQR()
		{
			if(document.FormQR.classe.value=="nullo")
			{
				alert("Selezionare una classe")
			}
			else
			{
				jquery('#qrcode').qrcode(document.FormQR.classe.value)
			}
		}
	</script>
	<h1 align="center">Generazione QR</h1><br>
	<div style="width: 100%; overflow: hidden;">
	<div style="width: 50%; float: left;">
	<form name="FormQR">
		<select name="classe" class="form-control">
		<option value="nullo">Selezionare una classe</option>
		<option value="1AC">1AC</option>
		<option value="1AE">1AE</option>
		<option value="1AI">1AI</option>
		<option value="1ALS">1ALS</option>
		<option value="1AM">1AM</option>
		<option value="1BC">1BC</option>
		<option value="1BE">1BE</option>
		<option value="1BI">1BI</option>
		<option value="1BLS">1BLS</option>
		<option value="1BM">1BM</option>
		<option value="1CI">1CI</option>
		<option value="1CLS">1CLS</option>
		<option value="1CM">1CM</option>
		<option value="1DI">1DI</option>
		<option value="1DLS">1DLS</option>
		<option value="1EI">1EI</option>
		<option value="1ELS">1ELS</option>
		<option value="2AC">2AC</option>
		<option value="2AE">2AE</option>
		<option value="2AI">2AI</option>
		<option value="2ALS">2ALS</option>
		<option value="2AM">2AM</option>
		<option value="2BC">2BC</option>
		<option value="2BE">2BE</option>
		<option value="2BI">2BI</option>
		<option value="2BLS">2BLS</option>
		<option value="2BM">2BM</option>
		<option value="2CI">2CI</option>
		<option value="2CLS">2CLS</option>
		<option value="2CM">2CM</option>
		<option value="2DI">2DI</option>
		<option value="2DLS">2DLS</option>
		<option value="2FI">2FI</option>
		<option value="3AC">3AC</option>
		<option value="3AE">3AE</option>
		<option value="3AI">3AI</option>
		<option value="3ALS">3ALS</option>
		<option value="3AM">3AM</option>
		<option value="3BC">3BC</option>
		<option value="3BE">3BE</option>
		<option value="3BI">3BI</option>
		<option value="3BM">3BM</option>
		<option value="3CC">3CC</option>
		<option value="3CI">3CI</option>
		<option value="3CLS">3CLS</option>
		<option value="3CM">3CM</option>
		<option value="3DLS">3DLS</option>
		<option value="3EI">3EI</option>
		<option value="4AC">4AC</option>
		<option value="4AE">4AE</option>
		<option value="4AI">4AI</option>
		<option value="4ALS">4ALS</option>
		<option value="4AM">4AM</option>
		<option value="4BC">4BC</option>
		<option value="4BE">4BE</option>
		<option value="4BI">4BI</option>
		<option value="4BLS">4BLS</option>
		<option value="4BM">4BM</option>
		<option value="4CC">4CC</option>
		<option value="4CI">4CI</option>
		<option value="4CLS">4CLS</option>
		<option value="4CM">4CM</option>
		<option value="4FI">4FI</option>
		<option value="5AC">5AC</option>
		<option value="5AE">5AE</option>
		<option value="5AI">5AI</option>
		<option value="5ALS">5ALS</option>
		<option value="5AM">5AM</option>
		<option value="5BI">5BC</option>
		<option value="5BI">5BE</option>
		<option value="5BE">5BI</option>
		<option value="5BML">5BLS</option>
		<option value="5BM">5BM</option>
		<option value="5CLS">5CLS</option>
		<option value="5CM">5CM</option>
		<option value="5DI">5DI</option>
		<option value="5DLS">5DLS</option>
		<option value="5FI">5FI</option>
		</select><br>
		<center><input type="submit" class="btn btn-primary" value="Genera QR" onClick="GeneraQR()"></center>
	</form><br>
	</div>
	<div id="qrcode" style="width: 50%; float: left;"></div>
	</div>
<?php
include("../footer.php");
?>
</body>
</html>