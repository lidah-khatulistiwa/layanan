<?php
include "../setting/conf.php";
$jenis_layanan= $_POST['jenis_layanan']; //get the nama value from form
$q = "SELECT * from layanan where jenis_layanan like '%$jenis_layanan%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>No</td>
<td>Nama Mahasiswa</td>
<td>Alamat</td>
</tr>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tr>
<td>".$data['id_layanan']."</td>
<td>".$data['jenis_layanan']."</td>
<td>".$data['kat_layanan']."</td>
</tr>";
}
echo "</table>";
?>