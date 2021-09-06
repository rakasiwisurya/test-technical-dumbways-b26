<html>
<head>
	<title>Form Edit Data</title>
</head>
<body>
 
	<?php
	include '../config/connect.php';
	$id = $_GET['id'];
	$data = mysqli_query($db,"select * from biodata where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="../controllers/update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input
              type="hidden"
              name="id"
              value="<?php echo $d['id']; ?>"
            >
						<input
              type="text"
              name="nama"
              size="20"
              value="<?php echo $d['nama']; ?>"
            >
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>
            <textarea
              cols="20"
              rows="5"
              name="alamat"
            ><?php echo $d['alamat']; ?></textarea>
          </td>
				</tr>
				<tr>
					<td>Usia</td>
					<td>
            <input
              type="number"
              name="usia"
              size="3"
              value="<?php echo $d['usia']; ?>"
            >
          </td>
				</tr>
				<tr>
					<td></td>
					<td>
            <input type="submit" value="Simpan">
          </td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

  <br/><br/>
	<a href="../index.php">Kembali</a>
 
</body>
</html>