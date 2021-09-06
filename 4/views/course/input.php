<html>

<head>
  <title>Form Input Data</title>
</head>

<body>
  <form action="../../controllers/course/create.php" method="post">
    <table>
      <tr>
        <td>ID Course</td>
        <td>
          <input type="text" name="nama" size="20">
        </td>
      </tr>
      <tr>
        <td>Name</td>
        <td>
          <input type="number" name="usia" size="3">
        </td>
      </tr>
      <tr>
        <td>Thumbnail</td>
        <td>
          <input type="number" name="usia" size="3">
        </td>
      </tr>
      <tr>
        <td>ID Author</td>
        <td>
          <input type="text" name="usia" size="3">
        </td>
      </tr>
      <tr>
        <td>Duration</td>
        <td>
          <input type="number" name="usia" size="3">
        </td>
      </tr>
      <tr>
        <td>Description</td>
        <td>
          <textarea cols="20" rows="5" name="alamat"></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="proses" value="Simpan">
        </td>
        <td>
          <input type="reset" value="Batal">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
