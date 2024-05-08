<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <!-- For Registration/Sign up -->
    <div class="container" id="signUp" style="display: none;">
                    <h1 class="form-title">Register</h1>
                    
                    <form method="post" action="register.php">
                <!-- For First Name -->
                <div class="input-group">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="fName" id="fName" placeholder="Enter your First name" required>
                    <label for="fName"> First Name</label>
                </div>
                
                <!-- For Last Name -->
                <div class="input-group">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="lName" id="lName" placeholder="Enter your last name" required>
                <label for="lName">Last Name</label>
                </div>

                <!-- For Email Address -->
                <div class="input-group">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                <label for="email">Email Address</label>
                </div>

                <!-- For Phone Number  -->
                <div class="input-group">
                    <i class="fa-solid fa-phone"></i>
                    <input type="number" name="pnumber" id="pnumber" placeholder="Enter your phone number" required>
                <label for="pnumber">Phone Number</label>
                </div>

                <!-- For Hobby  -->
                <div class="input-group">
                    <i class="fa-solid fa-volleyball"></i>
                    <input type="text" name="hobby" id="hobby" placeholder="Enter your hobby">
                <label for="hobby">Hobby</label>
                </div>

                 <!-- For Password  -->
                 <div class="input-group">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password"  id="password" placeholder="Enter your Password">
                    <i class="ri-eye-line" id="show-pass"></i>
                <label for="password">Password</label>
                </div>

                <!-- For CONFRIM Password  -->
                <div class="input-group">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password"  id="cnfPassword" placeholder="Confrim your Password">
                    <i class="ri-eye-line" id="show-pass2"></i>
                <label for="cnfPassword">Confrim Password</label>
            </div>
            <!-- cnfPassword & Password  is same or not -->
            <p id="message"> </p> 

                 <!-- For signup button  -->
                <input type="submit" onclick="checkPassword()" class="btn" value="Sign Up" name="signUp">

    </form>
    <p class="or">----------or----------</p>

    <!-- For other signup option -->
    <div class="icons">
        <i class="fa-brands fa-google"></i>
        <i class="fa-brands fa-facebook"></i>
    </div>

    <!-- For already Have account -->
    <div class="links">
        <p>Already have an Account ?</p>
        <button id="signInButton">Sign in</button>
    </div>
   </div>

   <!-- For Login/Sign in -->
     <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">

            <!-- For Email Address -->
            <div class="input-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            <label for="email">Email Address</label>
            </div>

           <!-- For Password  -->
             <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password"  id="password" placeholder="Enter your Password" class="signInPass"> 
                <i class="ri-eye-line" id="show-pass3"></i>
            <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Forget Password </a>
            </p>

            <!-- For signin button  -->
            <input type="submit" class="btn" value="Sign In" name="signIn">

</form>
<p class="or">----------or----------</p>

<!-- For other signin option -->
<div class="icons">
    <i class="fa-brands fa-google"></i>
    <i class="fa-brands fa-facebook"></i>
</div>

<!-- For do not Have account -->
<div class="links">
    <p>Don't have an Account ?</p>
    <button id="signUpButton">Sign Up</button>
</div>
</div>
<script src="script.js"></script>

</body>
</html>
