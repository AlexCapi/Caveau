<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Reinitialisation du mot de passe</h2>

		<div>
			Pour changer de mot de passe, completez ce formulaire: {{ URL::to('password/reset', array($token)) }}.
		</div>
	</body>
</html>
