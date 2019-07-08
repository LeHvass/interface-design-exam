<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="login">
  <div class="container">
    <aside>

    </aside>
    <main>
      <form action="index.php">
        <img class="logo center mb-25" src="images/booking-for-business-logo.png">
        <div class="field">
          <input class="input mb-25" name="username" id="username" type="text" placeholder=" ">
          <label class="label" for="username">Username</label>
        </div>
        <div class="field">
          <input class="input mb-25" name="password" id="password" type="password" placeholder=" ">
          <label class="label" for="password">Password</label>
        </div>
        <div class="btns-inline mb-25">
          <button type="submit" class="btn btn-secondary">Login</button>
          <button class="btn btn-primary">Create Account</button>
        </div>
        <p class="divider mb-25"><span>or</span></p>
        <div class="btns-inline mb-25">
          <a class="btn btn-primary btn-outline btn-small"><img class="btn-image" src="images/logo-microsoft.png">
            Login with Office 365</a>
          <a class="btn btn-primary btn-outline btn-small"><img class="btn-image" src="images/logo-google.png">
            Login with Google Suite</a>
        </div>
        <div class="center">
          <a class="link-small" href="#">Forgot password?</a>
        </div>
      </form>
      <span class="language">
        <img class="flag" src="images/flag-da.png"> &#9660
      </span>
      <span class="copyright">
        &copy; Booking.com
      </span>
    </main>
  </div>
</body>

</html>