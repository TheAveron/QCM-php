<!doctype html>
<html>
	<head>
		<title>QCM Victor Duruy et NSI</title>
		<meta charset="utf-8"/>
		<link href='style.css' rel='stylesheet'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<h1>QCM sur Victor Duruy et la NSI</h1>
		<h2>Créateur : Victor A.</h2>

		<?php
			$questions = file_get_contents('questions.json');
			$questions = json_decode($questions, true);

			$compteur=1;
			echo '<form action="answers/index.php" method="post">';
			foreach($questions as $question)
			{

				echo '<div class="question_box"><h3>'.$question['question'].'</h3>';
				for ($answers = 0; $answers<=2; $answers++)
				{
					echo '<label for="question '.$compteur.'"><input class="checkbox" type="checkbox" name="'.$question['name'].'[]" id="'.($answers+1).'" value="'.array_keys($question['reponses'][$answers])[0].'"> <div class="text_ans">'.array_keys($question['reponses'][$answers])[0].'</div></label><br>';
				}
				echo '</div>';
				$compteur+=1;
			}
			echo '<input class="submit" type="submit" value="Valider"></form>';
		?>

		<a href="answers">Réponses</a>
	<body>
</html>
		