<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout Page</title>
  <link rel="stylesheet" href="css/logout.css">

</head>

<body>

  <div class="logout-container">
    <h1>Logout Confirmation</h1>
    <p>Are you sure you want to log out?</p>
    <button id="logoutBtn">Yes, Log Out</button>
  </div>

  <script>
    function logout() {

      window.location.href = "login.php";
    }

    document.getElementById("logoutBtn").addEventListener("click", function () {
      var confirmLogout = confirm("Are you sure you want to log out?");
      if (confirmLogout) {
        logout();
      }
    });
  </script>

</body>

</php>