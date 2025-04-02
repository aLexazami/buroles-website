<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/login-form.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/feedback-form.css">
  <title>BES Feedbacking Platform</title>
</head>
<body>
  <section>
      <div class="form-container">

        <!-- Login Form Container -->
            <div class="login-form">
              <form action="main_staff.php" method="POST">
                <div class="bes-header">
                  <img class="bes-logo" src="img/logo.png" alt="BES Logo">
                  <h1>BES: Feedbacking Management System</h1>
                </div>
                <label>SIGN-IN</label>
                  <div class="input-group">
                    <img class="user-icon" src="img/user.png">
                    <input type="text" id="username" name="username" required placeholder="Username">
                  </div>
                  <br>
                  <div class="input-group">
                    <img class="pass-icon" src="img/padlock.png">
                    <input type="password" id="password" name="password" required placeholder="Password">
                  </div>
                  <br>
                <button type="submit" value="login" name="login">Login</button>
              </form>
              <p>Don't have an account? <a href="register.php">Register here</a>.</p>
            </div>

        <!-- Feedback Form Container -->
        <div class="sub-options-container">
          <div class="feedback-options">
            <a href="http://localhost:3000/feedback-form.php" target="_blank">
              <div class="input-group">
                <img src="img/contract.png" class="options-icon">
                <h1>Feedback Form</h1>
              </div>
            </a>
          </div>
          <div class="faqs-options" >
            <a href="http://localhost:3000/faqs.php"  target="_blank">
              <div class="input-group">
                <img src="img/chat.png" class="options-icon">
                <h1>FAQs</h1>
              </div>
            </a>
        
          </div>
        </div>
      </div>

  </section>
</body>
</html>
<?php
  include "footer.html";
  session_start();

  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])) {
      $username = $_POST["username"];
      $password = $_POST["password"];

      // Replace with your actual database connection and validation logic
      // Example:
      if ($username === "staff" && $password === "password123") { // Example credentials
          $_SESSION["user"] = $username;
          header("Location: main_staff.php");
          exit();
      } else {
          echo "Invalid username or password. Please try again.";
      }
  }
?>