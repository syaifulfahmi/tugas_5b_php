<?php

$kata1 = "Ayo";
$kata2 = "Belajar";
$kalimat1 = $kata1." ".$kata2;
$kata3 = "Bersama ";
$kata4 = "Niomic";
$kalimat2 = $kata3." ".$kata4;

echo "<h1>Operator String</h1>";
echo "<table border='1'>
		<tr>
			<td>Input True</td>
			<td>Input 2</td>
			<td>Hasil</td> 
		</tr>
		<tr>
			<td>".$kata1." </td>
			<td>".$kata2." </td>
			<td>".$kalimat1."</td>
		</tr>
		<tr>
			<td>".$kata3." </td>
			<td>".$kata4." </td>
			<td>".$kalimat2."</td>
		</tr>		
	</table>";

echo "Gabungan : ".$kalimat1." ".$kalimat2." :)" ;
?>