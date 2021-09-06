<html>
<head>
	<title>Form Edit Data</title>
</head>
<body>
 
	<?php
	include '../../config/connect.php';
	$id = $_GET['id'];
	$data = mysqli_query($db,"select * from author where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="../../controllers/author/update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input
              type="text"
              name="nama"
              value="<?php echo $d['nama']; ?>"
            >
					</td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td>
						<input
              type="text"
              name="nama"
              value="<?php echo $d['nama']; ?>"
            >
					</td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td>
						<input
              type="text"
              name="nama"
              value="<?php echo $d['nama']; ?>"
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