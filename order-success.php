<?php 
  if(!isset($_GET["order_id"])) {
    header("Location: index.php");
    exit();
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <title>Order Successful</title>
  </head>
  <body class="bg-light">
    <div class="container vh-100 d-flex align-items-center justify-content-center">
      <div class="card p-5 shadow text-center" style="max-width: 500px;">
        <div class="mb-3">
          <div class="rounded-circle bg-success text-white d-inline-flex align-items-center justify-content-center"
            style="width: 80px; height: 80px; font-size: 36px;"
          >&check;</div>
        </div>
      </div>
      <h3 class="text-success">Order Placed Successfully</h3>
      <p class="text-muted mt-2">
        Thank you for your purchase. 
        Your order has been recieved 
        and is been processed
      </p>
    </div>
  </body>
</html>