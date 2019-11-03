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

	

$sql = "UPDATE kriteria SET penglaman_kerja = ".$_POST['pk1'].", rekomendasi = ".$_POST['pk2'].", wawancara = ".$_POST['pk3'].", penampilan = ".$_POST['pk4'].", keadaan_fisik = ".$_POST['pk5']." WHERE id=1";
$conn->query($sql);

$sql2 = "UPDATE kriteria SET penglaman_kerja = ".$_POST['r1'].", rekomendasi = ".$_POST['r2'].", wawancara = ".$_POST['r3'].", penampilan = ".$_POST['r4'].", keadaan_fisik = ".$_POST['r5']." WHERE id=2";
$conn->query($sql2);

$sql3 = "UPDATE kriteria SET penglaman_kerja = ".$_POST['w1'].", rekomendasi = ".$_POST['w2'].", wawancara = ".$_POST['w3'].", penampilan = ".$_POST['w4'].", keadaan_fisik = ".$_POST['w5']." WHERE id=3";
$conn->query($sql3);

$sql4 = "UPDATE kriteria SET penglaman_kerja = ".$_POST['p1'].", rekomendasi = ".$_POST['p2'].", wawancara = ".$_POST['p3'].", penampilan = ".$_POST['p4'].", keadaan_fisik = ".$_POST['p5']." WHERE id=4";
$conn->query($sql4);

$sql5 = "UPDATE kriteria SET penglaman_kerja = ".$_POST['ks1'].", rekomendasi = ".$_POST['ks2'].", wawancara = ".$_POST['ks3'].", penampilan = ".$_POST['ks4'].", keadaan_fisik = ".$_POST['ks5']." WHERE id=5";
$conn->query($sql5);
$conn->close();
	
	
	
	
 ?>