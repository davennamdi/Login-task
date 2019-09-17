<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="font.css">
    <title>Login Page</title>
  </head>

  <body>
    <div id="error"></div>
    <main>
      <section class="signup">
        <h1>Sign Up</h1>
        <form action="submit.php">
          <div class="input">
            <input type="text" name="name" id="name" placeholder="Name" required>

            <input type="text" name="username" id="username" placeholder="Username" required>
            
            <input type="email" name="email" id="email" placeholder="Email Address" required>

            <input type="tel" name="tel" id="phone" placeholder="Phone Number" required>
            
            <input type="password" name="password" id="password" placeholder="Password" required>
            
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required>
          </div>

          <div class="checkbox">
            <input type="checkbox" name="checkbox" id="check">
            <label>I Agree To The Terms & Conditions</label>
          </div>
          <input type="submit" value="Sign Up" class="button" id="submit">
        </form>
      </section> <!--end of signup section-->

      <section class="login"> <!--beginnig of login section-->
        <h1>Login</h1>
        <form action="submit.php" method="POST">
          <input type="text" name="username" id="login-username" placeholder="Username">
          <?php if (isset($username_err)) { ?>
                <p><?php echo $username_err?></p>
            <?php }?>
        
          
          <input type="password" name="password" id="login-password" placeholder="Password" autocomplete="true">
          <?php if (isset($password_err)) { ?>
                <p><?php echo $password_err?></p>
            <?php }?>

          <input type="submit" value="Login" class="button" id="login">
        </form>
      </section>
    </main>
    
  </body>
</html>
