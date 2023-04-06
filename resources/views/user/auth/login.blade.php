    <!DOCTYPE html>
    <html>
    <head>
        <title>User Login</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="{{'/'}}admin/auth/css/style.css">
    </head>
    <body>
    <div class="main-block">
        <h1>User Login Form</h1>
        <h1 class="text">{{Session::get('message')}}</h1>
        <form action="{{''}}" method="POST">
            @csrf
            <br>
            <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
            <input type="text" name="email" id="name" placeholder="Email" required/>
            <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
            <input type="password" name="password" id="name" placeholder="Password" required/>
            <br>
            <div class="btn-block">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
    </body>
    </html>




