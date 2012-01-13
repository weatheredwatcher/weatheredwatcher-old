<!DOCTYPE html>
<head>
<title>WeatheredWatcher :: Admin</title>
<?= link_tag('stylesheets/admin.css'); ?>
</head>

<body>

	<div class="wrapper">
	
		<h1 class="logo">WeatheredWatcher Admin</h1>
		
		<?php
		
		if($this->easyauth->connected == true):
		
			echo ("<p class='txt_right'>Logged in as <strong>$this->easyauth->user</strong>  <span class='v_line'> | </span> <a href='#'> Logout</a></p>");
		
		else:
		
			echo ('<p class="txt_right">Register <span class="v_line"> | </span> <a href="#"> Login</a></p>');
		
		endif;
		?>
		
		
		
