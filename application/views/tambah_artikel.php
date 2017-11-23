<?php defined ('BASEPATH') OR exit ('tidak boleh langsung');?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ini adalah halaman tambah artikel</title>
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
	<h1>Ini adaalah halaman tambah artikel</h1>
	<form action="http://localhost/codeigniter/index.php/Front/tambah_artikel/kirim" method="POST">
		<label>nama pengarang</label><input type="text" name="author" ><br>
		<label>judul</label><input type="text" name="title" ><br>
		<label>Tanggal</label><input type="date" name="date" ><br>
		<label>isi artikel</label><textarea type="text" name="content" ></textarea><br>
		<input type="submit" name="submit" value="tambah artikel">


	</form>
</body>
</html>