


// AJAX Password confirmation validation

function validatePasswords() {
  const pass = document.getElementById("password").value;
  const confirmPass = document.getElementById("confirmpassword").value;
  const errorText = document.getElementById("passwordError");

  if (pass !== confirmPass) {
    errorText.classList.remove("d-none");
    return false;
  }
  errorText.classList.add("d-none");
  return true;
}

// AJAX submit for form new user creation 
document.getElementById('loginForm').addEventListener('submit', function (e) {
  e.preventDefault();

  if (!validatePasswords()) {
    return; // stop if passwords don't match
  }

  const formData = new FormData(this);

  fetch(this.action, {
    method: 'POST',
    body: formData
  })
    .then(response => response.json())
    .then(data => {
      const messageDiv = document.getElementById('message');
      if (data.success) {
        messageDiv.innerHTML = `<div class="alert alert-success">${data.success}</div>`;
        this.reset();
      } else if (data.error) {
        messageDiv.innerHTML = `<div class="alert alert-danger">${data.error}</div>`;
      } else {
        messageDiv.innerHTML = `<div class="alert alert-warning">Unexpected response.</div>`;
      }
    })
    .catch(() => {
      document.getElementById('message').innerHTML = `<div class="alert alert-danger">Network or server error.</div>`;
    });
});

