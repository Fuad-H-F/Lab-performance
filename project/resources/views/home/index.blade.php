<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
	<h1>Welcome home! {{ session('uname') }}</h1>
	<img src="{{asset('/upload/blockchain.jpg')}}" width="200px" height="300px">
	<br>
	<a href="{{route('employee.add')}}">Add User</a> |
	<a href="{{ route('employee.index') }} ">User List</a> |
	<a href="{{ route('logout.index') }}">logout</a>
	
</body>
</html>