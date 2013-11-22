<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?= (isset($title)) ? $title : "Pas de titre" ?></title>
	<style>
		#container{
			margin:0 auto;
			width:500px;
		}
	</style>
	</head>
	<body>
        <?= (isset($content)) ? $content : "Pas de contenu affichable" ?>
    </body>
</html>
