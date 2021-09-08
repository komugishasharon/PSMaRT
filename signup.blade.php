<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link href="{{ URL::asset('/css/signup.css') }}" rel="stylesheet" />
</head>
<body>
    <form action="action_page.php" style="border:1px solid #ccc; align-content:center">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="name"><b>First Name</b></label>
          <input type="text" placeholder="Enter firstname" name="firstname" required>
         
          <label for="name"><b>Last Name</b></label>
          <input type="text" placeholder="Enter lastname" name="lastname" required>

          <label for="phone"><b>Contact</b></label>
          <br>
          <input type="tel" placeholder="Enter contact" name="contact" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required>
      
          <br>
          <br>
          
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
      
          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
</body>
</html>