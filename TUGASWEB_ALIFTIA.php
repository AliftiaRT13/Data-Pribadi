<?php
	const nama ="Aliftia Radianti Taniasari";
    $umur="21";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pribadi</title>
</head>
<body>
 <table border = "5">
	<tr>
		<th> Nama </th>
		<td> : </td>
		<td> <?php echo nama ?> </td>
	</tr>
	<tr>
		<th> $umur </th>
		<td> : </td>
		<td> <?php echo $umur ?> </td>
	</tr>
		<th> Tinggi Badan </th>
		<td> : </td>
		<td> 175cm </td>
	</tr>
		<th> Berat Badan </th>
		<td> : </td>
		<td> 59kg </td>
	</tr>
</table> 
</body>
</html>