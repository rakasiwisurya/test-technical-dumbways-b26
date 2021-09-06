<?php
  include "config/connect.php";

  $query=mysqli_query($db,"select * from author");
  $jumlah=mysqli_num_rows($query);
  echo "Jumlah data ada : ".$jumlah;
?>

<table border="1">
  <tr>
    <th>Nomor</th>
    <th>Author ID</th>
    <th>Name</th>
  </tr>
 
<?php
$c=0;
while($row=mysqli_fetch_array($query)){
?>

  <tr>
    <td>
      <?php echo $c=$c+1;?>
    </td>
    <td>
      <?php echo $row['id'];?>
    </td>
    <td>
      <?php echo $row['name'];?>
    </td>
    
    <td>
      <a
        href="views/author/edit.php?id=<?php echo $row['id']; ?>"
      >
        Edit
      </a>
      <a
        href="controllers/author/delete.php?id=<?php echo $row['id']; ?>"
        onclick="return confirm('Apakah anda yakin ingin dihapus?')"
      >
        Delete
      </a>      
    </td>
  </tr>

<?php
}
?>

</table>

<br />

<a href="views/author/input.php">Input data form</a>

<?php
  $query=mysqli_query($db,"select * from content");
  $jumlah=mysqli_num_rows($query);
  echo "Jumlah data ada : ".$jumlah;
?>

<table border="1">
  <tr>
    <th>Nomor</th>
    <th>ID Content</th>
    <th>Video Link</th>
    <th>Type</th>
    <th>ID Course</th>
  </tr>
 
<?php
$c=0;
while($row=mysqli_fetch_array($query)){
?>

  <tr>
    <td>
      <?php echo $c=$c+1;?>
    </td>
    <td>
      <?php echo $row['id'];?>
    </td>
    <td>
      <?php echo $row['name'];?>
    </td>
    <td>
      <?php echo $row['video_link'];?>
    </td>
    <td>
      <?php echo $row['type'];?>
    </td>
    <td>
      <?php echo $row['id_course'];?>
    </td>
    
    <td>
      <a
        href="views/content/edit.php?id=<?php echo $row['id']; ?>"
      >
        Edit
      </a>
      <a
        href="controllers/content/delete.php?id=<?php echo $row['id']; ?>"
        onclick="return confirm('Apakah anda yakin ingin dihapus?')"
      >
        Delete
      </a>      
    </td>
  </tr>

<?php
}
?>

</table>

<br />

<a href="views/content/input.php">Input data form</a>

<?php
  $query=mysqli_query($db,"select * from course");
  $jumlah=mysqli_num_rows($query);
  echo "Jumlah data ada : ".$jumlah;
?>

<table border="1">
  <tr>
    <th>Nomor</th>
    <th>ID Course</th>
    <th>Name</th>
    <th>Thumbnail</th>
    <th>ID Author</th>
    <th>Duration</th>
    <th>Description</th>
  </tr>
 
<?php
$c=0;
while($row=mysqli_fetch_array($query)){
?>

  <tr>
    <td>
      <?php echo $c=$c+1;?>
    </td>
    <td>
      <?php echo $row['id'];?>
    </td>
    <td>
      <?php echo $row['name'];?>
    </td>
    <td>
      <?php echo $row['thumbnail'];?>
    </td>
    <td>
      <?php echo $row['id_author'];?>
    </td>
    <td>
      <?php echo $row['duration'];?>
    </td>
    <td>
      <?php echo $row['description'];?>
    </td>
    
    <td>
      <a
        href="views/course/edit.php?id=<?php echo $row['id']; ?>"
      >
        Edit
      </a>
      <a
        href="controllers/course/delete.php?id=<?php echo $row['id']; ?>"
        onclick="return confirm('Apakah anda yakin ingin dihapus?')"
      >
        Delete
      </a>      
    </td>
  </tr>

<?php
}
?>

</table>

<br />

<a href="views/course/input.php">Input data form</a>
