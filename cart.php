<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <title>Document</title>
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
            <li class="nav-item"><a href="products.html" class="nav-link">Products</a></li>
            <li class="nav-item"><a href="cart.html" class="nav-link text-light">Cart</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="container py-5">
      <h3 class="mb-4">Shopping Cart</h3>

      <div class="table-responsive">
        <table class="table align-middle">
          <thead class="table-light">
            <th>Product</th>
            <th>Price</th>
            <th width="120">Quantity</th>
            <th>Total</th>
            <th></th>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="/bathroom-rug.jpg" width="50px" class="rounded me-2 shadow" alt="Product">
                  <span>Smartphone</span>
                </div>
              </td>
              <td>N120,000</td>
              <td>
                <input type="number" class="form-control" value="1">
              </td>
              <td>N120,000</td>
              <td>
                <button class="btn btn-sm btn-danger">Remove</button>
              </td>
            </tr>

            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="/bathroom-rug.jpg" width="50px" class="rounded me-2 shadow" alt="Product">
                  <span>Smartphone</span>
                </div>
              </td>
              <td>N120,000</td>
              <td>
                <input type="number" class="form-control" value="1">
              </td>
              <td>N120,000</td>
              <td>
                <button class="btn btn-sm btn-danger">Remove</button>
              </td>
            </tr>

            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="/bathroom-rug.jpg" width="50px" class="rounded me-2 shadow" alt="Product">
                  <span>Smartphone</span>
                </div>
              </td>
              <td>N120,000</td>
              <td>
                <input type="number" class="form-control" value="1">
              </td>
              <td>N120,000</td>
              <td>
                <button class="btn btn-sm btn-danger">Remove</button>
              </td>
            </tr>

            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="/bathroom-rug.jpg" width="50px" class="rounded me-2 shadow" alt="Product">
                  <span>Smartphone</span>
                </div>
              </td>
              <td>N120,000</td>
              <td>
                <input type="number" class="form-control" value="1">
              </td>
              <td>N120,000</td>
              <td>
                <button class="btn btn-sm btn-danger">Remove</button>
              </td>
            </tr>

            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="/bathroom-rug.jpg" width="50px" class="rounded me-2 shadow" alt="Product">
                  <span>Smartphone</span>
                </div>
              </td>
              <td>N120,000</td>
              <td>
                <input type="number" class="form-control" value="1">
              </td>
              <td>N120,000</td>
              <td>
                <button class="btn btn-sm btn-danger">Remove</button>
              </td>
            </tr>

            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="/bathroom-rug.jpg" width="50px" class="rounded me-2 shadow" alt="Product">
                  <span>Smartphone</span>
                </div>
              </td>
              <td>N120,000</td>
              <td>
                <input type="number" class="form-control" value="1">
              </td>
              <td>N120,000</td>
              <td>
                <button class="btn btn-sm btn-danger">Remove</button>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </section>

    <div class="row justify-content-center p-4 mt-4">
      <div class="col-12 col-md-4">
        <div class="card p-3 shadow-sm">
          <h5>Cart Summary</h5>
          <hr>
          <p class="d-flex justify-content-between">
            <span>Subtotal</span>
            <strong>N120,000</strong>
          </p>
          <p class="d-flex justify-content-between">
            <span>Delivery</span>
            <strong>N0</strong>
          </p>
          <p class="d-flex justify-content-between fs-5">
            <span>Total</span>
            <strong>N120,000</strong>
          </p>
          <a href="cart.html" class="btn btn-success w-100 mt-2">
            Proceed To Checkout
          </a>
        </div>
      </div>
    </div>
  </body>
</html>