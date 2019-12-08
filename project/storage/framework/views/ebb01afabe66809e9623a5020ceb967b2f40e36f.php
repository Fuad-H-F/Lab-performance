<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
	<h1>Welcome home! <?php echo e(session('uname')); ?></h1>
	<img src="<?php echo e(asset('/upload/blockchain.jpg')); ?>" width="200px" height="300px">
	<br>
	<a href="<?php echo e(route('employee.add')); ?>">Add User</a> |
	<a href="<?php echo e(route('employee.index')); ?> ">User List</a> |
	<a href="<?php echo e(route('logout.index')); ?>">logout</a>
	
</body>
</html>