<!DOCTYPE html>
<html lang="en">
<!-- app/views/login.blade.php -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel PH Login form</title>

</head>

<body id="page-top" class="index">


<section class="container">
    <div class="login">
      <h1>Login to Members Section</h1>
      <p>
        <?php echo $errors->first('email'); ?>
        <?php echo $errors->first('password'); ?>
       </p>  
        
      <form method="POST" action="login">
          <input type="hidden" name="_method" value="POST">
        <p><input type="text" name="email" value="" placeholder="Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <!-- TODO
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        -->
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>
    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="goryofolio.appspot.com">Click here to reset it</a>.</p>
    </div>
  </section>
    
    
</body>

</html>