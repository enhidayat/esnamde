<?php
include "koneksi.php";
$koneksi = buka_koneksi();

$nama= $_POST['nama']; //get the nama value from form

$cari= "SELECT * FROM mahasiswa WHERE nama LIKE '%$nama%' "; //query to get the search result
//$result = mysqli_query($koneksi,$q); //execute the query $q
$result = $koneksi->query($cari);
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>NPM</td>
<td>Nama Mahasiswa</td>
<td>Gender</td>
<td>Tanggal Lahir</td>
<td>Tempat Lahir</td>
<td>Agama</td>
<td>Jurusan</td>
<td>Telepon</td>
<td>Email</td>
<td>Alamat</td>
</tr>";
//while ($row = mysqli_fetch_array($result)) {  //fetch the result from query into an array
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo "
<tr>
<td>".$row['npm']."</td>
<td>".$row['nama']."</td>
<td>".$row['gender']."</td>
<td>".$row['tgl_lahir']."</td>
<td>".$row['tempat_lahir']."</td>
<td>".$row['agama']."</td>
<td>".$row['jurusan']."</td>
<td>".$row['telepon']."</td>
<td>".$row['email']."</td>
<td>".$row['alamat']."</td>


</tr>";
//}
}
}else {
  echo "
    <tr>
    <td colspan='10' align='center'>Tidak ada mahasiswa yang bernama $nama </td>
    </tr>";

}
echo "</table>";
?>
