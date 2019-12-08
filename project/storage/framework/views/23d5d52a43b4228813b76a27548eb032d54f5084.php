<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<body>
	<h1>Add Employee</h1>

	<a href="<?php echo e(route('home.index')); ?>">Back</a> |
	<a href="<?php echo e(route('logout.index')); ?>">logout</a>

<br><br>

<form method="post" enctype="multipart/form-data" >
	<?php echo e(csrf_field()); ?>

	<table border="0">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo e(old('name')); ?>"></td>
		</tr>
		<tr>
			<td>Contact no</td>
			<td><input type="text" name="contactno" value="<?php echo e(old('contactno')); ?>"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="<?php echo e(old('username')); ?>"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="<?php echo e(old('password')); ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php echo e($err); ?> <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>