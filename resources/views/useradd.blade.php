<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Add</title>
</head>
<body>
<h1>User Add</h1>
<form action="/useradd" method="post">
    @csrf
    <label for="name">User Name</label>
    <input type="name" name="name" id="name"><p></p>
    <label for="email">Email</label>
    <input type="email" name="email" id="email"><p></p>
    <label for="password">Password</label>
    <input type="password" name="password" id="password"><p></p>
    <input type="submit" value="Submit">
</form>
</body>
</html>

