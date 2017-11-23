<?php defined ('BASEPATH') OR exit ('tidak boleh langsung');?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> tambah artikel berhasil</title>
	<link rel="stylesheet" href="">
	<style type=text/css>
		label
		{
			width:100px;
			display: inline-block ;
			margin-bottom: 10px;
		}

		input[type=text]
		{
			width:280px;
		}

		textarea
		{

			width:280px;
			height:100px;
			vertical-align: text-top;
			/*margin-left: 140px;*/
		}

		input[type=submit]
		{
			margin-top: 10px;
			margin-left: 100px;
		}

		
	</style>
</head>
<body>
	<h1>Ini adaalah halaman tambah artikel yang sudah berhasil</h1>
	<p>anda telah sukses menambah artikel, berikut ini adalah artikel yang anda tambahkan</p>
	<a href="<?php echo base_url('front/tambah_artikel'); ?>">tambah artikel lagi</a> | <a haref="#">Daftar Artikel</a>
</body>
</html>