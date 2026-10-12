<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" id="signup" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form action="register.php" method="post">
            <div class="input-group">
                 <i class="fas fa-user"></i>
                 <input type="text" placeholder="First Name" name="fname" id="fname" required>
                 <label for="fname">First Name</label>
            </div>
            <div class="input-group">
                 <i class="fas fa-user"></i>
                 <input type="text" placeholder="Last Name" name="lname" id="lname" required>
                 <label for="lname">Last Name</label>
            </div>
            <div class="input-group">
                 <i class="fas fa-envelope"></i>
                 <input type="email" placeholder="Email" name="email" id="email" required>
                 <label for="email">Email</label>
            </div>
            <div class="input-group">
                 <i class="fas fa-lock"></i>
                 <input type="password" placeholder="password" name="password" id="password" required>
                 <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signup">
            <p class="or">
                -------or-------
            </p>
            <div class="icons">
                <i class="fab fa-google" class="one"></i>
                <i class="fab fa-facebook" class="two"></i>
            </div>
            <div class="links">
                <p>Already Have Account ?</p>
                <button id="signInButton">Sign In</button>
            </div>
        </form>
    </div>

    <!-- login -->
     <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form action="register.php" method="post">
            <div class="input-group">
                 <i class="fas fa-envelope"></i>
                 <input type="email" placeholder="Email" name="email" id="email" required>
                 <label for="email">Email</label>
            </div>
            <div class="input-group">
                 <i class="fas fa-lock"></i>
                 <input type="password" placeholder="password" name="password" id="password" required>
                 <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
            <p class="or">
                -------or-------
            </p>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>
            <div class="links">
                <p>Don't Have An Account ?</p>
                <button id="signUpButton">Sign Up</button>
            </div>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>