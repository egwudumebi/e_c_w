<?php 
  session_start();
  include("config/db.php");
  //Protect page
  if(!isset($_SESSION["user_id"])) {
    header("Location: auth/login.php");
    exit();
  }
  if(!isset($_SESSION["cart"]) || count($_SESSION["cart"]) == 0) {
    header("Location: cart.php");
    exit();
  }
  $message = "";
  //Calculate total
  $total = 0;
  foreach ($_SESSION["cart"] as $item) {
    $total += $_SESSION["user_id"];
  }
  if ($_SESSION["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION["user_id"];
    //insert into orders table
    $order_sql = "INSERT INTO orders (user_id, total) VALUE ('$user_id','$total')";
    if(mysqli_query($conn, $order_sql)) {
      $order_id = mysqli_insert_id($conn);
      foreach($_SESSION["cart"] as $item) {
        $pid = $item["id"];
        $qty = $item["qty"];
        $price = $item["price"];
        mysqli_query($conn, "");
      }
      //clear cart
      unset($_SESSION["cart"]);
      //Redirect 
      header("Location: order-success.php?order_id=$order_id");
      exit();
    } else {
      $message = "Checkout failed. Try again.";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <title>Checkout | GrabBoss</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a href="index.html" class="navbar-brand">GrabBoss</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="products.html" class="nav-link text-light">Products</a></li>
            <li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="container py-5">
      <h3 class="mb-4">Checkout</h3>
      <div class="row g-4">
        <div class="col-12 col-md-7">
          <div class="card p-4 shadow-sm">
            <h5 class="mb-3">Customer Information</h5>
            <form action="" method="post">
              <div class="row g-3">
                <div class="col-12 col-md-6">
                  <label for="" class="form-label">Full Name</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="col-12 col-md-6">
                  <label for="" class="form-label">Email</label>
                  <input type="email" class="form-control" required>
                </div>
                <div class="col-12">
                  <label for="" class="form-label">Phone</label>
                  <input type="tel" class="form-control" required>
                </div>
                <div class="col-12">
                  <label for="" class="form-label">Delivery Adress</label>
                  <textarea name="" class="form-control" rows="3" id="" required></textarea>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="col-12 col-md-5">
          <div class="card p-4 shadow-sm">
            <h5 class="mb-3">Order Summary</h5>

            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between">
                <span>SmartPhone</span>
                <strong>N120,000</strong>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>SmartPhone</span>
                <strong>N120,000</strong>
              </li>
            </ul>
            <div class="mb-3">
              <button class="btn btn-success w-100">
                Place Order
              </button>
              <!-- <p class="text-muted text-center mt-2 small">
                *Payment is simulated for academic purpose
              </p> -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>