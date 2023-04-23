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
			foreach($questions as $question)
			{

				echo '<form method="post">';
				echo '<h3>'.$question['question'].'</h3>';
				echo '<label for="option'.$compteur.'"><input class="checkbox" type="checkbox" name="'.$question['name'].'[]" id="1" value="'.array_keys($question['reponses'][1])[0].'">'.array_keys($question['reponses'][1])[0].'</label><br>';
				echo '<label for="option'.$compteur.'"><input class="checkbox" type="checkbox" name="'.$question['name'].'[]" id="2" value="'.array_keys($question['reponses'][2])[0].'">'.array_keys($question['reponses'][2])[0].'</label><br>';
				echo '<label for="option'.$compteur.'"><input class="checkbox" type="checkbox" name="'.$question['name'].'[]" id="3" value="'.array_keys($question['reponses'][3])[0].'">'.array_keys($question['reponses'][3])[0].'</label><br>';
				echo '<input class="submit" type="submit" name="submit'.$compteur.'" value="Submit'.$compteur.'">';
				echo '</form>';

				$compteur+=1;

			}
		?>

		<?php
			if(isset($_POST['submit1'])){
				if(!empty($_POST['proviseur'])) {
					foreach($_POST['proviseur'] as $selected) {
						echo "<p>You selected " . $selected . "</p>";
					}
				} else {
					echo "<p>Please select at least one option.</p>";
				}
			}
		?>
	<body>
</html>
		