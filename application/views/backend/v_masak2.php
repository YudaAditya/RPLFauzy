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
								<th>No.</th>
								<th>Menu</th>
								<th>Jumlah</th>
								<th>Catatan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Martabak</td>
								<td>1</td>
								<td></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Es Timun</td>
								<td>1</td>
								<td>Jangan Pake Gula</td>
							</tr>
						<tbody>

				</table><br><br>

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
