<!doctype html>
<html>
	<head>
		<title>Juru Masak</title>
		<!-- Load JQuery dari CDN -->
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

		<!-- Load DataTables dan Bootstrap dari CDN -->
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
	</head>
	<body>
		<?php $this->load->view('backend/masak_menu')?>
		<!-- dalam div row harus ada col yang maksimum nilainya 12 -->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">

				<table id="myTable" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<!--<th>Invoice ID</th>-->
							<th>Nomor Meja</th>
            <!--   <th>Date</th>
             <th>Due Date</th>-->
              <th>Status</th>
              <th>Detail</th>
						</tr>
					</thead>
          <tbody>
            <tr>
              <td>4</td>
              <td>paid</td>
              <td>
								<button type="button" name="button"><?php echo anchor('admin/masak2','More'); ?></button>

                	<!--<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
									<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
									<div class="modal-dialog" role="document">
										<div class="modal-content modal-info">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h3>Pembayaran</h3>
											</div>
											<div class="modal-body">
												<div class="more-grids">


															<table cellspacing='0'>
																<thead>
																	<tr>
																		<th>No.</th>
																		<th>Makanan</th>
																		<th>Jumlah</th>
																		<th>Minuman</th>
																		<th>Jumlah</th>
																		<th>Promo</th>
																		<th>Jumlah</th>
																		<th>Total harga</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>3</td>
																		<td>Nasi Goreng</td>
																		<td>1</td>
																		<td>Teh Hijau</td>
																		<td>1</td>
																		<td></td>
																		<td></td>
																		<td>23000</td>
																	</tr>
																<tbody>

														</table><br><br>
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Bayar</button>

												</div>
											</div>
										</div>
									</div>
								</div>	-->
              </td>
            </tr>
						<tr>
							<td>5</td>
              <td>unpaid</td>
              <td>
								<button type="button" name="button" disabled><?php echo anchor('admin/masak2','More'); ?></button>
              </td>
						</tr>
						<tr>
							<td>2</td>
              <td>unpaid</td>
              <td>
								<button type="button" name="button" disabled><?php echo anchor('admin/masak2','More'); ?></button>
              </td>
						</tr>
          </tbody>

      <!--connect
        	<tbody>
						<?php foreach($invoices as $invoice) : ?>
						<tr>
							<td><?=$invoice->id?></td>
							<td><?=$invoice->no_meja?></td>
							<td><?=$invoice->date?></td>
							<td><?=$invoice->due_date?></td>
							<td><?=$invoice->status?></td>
                            <td>
                                <?=anchor(	'admin/invoices/detail/' . $invoice->id,
											'Details',
											['class'=>'btn btn-default btn-sm'])
								?>
                            </td>
						</tr>
						<?php endforeach; ?>
					</tbody>
          -->

				</table>
			</div>
			<div class="col-md-1"></div>
		</div>


		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>
