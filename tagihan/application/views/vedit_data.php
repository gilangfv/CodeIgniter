<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	</head>
	<body>
		<right><a href="<?= site_url('Tagihan/tampil') ?>" class="btn btn-info"><< KEMBALI</a></right>
		<center><h1>UBAH DATA tagihan</h1></center>
		<table class="table table-bordered">
			<form action="<?= site_url('Tagihan/edit_data_action') ?>" method="post">
				<thead>
					<tr>
                    <input type="text" name="id" required hidden value="<?= $dat->id ?>" />
						<th>telpon</th>
						<th>:</th>
						<th><input type="text" name="telpon"  required value="<?= $dat->telpon?>" /></th>
					</tr>
					<tr>
						<th>Nama</th>
						<th>:</th>
						<th><input type="text" name="nama" required value="<?= $dat->nama?>"/></th>
					</tr>
					<tr>
						<th>harga</th>
						<th>:</th>
						<th><input type="text" name="harga" required value="<?= $dat->harga?>"/></th>
					</tr>
					<tr>
						<th colspan="3"><center><input type="submit" value="EDIT DATA" onclick="return confirm('yakin');"/></center></th>
					</tr>
				</thead>
			</form>
		</table>
	</body>
</html>
