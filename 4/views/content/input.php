<html>

<head>
  <title>Form Input Data</title>
</head>

<body>
  <form action="../controllers/create.php" method="post">
    <table>
      <tr>
        <td>Nama</td>
        <td>
          <input type="text" name="nama" size="20">
        </td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>
          <textarea cols="20" rows="5" name="alamat"></textarea>
        </td>
      </tr>
      <tr>
        <td>Usia</td>
        <td>
          <input type="number" name="usia" size="3">
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
