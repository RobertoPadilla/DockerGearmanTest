<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MCG</title>

	<!-- MILLIGRAM -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

	<!-- STYLES -->
	<link rel="stylesheet" href="/css/main.css">
</head>
<body>
	<div class="center-div">
		<h1>Massive Contracts Generate</h1>

		<form>
			<fieldset>
				<label for="contractNumber">How many contracts do you want?</label>
				<input type="text" pattern="[0-9]{1,5}" id="contractNumber" oninput="onInputContractNumber()"">
				<input id="btnSend" class="button-primary" type="submit" value="Send">
			</fieldset>
		</form>
		<p id="errorLabel">Server only provides 1000 contracts per request.</p>
	</div>
	<h6 class="madeBy">By: PilloElHumilde</h6>
	
	<script src="/js/main.js"></script>
</body>
</html>