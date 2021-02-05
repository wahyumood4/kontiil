<?php
if($_POST['kirim']){
	$admin = 'gaibwahyu24@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$nama	= htmlentities($_POST['nama']);
	$email	= htmlentities($_POST['email']);
	$judul	= htmlentities($_POST['judul']);
	$pesan	= htmlentities($_POST['pesan']);
	$oh = "$email dari $nama pesan $pesan";
	$pengirim	= 'Dari: '.$nama.' <'.$email.'>';
	
	if(mail($admin, $judul, $oh, $pengirim).mail($admin, $judul, $oh, $pengirim)){
		header("Location: profil1.php");
	}else{
		header("Location: profil1.php");
	}
}else{
	header("Location: profil1.php");
}
?>