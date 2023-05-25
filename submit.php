<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    
    <link rel="stylesheet" href="css/submit.css">
    <script src="js/goback.js"></script>
</head>
<body>
  <h2>Submitted Data</h2>
  <table>
    <tr>
      <th>Type</th>
      <th>Device Name</th>
      <th>Serial Number</th>
      <th>OS</th>
      <th>OS Build</th>
      <th>User</th>
    </tr>
    <tr>
      <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $type = $_POST['type'];
          $deviceName = $_POST['device-name'];
          $serialNumber = $_POST['serial-number'];
          $os = $_POST['os'];
          $osBuild = $_POST['os-build'];
          $user = $_POST['user'];
          
          echo "<td>$type</td>";
          echo "<td>$deviceName</td>";
          echo "<td>$serialNumber</td>";
          echo "<td>$os</td>";
          echo "<td>$osBuild</td>";
          echo "<td>$user</td>";
        } else {
          echo "<td colspan='6'>No data submitted.</td>";
        }
      ?>
    </tr>
  </table>
  <br>
  <button onclick="goBack()">Go Back</button>
</body>
</html>
