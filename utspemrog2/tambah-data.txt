<h3> Tambah Data </h3>

<form action="" method="post">
	<table>
		<tr>
			<td width="130">Jumlah Positif</td>
			<td> <input type="text" name="jumlah_positif"></td>
		</tr>
		<tr>
			<td width="130">Jumlah Dirawat</td>
			<td> <input type="text" name="jumlah_dirawat"></td>
		</tr>
		<tr>
			<td width="130">Jumlah Sembuh</td>
			<td> <input type="text" name="jumlah_sembuh"></td>
		</tr>
		<tr>
			<td width="130">Jumlah Meninggal</td>
			<td> <input type="text" name="jumlah_meninggal"></td>
		</tr>
		<tr>
			<td width="130">Nama Operator</td>
			<td> <input type="text" name="nama_operator"></td>
		</tr>
		<tr>
			<td width="130">NIM Mahasiswa</td>
			<td> <input type="text" name="nim_mhs"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan" name="proses"></td>
		</tr>
	</table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
	mysqli_query($koneksi, "insert into pasiencovid19 set
		jumlah_positif = '$_POST[jumlah_positif]',
		jumlah_dirawat = '$_POST[jumlah_dirawat]',
		jumlah_sembuh = '$_POST[jumlah_sembuh]',
		jumlah_meninggal = '$_POST[jumlah_meninggal]',
		nama_operator = '$_POST[nama_operator]',
		nim_mhs = '$_POST[nim_mhs]'");
	echo "Data yang ditambahkan telah tersimpan";
}
?>