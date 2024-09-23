<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/login.css">
</head>

<body>

  <div class="login-container">
    <h1>Login</h1>
    <form id="loginForm">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Enter your username" required>
        <div id="usernameError" class="error-message" style="display: none;">Username cannot be blank</div>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
        <div id="passwordError" class="error-message" style="display: none;">Password cannot be blank</div>
      </div>
      <button type="button" onclick="login()" class="btn btn-primary">Login</button>
    </form>
  </div>

  <script>
    function login() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

      if (username.trim() === "") {
        document.getElementById("usernameError").style.display = "block";
        return;
      } else {
        document.getElementById("usernameError").style.display = "none";
      }

      if (password.trim() === "") {
        document.getElementById("passwordError").style.display = "block";
        return;
      } else {
        document.getElementById("passwordError").style.display = "none";
      }


      window.location.href = "index.php";
    }
  </script>

  

</body>

</php>