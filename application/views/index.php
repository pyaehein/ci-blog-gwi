<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container">
	<h1>Posts</h1>
	<?php if(count($posts) > 0): ?>
	<table class="table table-hover">
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Actions</th>
		</tr>
		<?php foreach ($posts as $post): ?>
		<tr>
			<td> 
				<?php echo $post->id; ?> 
			</td>
			<td> 
				<?php echo $post->title; ?> 
			</td>
			<td>
				<a href="<?php echo base_url(); ?>blog/show/<?php echo $post->id; ?>">View</a> | 
				<a href="<?php echo base_url(); ?>blog/edit/<?php echo $post->id; ?>">Edit</a> | 
				<a href="<?php echo base_url(); ?>blog/delete/<?php echo $post->id; ?>">Delete</a>
			</td>
		</tr>
		<?php endforeach ?>	
	</table>
	<?php endif ?>
	<a href="<?php echo base_url('blog/create'); ?>" class="btn btn-primary">Create new post</a>
</div>
</body>
</html>