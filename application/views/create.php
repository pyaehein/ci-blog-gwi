<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<div class="container">
		<h1>Create</h1>
		<form method="post" action="<?php echo base_url('blog/store') ?>">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control" name="title" id="title" placeholder="Title">
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<textarea class="form-control" rows="10" name="content" id="content"></textarea>
			</div>
				<button type="submit" class="btn btn-success">Save</button>
		</form>
	</div>
</body>
</html>