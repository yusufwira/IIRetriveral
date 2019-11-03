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
        <li><a href="#">Input Data Karyawan</a></li>                
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>

<h1 style="text-align: center; margin-bottom: 20px">Input Data Karyawan</h1>

  <div class="col-sm-3"> </div>
<div class="col-sm-6" style="background-color: #dbdbdb; border-radius: 10px"> 
<form action="createKaryawan.php" method="POST">
<div class="form-group" style="margin-top: 20px">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama">
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Umur</label>
    <input type="Number" class="form-control" name="umur" style="width: 100px">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Jenis kelamin</label>
   <select class="form-control" style="width: 100px" name="jeniskelamin"><option>Pria</option><option>Wanita</option></select>
  </div>
  <center><button type="submit" name="submit" class="btn btn-primary" style="margin-bottom: 10px; width: 170px"><B>SUBMIT</B></button>
</center>
</form>
</div>



</body>
</html>


<?php 
if (isset($_POST['submit'])) {
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "spk_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO karyawan (nama, email, alamat, umur, jenis_kelamin)
VALUES ('".$_POST['nama']."','".$_POST['email']."', '".$_POST['alamat']."',".$_POST['umur'].",'".$_POST['jeniskelamin']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
 ?>