 <!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Podsumowanie zamówienia</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	
	
	<?php
		$paczkow = $_POST['ilepaczkow'];
		$eklerkow = $_POST['ileeklerkow'];	
		$lacznie = $paczkow*0.99+$eklerkow*1.99;
echo<<<END

	<h2>Podsumowanie zamowienia<h2>
	<table>
		<tr>
			<td>Pączków (0,99PLN/szt.)</td>
			<td align="right">$paczkow</td>
		</tr>
		<tr>
			<td>Eklerków (1,99PLN/szt.)</td>
			<td align="right">$eklerkow</td>
		</tr>
		<tr>
			<td>Wartość zamówienia:</td>
			<td>$lacznie</td>
		</tr>		
	</table>
END;
	?>
	</br>
	<a href="index.html" alt="Modyfikuj zamówienie">Przelicz ponownie</a>
</body>
</html>