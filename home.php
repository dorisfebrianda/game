<form action="register.php" method="post">
  <div class="container">
    <h1>Register</h1>
	<link href="style/coba.css" rel="stylesheet" type="text/css">
    <p>Please fill in this form to create an account.</p>
    <hr>
	
	<label for="username"><b>username</b></label>
    <input type="text" placeholder="username" name="username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

