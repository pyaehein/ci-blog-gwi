<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container">
	<h1>Show Post</h1>
	<hr>
	<h3><?php echo $post->title; ?></h3>
	<p><?php echo $post->content; ?></p>
</div>
</body>
</html>