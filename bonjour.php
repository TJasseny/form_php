<doctype html>
<html>
	<head>
		<title>What's your name ?</title>
		<meta charset="utf-8">
	</head>

	<body>
		<p>
			<?php if (isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['repeter']))
			{
				for ($repetition = 1 ; $repetition <= $_GET['repeter'] ; $repetition++) {
				echo 'Bonjour roi, tu t\'appelle ' . $_GET['prenom'] . ' ' . $_GET['nom'] . '<br/>';
			}}
			else {
				echo 'Merci de renseigner les champs avant de valider';
			} ?>
		</p>
	</body>
</html>
