<?php 
include 'database.php';
$db = new database(); //isi dengan deklarasi method
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ //panggil method edit dari class database
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['ID'] ?>">
			<input type="text" name="nama" value="<?php echo $d['Nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['Alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['Usia'] ?>"></td>
	</tr>
	<tr><td colspan="2"><hr></td></tr>
	<tr>
		<td>
			Film Favorite
			<?php $film = explode(',',$d['Film_Fav']); ?>
		</td>
		<td>
			Horror<input type="checkbox" name="genre[]" value="Horror" <?php if(in_array('Horror',$film)){echo "checked=checked";}?>><br>
			Action<input type="checkbox" name="genre[]" value="Action" <?php if(in_array('Action',$film)){echo "checked=checked";}?>><br>
			Drama<input type="checkbox" name="genre[]" value="Drama" <?php if(in_array('Drama',$film)){echo "checked=checked";}?>><br>
			Thriler<input type="checkbox" name="genre[]" value="Thriler" <?php if(in_array('Thriler',$film)){echo "checked=checked";}?>><br>
			Animation<input type="checkbox" name="genre[]" value="Animation" <?php if(in_array('Animation',$film)){echo "checked=checked";}?>>
		</td>
			
	</tr>
	<tr><td colspan="2"><hr></td></tr>
	<tr>
		<td>
			Wisata Favorite
			<?php $tujuan = explode(',',$d['Wisata_Fav']); ?>
		</td>
		</td>
		<td>
			Bali<input type="checkbox" name="tujuan[]" value="Bali" <?php if(in_array('Bali',$tujuan)){echo "checked=checked";}?>><br>
			Raja Ampat<input type="checkbox" name="tujuan[]" value="Raja Ampat" <?php if(in_array('Raja Ampat',$tujuan)){echo "checked=checked";}?>><br>
			Pulau Derawan<input type="checkbox" name="tujuan[]" value="Pulau Derawan" <?php if(in_array('Pulau Derawan',$tujuan)){echo "checked=checked";}?>><br>
			Bangka Belitung<input type="checkbox" name="tujuan[]" value="Bangka Belitung" <?php if(in_array('Pulau Samosir',$tujuan)){echo "checked=checked";}?>><br>
			Labuan Bajo<input type="checkbox" name="tujuan[]" value="Labuan Bajo" <?php if(in_array('Labuan Cermin',$tujuan)){echo "checked=checked";}?>>
		</td>
		</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
