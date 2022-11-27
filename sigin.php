<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="signin.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>

      <div class="wrapper">

         <div class="title-text">
            <div style="font-size:35px; font-weight:bold">
               Login & Signup Form
            </div>
         </div>

         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup" >
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>


            <div class="form-inner">
               <form action="#" class="login">
                <div class="field">
                    <input type="text" placeholder="Username" required>
                 </div>
                  <div class="field">
                     <input type="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Don't have an account yet? <a href="">Signup now</a>
                  </div>
               </form>

               <form action="#" class="signup">
                  <div class="field">
                     <input type="text" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Confirm password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">
                  </div>
                  <div class="login-link">
                    Already have an account? <a href="">Login</a>
                 </div>
               </form>

            </div>
         </div>

      </div>
      <script>
        //Login & Sign in function and animation
         const loginText = document.querySelector(" .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         const loginLink = document.querySelector("form .login-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
         loginLink.onclick = (()=>{
           loginBtn.click();
           return false;
         });
      </script>
   </body>
</html>