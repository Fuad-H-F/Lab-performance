<!DOCTYPE html>
<html>
<head>
	<title>userlist</title>
</head>
<body>
	<h1>User List</h1>

	<a href="<?php echo e(route('home.index')); ?>">Back</a> |
	<a href="<?php echo e(route('logout.index')); ?>">logout</a>

<br><br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>Type</td>
			<td>PASSWORD</td>
			<td>ACTION</td>
		</tr>


	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $std): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($std->userId); ?></td>
			<td><?php echo e($std->username); ?></td>
			<td><?php echo e($std->type); ?></td>
			<td><?php echo e($std->password); ?></td>
			<td>
				<a href="<?php echo e(route('student.edit', $std->userId)); ?>"> EDIT </a> | 
				<a href="<?php echo e(route('student.delete', $std->userId)); ?>"> DELETE </a> | 
				<a href="<?php echo e(route('student.details', $std->userId)); ?>"> Details </a>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>
</body>
</html>