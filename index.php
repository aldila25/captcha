<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="kotak">		
 
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "salah"){
				echo "<p>Captcha tidak sesuai.</p>";
			}
		}
		?>
 
		<p>Isi Captcha Dengan Benar</p>		
		<form action="periksa_captcha.php" method="post">
			<table align="center">						
				<tr>
					<td>Captcha</td>				
					<td><img src="captcha.php" alt="gambar" /> </td>
				</tr>
				<td>Isikan captcha </td>
				<td><input name="nilaiCaptcha" value=""/></td>
				<tr>
					<td><input type ="submit" value="Cek Captcha"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>