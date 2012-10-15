<!DOCTYPE html>
<head>
<title>WeatheredWatcher :: Admin</title>
<?= link_tag('stylesheets/admin.css'); ?>
</head>

<body>

	<div class="wrapper">
	
		<h1 class="logo">WeatheredWatcher Admin</h1>
		<p class="txt_right">Logged in as <strong><?=$_SESSION['login']['username'];?></strong>  <span class="v_line"> | </span> <a href="logout"> Logout</a></p>
