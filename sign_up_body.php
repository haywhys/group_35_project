

<!-- HTML SIGN UP FORM PAGE BROKEN INTO FOLDER -->


<div class="container mt-5">
  <div class="row align-right">
    <div class="col-md-6 col-lg-4 login-container">

      <h4 class="mb-3 text-center">Sign up</h4>

      <!-- Message div for showing errors or success -->
      <div id="message"></div>

      <form id="loginForm" method="POST" action="inc/user.php" onsubmit="return validatePasswords()">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
        </div>

        <div class="mb-3">
          <label for="confirmpassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm password" required>
          <div class="form-text text-danger d-none" id="passwordError">Passwords do not match.</div>
        </div>

        <div class="text-center mb-3">
          <div class="mb-2">
            <a href="#" class="small text-decoration-none me-2">Forgot password?</a>
            <a href="index.php" class="small text-decoration-none">Already have an account? Log in</a>
          </div>
          <button type="submit" class="btn btn-primary btn-sm" name="submit">Register</button>
        </div>
      </form>

    </div>


    
  </div>

  
</div>
