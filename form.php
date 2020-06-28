<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body bgcolor="pink">
	<center><h1>Form Pendaftaran</h1></center>
 
	<?php 
	if(isset($_GET['nama'])){
		if($_GET['nama'] == "kosong"){
			echo "<h4 style='color:red'>Nama Belum Di Masukkan !</h4>";
		}
	}
	if(isset($_GET['email'])){
		if($_GET['email'] == "kosong"){
			echo "<h4 style='color:red'>Email Belum Di Masukkan !</h4>";
		}
	}
	if(isset($_GET['password'])){
		if($_GET['password'] == "kosong"){
			echo "<h4 style='color:red'>password Belum Di Masukkan !</h4>";
		}
	}
	?>

	<form action="cek.php" method="post">
		<table align="center">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr><tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr><tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" value="Submit"></td>
			</tr>						
		</table>
	</form>
 </center>
</body>
</html>
