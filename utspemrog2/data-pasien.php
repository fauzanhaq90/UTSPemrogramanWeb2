<center>
	<h1> Pilih Nama Wilayah :</h1>
	<form action="" method="">
		<select name='wilayah' onchange='this.form.submit()'>
			<option value='<?php echo @$_GET['wilayah']; ?>'><?php echo @$_GET['wilayah']; ?></option>
			<option value='DKI Jakarta'>DKI Jakarta</option>
			<option value='Jawa Barat'>Jawa Barat</option>
			<option value='Banten'>Banten</option>
			<option value='Jawa Tengah'>Jawa Tengah</option>
		</select>
	</form>

<h3><center> Data Pemantauan Covid19 Wilayah DKI Jakarta </h3></center>
<?php
$tgl=date('l, d-m-Y h:i:s');
echo $tgl;
?>

<table border="1">
	<tr>
		<th>No</th>
		<th>Jumlah Positif</th>
		<th>Jumlah Dirawat</th>
		<th>Jumlah Sembuh</th>
		<th>Jumlah Meninggal</th>
		<th>Nama Operator</th>
		<th>Nim Mahasiswa</th>
	</tr>

	<?php
	include "koneksi.php";
	$no=1;
	$ambildata = mysqli_query($koneksi, "select * from pasiencovid19");
	while ($tampil = mysqli_fetch_array($ambildata)){
		echo "
		<tr>
		<td>$no</td>
		<td>$tampil[jumlah_positif]</td>
		<td>$tampil[jumlah_dirawat]</td>
		<td>$tampil[jumlah_sembuh]</td>
		<td>$tampil[jumlah_meninggal]</td>
		<td>$tampil[nama_operator]</td>
		<td>$tampil[nim_mhs]</td>
		</tr>";
		$no++;
	}



	?>
</table>