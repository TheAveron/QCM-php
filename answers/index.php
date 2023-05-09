<!doctype html>
<html lang="fr">
	<head>
		<title>QCM Victor Duruy et NSI</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../formulaire.ico">

		<link href='../style.css' rel='stylesheet'>
		<script src="../color_themes.js"></script>
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
			<h1>Réponses du QCM</h1>
			<h2>Créateur : Victor A.</h2>

      <input type='button' id="color-button" value=" " onclick="color();">
			<div class=answers>
				<?php
					$questions = file_get_contents('../questions.json');
					$questions = json_decode($questions, true);

					$points=0;
					$correct_ans=0;
					$compteur=0;

					$final_text="";

					foreach ($questions as $question) {
						$compteur++;
						$color1='--textlight';
						$color2='--textdark';
						if ($compteur<6)
						{
							$color1='--textdark';
							$color2='--textlight';
						}
						$final_text.="<div class='question_box' style='background-color:var(--green".$compteur."); color:var(".$color1."); text-shadow: 0 0 10px var(".$color2.");'><h3>Question : ".$question['question']."</h3>";
						foreach ($question['reponses'] as $answer => $value) if ($value==1)
						{
							$correct=$answer;
							$final_text.= "<p>La réponse correcte était ".$correct."</p><br>";
						}
						if (isset($_POST[$question['name']]))
						{
							$final_text.= "<p>Votre réponse : ".$_POST[$question['name']][0]."</p>";
							if ($question["reponses"][$_POST[$question['name']][0]])
							{
								$final_text.= "<p>Vous avez correctement répondu</p></div>";
								$points+=3;
								$correct_ans++;
								continue;
							}
							$final_text.= "<p>Vous vous êtes trompé</p></div>";
							$points-=1;
							continue;
						}
						$final_text.= "<p>Vous n'avez pas répondu</p></div>";						
					}
					echo "<div class='resume'><p>Nombre de bonnes réponses : $correct_ans</p><p>Votre score : $points</p></div>";
					echo $final_text;
				?>
        <a class="buttons" href="../?theme=<?php echo $color;?>">Retour</a>
			</div>
		</main>
		<footer><p>© Copyright V.A - 2023 - All Right reserved</p></footer>
  </body>
</html>