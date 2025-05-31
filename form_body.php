
<!-- HTML BODY CODE FOR LOGIN FORM BROKEN INTO SUBFOLDERS-->


<!-- Login Form -->
  <div class="container mt-5">
    <div class="row align-right">
      <div class="col-md-6 col-lg-4 login-container">
        <h4 class="mb-3 text-center">Login</h4>

           <div id="message"></div>
              <!-- Message div for showing errors or success -->
    
        <form id="loginForm" method="POST" action="inc/login.php">
        
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
          </div>
         
<div class="mb-3">
  <div class="mb-2">
    <a href="#" class="small text-decoration-none me-3">Forgot password?</a>
    <a href="signup.php" class="small text-decoration-none">Sign up</a>
  </div>
<button type="submit" class="btn btn-primary btn-sm" name="login">Login</button>

</div>

        </form>
      </div>
    </div>
  </div>
