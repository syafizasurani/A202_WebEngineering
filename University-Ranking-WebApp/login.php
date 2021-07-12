<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In-Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/log.css">

</head>
<body>
    <div class="form_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <form class="form_horizontal" action="loginvalidate.php" method="post">
                        <div class="form_icon"><i class="fa fa-user-circle"></i></div>
                        <h3 class="title">Sign In</h3>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                            <input class="form-control" type="text" name="username" placeholder="username">
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" type="password" name="password" placeholder="password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
                            <label class="form-check-label" for="checkbox">Remember Me</label>
                        </div>
                        <button class="btn signin"><a href="/university-ranking-admin-webapp/">Login</a></button>
                        <ul class="form-options">
                            <li><a href="forgotpassword.html">Forgot Password?</a></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>