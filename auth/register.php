<?php
  include("../config/db.php");
  $message = "";
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = trim($_POST["full_name"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirm = $_POST["confirm_password"];
    //Validation
    if(empty($full_name) || empty($email) || empty($password)) {
      $message = "All fields are required";
    } elseif($password !== $confirm) {
      $message = "Password do not match";
    } else {
      // Hash Password
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      //chech if email exists
      $chech = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
      if (mysqli_num_rows($chech) > 0) {
        $message = "Email already registered";
      } else {
        // Insert users
        $sql = "INSERT INTO users (full_name, email, password) VALUES ('$full_name', '$email', '$hashed_password')";
        if (mysqli_query($conn, $sql)) {
          header("Location: login.php");
          exit();
        } else {
          $message = "Registration failed";
        }
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <title>Register | GrabBoss</title>
  </head>
  <body class="bg-light">
    <div class="container vh-100 d-flex align-items-center justify-content-center">
      <div class="card p-4 shadow w-100" style="max-width: 450px;">
        <h4 class="text-center mb-3">GrabBoss</h4>
        <p class="text-center text-muted mb-4">
          Register to start shopping
        </p>
        <?php if ($message): ?>
          <div class="alert alert-danger"><?php echo $message; ?></div>
        <?php endif; ?>
        <form action="register.php" method="POST">
          <div class="mb-3">
            <label for="" class="form-label">Full Nmae</label>
            <input type="text" class="form-control" placeholder="Jogh Doe" name="full_name" required>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="jude@email.com" name="email" required>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="create password" required>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" placeholder="re-type password" required>
          </div>
          <div class="mb-3">
            <button class="btn btn-success w-100 mt-2">Register</button>
          </div>
          <div class="text-center mt-3">
            <span>Already have an account?</span>
            <a href="login.html" >Login</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>