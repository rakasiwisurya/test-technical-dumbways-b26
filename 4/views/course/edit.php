<html>
<head>
	<title>Form Edit Data</title>
</head>
<body>
 
	<?php
	include '../../config/connect.php';
	$id = $_GET['id'];
	$data = mysqli_query($db,"select * from course where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="../../controllers/course/update.php">
			<table>
				<tr>			
					<td>ID Course</td>
					<td>
						<input
              type="text"
              name="id"
              value="<?php echo $d['id']; ?>"
            >
					</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>
						<input
              type="text"
              name="name"
              value="<?php echo $d['name']; ?>"
            >
					</td>
				</tr>
				<tr>
					<td>Video Link</td>
					<td>
						<input
              type="text"
              name="video_link"
              value="<?php echo $d['video_link']; ?>"
            >
					</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>
						<input
              type="text"
              name="type"
              value="<?php echo $d['type']; ?>"
            >
					</td>
				</tr>
				<tr>
					<td>ID Course</td>
					<td>
						<input
              type="text"
              name="id_course"
              value="<?php echo $d['id_course']; ?>"
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