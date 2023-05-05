<!doctype html>
<html>
	<head>
		<title>QCM Victor Duruy et NSI</title>
		<meta charset="utf-8"/>
		<link href='style.css' rel='stylesheet'>
		<script src="color_themes.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<?php
		$color="light_mode";
		if (isset($_GET['theme']))
		{
			$color=$_GET['theme'];
		}
	?>
	<body class="<?php echo $color;?>" id="body">
		<header>
			<input type="" id="color-button" value="" onclick="color();">
		</header>
		<main>
			<h1>QCM sur Victor Duruy et la NSI</h1>
			<h2>Créateur : Victor A.</h2>

			
			<form action="answers/index.php?theme=<?php echo $color;?>" method="post">
				<?php
					$questions = file_get_contents('questions.json');
					$questions = json_decode($questions, true);

					$compteur=1;
					foreach($questions as $question)
					{
						$color1='--textlight';
						$color2='--textdark';
						if ($compteur<6)
						{
							$color1='--textdark';
							$color2='--textlight';
						}
						echo '<div class="question_box" style="background-color:var(--green'.$compteur.'); color:var('.$color1.'); text-shadow: 0 0 10px var('.$color2.');"><h3>'.$question['question'].'</h3>';
						
						foreach (array_keys($question['reponses']) as $answer)
						{
							echo '<label for="question '.$compteur.'"><input class="checkbox" type="checkbox" name="'.$question['name'].'[]" value="'.$answer.'"> <div class="text_ans">'.$answer.'</div></label><br>';
						}

						echo '</div>';
						$compteur+=1;
					}
				?>
				<input class="buttons" type="submit" value="Valider">
			</form>
		</main>		
		<footer><p>© Copyright V.A - 2023 - All Right reserved</p></footer>
	<body>
</html>
		