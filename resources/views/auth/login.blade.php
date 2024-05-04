<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>CodePen - Sign up / Login Form</title>
    <link rel="stylesheet" href="./css/login_style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">
        <form action="{{route('register.store')}}" method="POST">
            @csrf
            <div>
                <label for="chk" aria-hidden="true">Ro'yxatdan o'tish</label>
                <input type="text" name="name" placeholder="Ismingiz" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Parol" required="">
                <input type="password" name="password_confirmation" placeholder="Parol" required="">
                <button type="submit">Jo'natish</button>
            </div>
        </form>
    </div>

    <div class="login">
        <form action="{{route('authenticate')}}" method="POST">
            @csrf
            <label for="chk" aria-hidden="true">Kirish</label>
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password" required="">
            <button type="submit">Login</button>
        </form>
    </div>
</div>
</body>
</html>
<!-- partial -->

</body>
</html>
