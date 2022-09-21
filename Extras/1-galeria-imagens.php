<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		img{
			max-width: 400px;
		}
	</style>
</head>
<body>
	<?php 
		include('Galeria.php'); 
		$galeria = new Galeria();
	?>
	<img src="<?php echo $galeria->getCurrentPicture(); ?>">

	<a href="<?php echo $galeria->getNextPictureIndex(); ?>">Próximo</a>
	<a href="<?php echo $galeria->getPrevPictureIndex(); ?>">Anterior</a>
</body>
</html>