<h1>CRUD OOP PHP</h1>
<h3>Tambah Data User</h3>

<form action="proses.php?aksi=tambah" method="post">
	
<table border="0">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr><td colspan="2"><hr></td></tr>
	<tr>
		<td>
			Film Favorite
		</td>
		<td>
			Horror<input type="checkbox" name="genre[]" value="Horror"><br>
			Action<input type="checkbox" name="genre[]" value="Action"><br>
			Drama<input type="checkbox" name="genre[]" value="Drama"><br>
			Thriler<input type="checkbox" name="genre[]" value="Thriler"><br>
			Animation<input type="checkbox" name="genre[]" value="Animation">
		</td>
			
	</tr>
	<tr><td colspan="2"><hr></td></tr>
	<tr>
		<td>
			Wisata Favorite
		</td>
		<td>
			Bali<input type="checkbox" name="tujuan[]" value="Bali"><br>
			Raja Ampat<input type="checkbox" name="tujuan[]" value="Raja Ampat"><br>
			Pulau Derawan<input type="checkbox" name="tujuan[]" value="Pulau Derawan"><br>
			Bangka Belitung<input type="checkbox" name="tujuan[]" value="Bangka Belitung" ><br>
			Labuan Bajo<input type="checkbox" name="tujuan[]" value="Labuan Bajo">
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
