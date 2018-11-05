<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "jurnal9"; //isi sesuai nama database anda
	var $con = "";
	function __construct(){
		$this->con = mysqli_connect($this->host,$this->uname,$this->pass,$this->db); //buatlah koneksi secara OOP
	}

	function tampil_data(){
		//lengkapilah method tampil data
		//query select user
		$data = mysqli_query($this->con,"SELECT * FROM user");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia,$film,$tujuan){
		//buatlah method input
		//query inset into user
		mysqli_query($this->con,"INSERT INTO user VALUES('$id','$nama','$alamat','$usia','$film','$tujuan')");
	}

	function hapus($id){
		//buatlah method hapus
		//query delete from id where id ='$id'
		mysqli_query($this->con,"DELETE FROM user WHERE ID = '$id'");
	}

	function edit($id){
		//lengkapilah method edit
		//query select from user where id ='$id'
		$data = mysqli_query($this->con,"SELECT * FROM user WHERE ID='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
		
	}

	function update($id,$nama,$alamat,$usia,$film,$tujuan){
		//buatlah method update
		//query update user set blablabla where id='$id'
		mysqli_query($this->con,"UPDATE user SET ID='$id',Nama = '$nama',Alamat = '$alamat',Usia = '$usia',Film_Fav = '$film',Wisata_Fav = '$tujuan' WHERE ID = '$id'");

	}

} 

?>