<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body{
        background: black;
    }
    .btn {
        background-color: #000;
        border: .5px solid crimson;
        border-radius: 10px;
        color: #fff;
        padding: 8px;
        box-shadow: 0 0 30px 0 crimson,
        0 0 30px 0 crimson,
        0 0 10px 0 crimson inset;
        text-decoration: none;
    }
    .text{
        color: white;
        text-align: center;
    }
</style>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 class="text">This is Home page</h1>
<br>
<br><br><br><br>


       <div style="text-align: center"> <a href="{{route('user.login')}}"  class="btn">Login</a> ____________<a href="{{route('user.register')}}" class="btn">Registration</a></div>
<br>
<br>
<br>
        <div style="text-align: center"></div>
</body>
</html>



