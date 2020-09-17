<?php 
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
	<script src="dist/js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-info default-color">
		<a class="navbar-brand" href="#">Portal</a>
      	<form class="form-inline my-2 my-lg-0 ml-auto">
        	<input class="form-control" type="search" id="myInput" placeholder="Cari ..." aria-label="Search">
      	</form>
    </nav>
    <div class="container" id="myDIV" style="margin-top: 20px;">
        <div class="row" style="border: 0px solid blue;">
        	<?php for ($i=0; $i <= count($data) ; $i++):?>
            <?php foreach ($data as $key => $value):?>
            <div class="col-12 col-sm-8 col-lg-3" style="margin-bottom: 10px;">
                <div class="list-group">
                    <div class="card" style="border: none;">
                        <center>
                            <img class="card-img-top" src="<?php echo $value['gambar']?>" style="height: 100px; width: 100px; margin-top: 10px;" alt="No image">
                        </center>
                        <div class="card-body">
                            <a href="berita.php?index=<?php echo $i++ ?>">
                            	<p class="card-text" align="center"><?php echo $value['judul'];?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        	<?php endfor; ?>
        </div>
    </div>

    <script type="text/javascript">
	$(document).ready(function(){
		$("#myInput").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#myDIV *").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});	
    </script>

</body>
</html>