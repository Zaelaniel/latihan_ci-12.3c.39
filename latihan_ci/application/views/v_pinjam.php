<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Pinjam</title>
	<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
</head>
<body>

<div class="container">
	<h1>Data <small>Peminjaman Buku!</small></h1>
	<table class="table table-bordered table-striped" id="mydata">
		<thead>
			<tr>
				<td>id transaksi</td>
				<td>id anggota</td>
				<td>id buku</td>
				<td>tanggal_pinjam</td>
				<td>tanggal_kembali</td>
				<td>jml_pinjam</td>
				<td>denda</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($data->result_array() as $i):
					$id_transaksi=$i['id_transaksi'];
					$id_anggota=$i['id_anggota'];
					$id_buku=$i['id_buku'];
					$tanggal_pinjam=$i['tanggal_pinjam'];
					$tanggal_kembali=$i['tanggal_kembali'];
					$jml_pinjam=$i['jml_pinjam'];
					$denda=$i['denda'];
			?>
			<tr>
				<td><?php echo $id_transaksi;?></td>
				<td><?php echo $id_anggota;?></td>
				<td><?php echo $id_buku;?></td>
				<td><?php echo $tanggal_pinjam;?></td>
				<td><?php echo $tanggal_kembali;?></td>
				<td><?php echo $jml_pinjam;?></td>
				<td><?php echo $denda;?></td>
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