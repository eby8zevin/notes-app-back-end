<!DOCTYPE html>
<html lang="en">
<head>
<title>Web Service</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <center><font color="red" size="100"><b>M A I N T E N A N C E</b></font></center>
  <div align="center">
    <h3>My Project in PHP.ID<br>jancukers.com</h3>
      <p><?php
        date_default_timezone_set('Asia/Jakarta');
        echo date('d F Y H:i:s'); 
      ?></p>
    <table border="1" width="700px">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>No</td>
          <td>NIM</td>
          <td>Nama</td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>