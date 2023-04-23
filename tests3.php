<!DOCTYPE HTML>
<html>
	<head>
		<title>Paris Form</title>


		<style>
			body {
				font-family: Arial, sans-serif;
			}

			h1 {
				text-align: center;
			}

			form {
				margin: 0 auto;
				max-width: 500px;
			}

			input[type=checkbox] {
				margin-bottom: 10px;
			}

		</style>
	</head>
	<body>
		<h1>Paris Form</h1>
		<form method="post" action="submit.php">
			<h2>What do you want to know about Paris?</h2>
			<input type="checkbox" name="interests[]" value="Culture">Culture<br>
			<input type="checkbox" name="interests[]" value="Food">Food<br>
			<input type="checkbox" name="interests[]" value="Nightlife">Nightlife<br>
			<input type="checkbox" name="interests[]" value="Shopping">Shopping<br>
			<input type="checkbox" name="interests[]" value="Sports">Sports<br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
