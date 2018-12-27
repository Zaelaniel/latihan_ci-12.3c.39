<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Anggota</title>
	<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
</head>
<body>

<div class="container">
	<h1>Data <small>Anggota!</small></h1>
	<table class="table table-bordered table-striped" id="mydata">
		<thead>
			<tr>
				<td>id anggota</td>
				<td>nim</td>
				<td>nama</td>
				<td>no_hp</td>
				<td>email</td>
				<td>alamat</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($data->result_array() as $i):
					$id_anggota=$i['id_anggota'];
					$nim=$i['nim'];
					$nama=$i['nama'];
					$no_hp=$i['no_hp'];
					$email=$i['email'];
					$alamat=$i['alamat'];
			?>
			<tr>
				<td><?php echo $id_anggota;?></td>
				<td><?php echo $nim;?></td>
				<td><?php echo $nama;?></td>
				<td><?php echo $no_hp;?></td>
				<td><?php echo $email;?></td>
				<td><?php echo $alamat;?></td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	
</div>

<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
<script>
	$(document).ready(function(){
		$('#mydata').DataTable();
	});
</script>
</body>
</html>