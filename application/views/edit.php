<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<div class="container">
		<h1>Edit</h1>
		<form method="post" action="<?php echo base_url('blog/update') ?>">
			<div class="form-group">
				<input type="hidden" name="id" value="<?php echo $post->id; ?>">
				<label for="title">Title</label>
				<input type="text" class="form-control" name="title" value="<?php echo $post->title; ?>" id="title" placeholder="Title">
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<textarea class="form-control" rows="10" name="content" id="content"><?php echo $post->content; ?></textarea>
			</div>
				<button type="submit" class="btn btn-danger">Update</button>
		</form>
	</div>
</body>
</html>