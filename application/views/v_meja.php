<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HTO</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php $this->load->view('layout/top_menu') ?>

		<!-- Tampilkan semua produk -->
		<div class="row">

			<?php
				foreach($meja as $t){
					$pilihan = $t->no_meja;
			?>

			<!--meja1-->
					<div class="col-sm-3 col-md-3">
							<div class="thumbnail">
									<div class="caption">
											<div class="caption">
                        <h2>Meja <?php echo $t->no_meja ?></h2>
													<p>status : <?php echo $t->status ?></p>
													<form class="" action='Meja/tambah_meja' method="post" >
														<input class="btn btn-primary" type="submit" name="terisi" value= <?php echo $t->no_meja ?>></input>
													</form>
											</div>
									</div>
							</div>
					</div>
			<?php } ?>


		</div>

	</body>
</html>
