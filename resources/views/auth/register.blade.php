<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('register')}}" method="POST">
        @csrf 
        username 
        <input type="text" name="username" id="">
        <br>
        name 
        <input type="text" name="name" id="">
        <br>
        email 
        <input type="email" name="email" id="">
        <br>
        password 
        <input type="password" name="password" id="">
        <br>
        <button type="submit">register</button>
    </form>
    
</body>
</html>