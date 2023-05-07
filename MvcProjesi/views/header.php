<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mvc Örnek Uygulamamız</title>
	<!-- Bootstrap stil dosyalarını çağırın -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- jQuery kütüphanesini çağırın -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<!-- Bootstrap JavaScript kodlarını çağırın -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 bg-info">
				<h5>BURASI HEADER</h5> 
                <a href="<?php echo URL;?>/Kayit/kayitekle" class="btn btn-outline-danger">Kayıt Ekle</a>
                <a href="<?php echo URL;?>/Kayit/listele" class="btn btn-outline-warning">Kayıtları Göster</a>
                <a href="ana" class="btn btn-outline-success">Ana</a>
				<?php if(Session::get("kulad")==true) { ?>
					<a href="<?php echo URL;?>/Panel/Cikis" class="btn btn-outline-success">Çıkış Yap</a>
				<?php	} else
				{  ?>
					<a href="<?php echo URL;?>/Login/Form" class="btn btn-outline-success">Giriş Yap</a>
				<?php	} ?>

					
				
				<br><br>
				<form action="<?php echo URL;?>/Kayit/Arama" method="post">
					<input type="text" name="kelime" class="form-control"><br> <input type="submit" name="btn" value="Ara" class="btn btn-success">
				</form>
			</div>
