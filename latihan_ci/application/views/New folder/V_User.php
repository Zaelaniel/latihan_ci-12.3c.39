<body>

<div class="container">
	<h1>Data <small>Member!</small></h1>
	<table class="table table-bordered table-striped" id="mydata">
		<thead>
			<tr>
				<td>first name</td>
				<td>last name</td>
				<td>email</td>
				<td>password</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($data->result_array() as $i):
					$firs_name=$i['first_name'];
					$last_name=$i['last_name'];
					$email=$i['email'];
					$password=$i['password'];
			?>
			<tr>
				<td><?php echo $first_name;?></td>
				<td><?php echo $last_name;?></td>
				<td><?php echo $email;?></td>
				<td><?php echo $password;?></td>
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