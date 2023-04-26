<!doctype html>
<html>
	<head>
		<title>QCM Victor Duruy et NSI</title>
		<meta charset="utf-8"/>
		<link href='../style.css' rel='stylesheet'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<h1>Réponses du QCM</h1>
		<h2>Créateur : Victor A.</h2>

		<?php
			$questions = file_get_contents('../questions.json');
			$questions = json_decode($questions, true);

			$points=0;
			foreach ($questions as $question) {
				foreach ($question['reponses'] as $answer)
				{
					if (isset($answer[$_POST[$question['name']][0]]) and $answer[$_POST[$question['name']][0]]==1)
					{
						$points++;
					}
				}
			}
			echo "<p>Points : $points</p>"
		?>

		<a href="/">Retour</a>
	<body>
</html>