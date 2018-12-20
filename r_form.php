<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Belanja Sakan</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<style type="text/css">
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td
{
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
.fa-input {font-family: FontAwesome}
</style>
</head>  
<body><!-- menu_atas.php A0 -->

<!-- Jadual nama_pengguna ########################################### -->
<?php
$method = 'http://jpmuar07-pc/projek-github/a_rakan/shazlinaziz/mobileRegister/register.php';
?>
<div class="container">
	<div class="form-group"><div class="col-sm-9">
		<div class="input-group input-group-lg">
			<span class="input-group-addon">method=<?php echo $method ?></span>
		</div>
	</div></div>
</div><br>
<form method="POST" action="<?php echo $method ?>" class="form-horizontal">
<div class="form-group">
	<label for="inputTajuk" class="col-sm-2 control-label">namaPengguna</label>
	<div class="col-sm-6 ">
		<div class="input-group input-group">
			<input type="text" name="name" value="user1" class="form-control">
		<span class="input-group-addon">user1</span>
		</div><!-- / "input-group input-group" -->
	</div><!-- / class="col-sm-6 " -->
</div><!-- / class="form-group" -->
<div class="form-group">
	<label for="inputTajuk" class="col-sm-2 control-label">email</label>
	<div class="col-sm-6 ">
		<div class="input-group input-group">
			<input type="text" name="email" value="user1@duduk.mana" class="form-control">
		<span class="input-group-addon">user1@duduk.mana</span>
		</div><!-- / "input-group input-group" -->
	</div><!-- / class="col-sm-6 " -->
</div><!-- / class="form-group" -->
<div class="form-group">
	<label for="inputTajuk" class="col-sm-2 control-label">kataLaluan</label>
	<div class="col-sm-6 ">
		<input type="password" name="password"  placeholder="Taip kata laluan" class="form-control">
	</div><!-- / class="col-sm-6 " -->
</div><!-- / class="form-group" -->
<div class="form-group">
	<div class="col-sm-8">
		<!--label for="inputSubmit" class="col-sm-3 control-label">nama_pengguna</label -->
		<div class="input-group input-group-lg">
		<span class="input-group-addon">
			<input type="submit" name="Hantar" value="Hantar" class="btn btn-primary btn-large">
			<!-- input type="reset" name="Reset" value="Reset" class="btn btn-default btn-large" -->
		</span>
		</div>
	</div>
</div></form>
<!-- / class="form-horizontal" -->
<!-- Jadual nama_pengguna ########################################### -->