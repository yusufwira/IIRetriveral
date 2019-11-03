<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Logika Komputer</title>

    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style type="text/css">
	.size{
		width: 75px;
	}
	th{
		width: 150px;
	}
</style>

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
        <li><a href="#">Kriteria</a></li>
        <li><a href="#">Input Data Karyawan</a></li>
        <li><a href="inputAlternatif.php">Input Bobot Karyawan</a></li>             
      </ul>
    </div><!-- /.navbar-collapse -->
     </div><!-- /.container-fluid -->
  	</nav>

  	<div class="panel panel-default">
	  <div class="panel-body">
	    <b>Pemberian Bobot pada kriteria</b>
	  </div>
	  <div class="panel-footer">Form ini bertujuan untu memilah seberapa penting kriteria tersebut</div>
	</div>
	<form >
		 	
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 ">
			
		
		<table class="table table-condensed">
			<tr>
				<th></th>
				<th>Pengalaman Kerja</th>
				<th>Rekomendasi</th>
				<th>Wawancara</th>
				<th>Penampilan</th>
				<th>Keadaan Fisik</th>
			</tr>
			<tr>
				<td>Pengalaman Kerja</td>
				<td><select  id="pk1" class="form-control size" name="pk1" disabled><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select id="pk2" class="form-control size" name="pk2"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select id="pk3" class="form-control size" name="pk3"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select id="pk4" class="form-control size" name="pk4"><option value="1">1</option><option value="2">2</option><option value="3" name="pk1">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select id="pk5" class="form-control size" name="pk5"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>						
			</tr>
			<tr>
				<td>Rekomendasi</td>
				<td><select disabled class="form-control size" id="r1" name="r1"> <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option> </select></td>
				<td><select disabled id="r2" class="form-control size" name="r2"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select id="r3" class="form-control size" name="r3"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select id="r4" class="form-control size" name="r4"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select id="r5" class="form-control size" name="r5"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>						
			</tr>
			<tr>
				<td>Wawancara</td>
				<td><select disabled class="form-control size" id="w1" name="w1"> <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option> </select></td>
				<td><select disabled id="w2" class="form-control size" name="w2"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select disabled id="w3" class="form-control size" name="w3"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select id="w4" class="form-control size" name="w4"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select id="w5" class="form-control size" name="w5"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
									
			</tr>
			<tr>
				<td>Penampilan</td>
				<td><select disabled class="form-control size" id="p1" name="p1"> <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option> </select></td>
				<td><select disabled id="p2" class="form-control size" name="p2"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select disabled id="p3" class="form-control size" name="p3"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select disabled id="p4" class="form-control size" name="p4"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select id="p5" class="form-control size" name="p5"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>						
			</tr>
			<tr>
				<td>Keadaan Fisik</td>
				<td><select disabled class="form-control size" id="ks1" name="ks1"> <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option> </select></td>
				<td><select disabled id="ks2" class="form-control size" name="ks2"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select disabled id="ks3" class="form-control size" name="ks3"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select disabled id="ks4" class="form-control size" name="ks4"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>
				<td><select disabled id="ks5" class="form-control size" name="ks5"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="0.5">1/2</option><option value="0.3333333333333333">1/3</option></select></td>	
			</tr>
			
			
		

		</table>
		</div>
	</div>
	<center><input type="button" name="submit" id="submit" class="btn btn-primary btn-lg" value="Submit"></center>	
	</center>
	</form>
	
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
	  $("#pk2").change(function(){
	  	var is = parseFloat($('#pk2').val());
	  	var hasil = 1/(is);
	  	$('#r1').val(hasil);
	   // alert(hasil);
	  });
	  $("#pk3").change(function(){
	  	var is = parseFloat($('#pk3').val());
	  	var hasil = 1/(is);
	  	$('#w1').val(hasil);	  
	  });
	  $("#pk4").change(function(){
	  	var is = parseFloat($('#pk4').val());
	  	var hasil = 1/(is);
	  	$('#p1').val(hasil);	  
	  });
	  $("#pk5").change(function(){
	  	var is = parseFloat($('#pk5').val());
	  	var hasil = 1/(is);
	  	$('#ks1').val(hasil);	  
	  });
	  $("#r3").change(function(){
	  	var is = parseFloat($('#r3').val());
	  	var hasil = 1/(is);
	  	$('#w2').val(hasil);	  
	  });
	   $("#r4").change(function(){
	  	var is = parseFloat($('#r4').val());
	  	var hasil = 1/(is);
	  	$('#p2').val(hasil);	  
	  });
	   $("#r5").change(function(){
	  	var is = parseFloat($('#r5').val());
	  	var hasil = 1/(is);
	  	$('#ks2').val(hasil);	  
	  });
	   $("#w4").change(function(){
	  	var is = parseFloat($('#w4').val());
	  	var hasil = 1/(is);
	  	$('#p3').val(hasil);	  
	  });
	   $("#w5").change(function(){
	   	//alert('head');
	  	var is = parseFloat($('#w5').val());
	  	var hasil = 1/(is);
	  	$('#ks3').val(hasil);
	  	//alert(hasil);  
	  });
	   $("#p5").change(function(){
	   	//alert('head');
	  	var is = parseFloat($('#p5').val());
	  	var hasil = 1/(is);
	  	$('#ks4').val(hasil);
	  	//alert(hasil);  
	  });

	   $("#submit").click(function(){
	    var pk1 = $("#pk1").val();
	    var pk2 = $("#pk2").val();
	    var pk3 = $("#pk3").val();
	    var pk4 = $("#pk4").val();
	    var pk5 = $("#pk5").val();

	    var r1 = $("#r1").val();
	    var r2 = $("#r2").val();
	    var r3 = $("#r3").val();
	    var r4 = $("#r4").val();
	    var r5 = $("#r5").val();

	    var w1 = $("#w1").val();
	    var w2 = $("#w2").val();
	    var w3 = $("#w3").val();
	    var w4 = $("#w4").val();
	    var w5 = $("#w5").val();

	    var p1 = $("#p1").val();
	    var p2 = $("#p2").val();
	    var p3 = $("#p3").val();
	    var p4 = $("#p4").val();
	    var p5 = $("#p5").val();

	    var ks1 = $("#ks1").val();
	    var ks2 = $("#ks2").val();
	    var ks3 = $("#ks3").val();
	    var ks4 = $("#ks4").val();
	    var ks5 = $("#ks5").val();
	    $.post("kriteriasave.php", {
	    	pk1: pk1,
	    	pk2: pk2,
	    	pk3: pk3,
	    	pk4: pk4,
	    	pk5: pk5,
	    	r1: r1,
	    	r2: r2,
	    	r3: r3,
	    	r4: r4,
	    	r5: r5,
	    	w1: w1,
	    	w2: w2,
	    	w3: w3,
	    	w4: w4,
	    	w5: w5,
	    	p1: p1,
	    	p2: p2,
	    	p3: p3,
	    	p4: p4,
	    	p5: p5,
	    	ks1: ks1,
	    	ks2: ks2,
	    	ks3: ks3,
	    	ks4: ks4,
	    	ks5: ks5
	    	
	    },
	     function(result){
	      // $("span").html(result);
	      alert("Data Berhasil Di Input");
	    });
	  });
	
	});
</script>