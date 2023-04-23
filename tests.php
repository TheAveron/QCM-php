<!DOCTYPE html>
<html>
<head>
	<title>Paris Checkboxes</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		
		h1 {
			text-align: center;
			color: #333;
			margin-top: 50px;
		}
		
		form {
			max-width: 500px;
			margin: 50px auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
		}
		
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
			color: #333;
		}
		
		input[type="checkbox"] {
			margin-right: 10px;
			transform: scale(1.5);
		}
		
		input[type="submit"] {
			display: block;
			margin-top: 20px;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}
		
		input[type="submit"]:hover {
			background-color: #666;
		}
	</style>
</head>
<body>
	<h1>Paris Checkboxes</h1>
	<form method="post">
		<label>
			<input type="checkbox" name="eiffel_tower" value="yes">
			Eiffel Tower
		</label>
		<label>
			<input type="checkbox" name="louvre_museum" value="yes">
			Louvre Museum
		</label>
		<label>
			<input type="checkbox" name="arc_de_triomphe" value="yes">
			Arc de Triomphe
		</label>
		<label>
			<input type="checkbox" name="notre_dame" value="yes">
			Notre-Dame Cathedral
		</label>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
