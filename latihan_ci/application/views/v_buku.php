<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Buku</title>
	<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
</head>
<body>

<div class="container">
	<h1>Data <small>Buku!</small></h1>
	<table class="table table-bordered table-striped" id="mydata">
		<thead>
			<tr>
				<td>id buku</td>
				<td>judul</td>
				<td>pengarang</td>
				<td>penerbit</td>
				<td>stok</td>
				<td>th_terbit</td>
				<td>id_kategori</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($data->result_array() as $i):
					$id_buku=$i['id_buku'];
					$judul=$i['judul'];
					$pengarang=$i['pengarang'];
					$penerbit=$i['penerbit'];
					$stok=$i['stok'];
					$th_terbit=$i['th_terbit'];
					$id_kategori=$i['id_kategori']
			?>
			<tr>
				<td><?php echo $id_buku;?></td>
				<td><?php echo $judul;?></td>
				<td><?php echo $pengarang;?></td>
				<td><?php echo $penerbit;?></td>
				<td><?php echo $stok;?></td>
				<td><?php echo $th_terbit;?></td>
				<td><?php echo $id_kategori;?></td>
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