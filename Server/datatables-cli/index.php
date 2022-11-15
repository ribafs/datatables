<?php 
	require_once './config/db-config.php'; 
	require_once './controller/ClientesController.php';
	$db = new DBController();
	$conn = $db->connect();
	$dCtrl  =	new ClientesController($conn);
	$clientes = $dCtrl->index();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Datatable Implementation in PHP</title>

	<!-- Bootstrap 4 CSS  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  

</head>
<body>

	<div class="container mt-5">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-12 m-auto">
				<table class="table table-bordered table-hovered table-striped" id="clientesTable">
					<thead>
						<th> ID </th>
						<th> Nome </th>
						<th> E-mail </th>
					</thead>

					<tbody>

					<?php 
						foreach($clientes as $cliente) : ?>

							<tr>
								<td> <?php echo $cliente['id']; ?> </td>
								<td> <?php echo $cliente['nome']; ?> </td>
								<td> <?php echo $cliente['email']; ?> </td>
							</tr>
						<?php endforeach; ?>	
					</tbody>	
				</table>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<!-- CDN jQuery Datatable -->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

</body>
</html>

<script>

	$(document).ready(function() {
    	$('#clientesTable').DataTable();
	});

</script>
