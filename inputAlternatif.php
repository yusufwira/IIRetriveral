<?php 

 if(isset($_POST['submit'])){
     print_r($_POST['pengalaman_kerja'])."<br>";
     print_r($_POST['rekomendasi'])."<br>";
     print_r($_POST['wawancara'])."<br>";
     print_r($_POST['penampilan'])."<br>";
     print_r($_POST['keadaanFisik'])."<br>";  
    } 
 



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

 ?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
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



<div class="row">
 <div class="col-sm-6">

  <form action="inputAlternatif.php" method="POST">
    <input type="text" name="coba">
    <h2>Pengalaman Kerja</h2>
    <table class="table table-condensed">
      <?php 
        $sql = "SELECT * FROM Karyawan";
        $result = $conn->query($sql);
        $ar = array();
        echo "<tr><td></td>";
         while($row = $result->fetch_assoc()) {
          echo "<td>" .$row["nama"]. "</td>";
          $ar[] = $row['nama'];
        }
        echo "</tr>
        ";
        
         $result = $conn->query($sql);
         $jumlah = 1;
         while($row = $result->fetch_assoc()) {
         
           echo "<tr><td>".$row["nama"]. "</td>";
         
          for ($i=0; $i < sizeof($ar); $i++) { 

               echo '<td><select  id="'.$jumlah.'" class="form-control size" name=pengalaman_kerja[] ><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>';

               $jumlah++;
          }
         } 
          echo "</tr>";
     ?>
    </table>

    <h2>Rekomendasi</h2>
    <table class="table table-condensed">
      <?php 
        $sql = "SELECT * FROM Karyawan";
        $result = $conn->query($sql);
        $ar = array();
        echo "<tr><td></td>";
         while($row = $result->fetch_assoc()) {
          echo "<td>" .$row["nama"]. "</td>";
          $ar[] = $row['nama'];
        }
        echo "</tr>
        ";
        
         $result = $conn->query($sql);
         $jumlah = 1;
         while($row = $result->fetch_assoc()) {
         
           echo "<tr><td>".$row["nama"]. "</td>";
         
          for ($i=0; $i < sizeof($ar); $i++) { 

               echo '<td><select  id="'.$jumlah.'" class="form-control size" name=rekomendasi[] ><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>';

               $jumlah++;
          }
         } 
          echo "</tr>";
     ?>
    </table>

     </table>

    <h2>Wawancara</h2>
    <table class="table table-condensed">
      <?php 
        $sql = "SELECT * FROM Karyawan";
        $result = $conn->query($sql);
        $ar = array();
        echo "<tr><td></td>";
         while($row = $result->fetch_assoc()) {
          echo "<td>" .$row["nama"]. "</td>";
          $ar[] = $row['nama'];
        }
        echo "</tr>
        ";
        
         $result = $conn->query($sql);
         $jumlah = 1;
         while($row = $result->fetch_assoc()) {
         
           echo "<tr><td>".$row["nama"]. "</td>";
         
          for ($i=0; $i < sizeof($ar); $i++) { 

               echo '<td><select  id="'.$jumlah.'" class="form-control size" name=wawancara[] ><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>';

               $jumlah++;
          }
         } 
          echo "</tr>";
     ?>
    </table>

    <h2>Penampilan</h2>
    <table class="table table-condensed">
      <?php 
        $sql = "SELECT * FROM Karyawan";
        $result = $conn->query($sql);
        $ar = array();
        echo "<tr><td></td>";
         while($row = $result->fetch_assoc()) {
          echo "<td>" .$row["nama"]. "</td>";
          $ar[] = $row['nama'];
        }
        echo "</tr>
        ";
        
         $result = $conn->query($sql);
         $jumlah = 1;
         while($row = $result->fetch_assoc()) {
         
           echo "<tr><td>".$row["nama"]. "</td>";
         
          for ($i=0; $i < sizeof($ar); $i++) { 

               echo '<td><select  id="'.$jumlah.'" class="form-control size" name=penampilan[] ><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>';

               $jumlah++;
          }
         } 
          echo "</tr>";
     ?>
    </table>

    <h2>Keadaan Fisik</h2>
    <table class="table table-condensed">
      <?php 
        $sql = "SELECT * FROM Karyawan";
        $result = $conn->query($sql);
        $ar = array();
        echo "<tr><td></td>";
         while($row = $result->fetch_assoc()) {
          echo "<td>" .$row["nama"]. "</td>";
          $ar[] = $row['nama'];
        }
        echo "</tr>
        ";
        
         $result = $conn->query($sql);
         $jumlah = 1;
         while($row = $result->fetch_assoc()) {
         
           echo "<tr><td>".$row["nama"]. "</td>";
         
          for ($i=0; $i < sizeof($ar); $i++) { 

               echo '<td><select  id="'.$jumlah.'" class="form-control size" name=keadaanFisik[] ><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>';

               $jumlah++;
          }
         } 
          echo "</tr>";
     ?>
    </table>
    <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg" value="Submit">
  </form>
  </div>
  </div>

</html>


