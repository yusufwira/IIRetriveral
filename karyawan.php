<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Logika Komputer</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Sistem Penunjang Keputasan Pemilihan Karyawan</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"> </ul>                      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="kriteria.php">Kriteria</a></li>
        <li><a href="createKaryawan.php">Input Data Karyawan</a></li> 
        <li><a href="inputAlternatif.php">Input Bobot Karyawan</a></li>               
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>


<center>
  <h2> Daftar Nama Karyawan</h2><br>
<div class="col-sm-3"></div>
<div class="col-sm-6"> 
  <table class="table table-condensed">
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>Action</th>
      </tr>
  
  <?php  
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "spk_project";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 

      $sql = "SELECT * FROM Karyawan";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
        
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
              echo "<td>".$row['nama']."</td>";
              echo "<td>".$row['alamat']."</td>";
              echo "<td>".$row['umur']."</td>";
              echo "<td>".$row['jenis_kelamin']."</td>";
              echo "<td><a href='deleteKaryawan.php?id=".$row['id']."'> Delete </a>|<a href=''> Delete </a></td>";
            echo "</tr>";
          }
      } else {
          echo "0 results";
      }
      $conn->close();
       

   ?>
   </table>
</div>
</center>


</body>
</html>