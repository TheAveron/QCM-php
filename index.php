<!doctype html>
<html lang="fr">
	<head>
		<title>QCM Victor Duruy et NSI</title>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="formulaire.ico">
		<link href='style.css' rel='stylesheet'>
		<script src="color_themes.js"></script>
		
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
		</header>
		<main>
			<h1>QCM sur Victor Duruy et la NSI</h1>
			<h2>Créateur : Victor A.</h2>

			<input type='button' id="color-button" value=" " onclick="color();">
			<form action="answers/?theme=<?php echo $color;?>" method="post">
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
						echo "<div class='question_box' id='question_$compteur' style='background-color:var(--green$compteur); color:var($color1); text-shadow: 0 0 10px var($color2);'><h3>".$question["question"]."</h3>";
						
						$answer_number=0;
						foreach (array_keys($question['reponses']) as $answer)
						{
							echo "<label for='answer$compteur.$answer_number'><input  type='checkbox' id='answer$compteur.$answer_number' class='checkbox' name='".$question['name']."[]' value='$answer'> <span>$answer</span></label><br>";
							$answer_number++;
						}

						echo '</div>';
						$compteur+=1;
					}
				?>
				<input class="buttons" type="submit" value="Valider">
			</form>
		</main>		
		<footer><p>© Copyright V.A - 2023 - All Right reserved</p></footer>
  </body>
</html>
		