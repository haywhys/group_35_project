

// AJAX submit for form for log in page
document.getElementById('loginForm').addEventListener('submit', function(e) {
  e.preventDefault();

  // No password validation here on login
  const formData = new FormData(this);

  fetch(this.action, {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    const messageDiv = document.getElementById('message');
    if(data.success){
      messageDiv.innerHTML = `<div class="alert alert-success">${data.success}</div>`;
      this.reset();
    } else if(data.error){
      messageDiv.innerHTML = `<div class="alert alert-danger">${data.error}</div>`;
    } else {
      messageDiv.innerHTML = `<div class="alert alert-warning">Unexpected response.</div>`;
    }
  })
  .catch(() => {
    document.getElementById('message').innerHTML = `<div class="alert alert-danger">Network or server error.</div>`;
  });
});
