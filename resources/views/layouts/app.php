<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= \App\Framework\Utilities\Config::read('app.title') ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Mitr:400,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-free-5.10.1-web/css/all.css">
    <link rel="stylesheet" href="<?= $this->asset('/css/mystyle.css') ?>">
    <link rel="stylesheet" href="<?= $this->asset('/css/new.css') ?>">

</head>
<body>
    <header>
    <div class="navbar fixed-top flex">
        <img class="logoImg" src="image/KU_Logo.png">
        <div>
            <a class="nav-link nav-link-ltr">ข่าวสาร</a>
            <a class="nav-link nav-link-ltr">ประชาสัมพันธ์งาน</a>
            <div class="btn-group">
                <button class="btn btn-primary" onclick="showLoginPopup()"><i class="fas fa-user-lock"></i> Sign
                    In</button>
                <button class="btn btn-secondary"><i class="fas fa-user-plus"></i> Sign Up</button>
            </div>
        </div>
    </div>
    
    <!-- Login Popup -->
    <div id="loginPopup" class="login-popup float-right">
        <h1>Login</h1>
        <form class="was-validated">
            <div>
                <input id="userInput" type="text" class="form-control" placeholder="username" required="">
                <h1></h1>
            </div>
            <div>
                <input id="pwdInput" type="password" class="form-control" placeholder="password" required="">
                <div class="invalid-feedback">
                    Passwords must be at least 8 characters.
                </div>
                <h1></h1>
            </div>
            </form>
            <div class="btn-group" style="width: 100%">
            <button type="button" class="btn btn-success">Login</button>
            <button type="button" class="btn btn-danger" onclick="closeLoginPopup()">Close</button>
            </div>
        </div>
    </header>

    <?=$this->section('content')?>
    
    <footer>
        <div class="footer position-fixed">
            <h6>Made By Salmon</h6>
        </div>
    </footer>
</body>
</html>