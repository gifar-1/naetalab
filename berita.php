<?php 
	// echo var_dump($_GET['index']);
	// die;
    $json = trim(file_get_contents('https://sumedangkab.go.id/index.php/berita/apisumedangkab'));
    $data = json_decode($json,true);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gifar Alfaqih</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<script src="dist/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-info mb-3">
		<a class="navbar-brand" href="#">Portal</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>
	<main role="main" class="container">
		<div class="row">
			<?php
			echo "
				<div class='col-md-12 blog-main' style='text-align: justify;'>
					<h3 class='pb-4 mb-4 font-italic border-bottom'>
						".$data[$_GET['index']]['judul']."
					</h3>
					<div class='blog-post' style='text-align: justify;'>
						<p >Tgl : ".$data[$_GET['index']]['tanggal']."</p>
						<p>".$data[$_GET['index']]['isi']."</p>
						<p>Oleh : ".$data[$_GET['index']]['penulis']."</p>
					</div>
				</div>
			";
			?>
			
		</div>
	</main>
</body>
</html>