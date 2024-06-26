<?php 
session_start();
include 'header-loggedin.php';

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    $name = '';
}
?>

<main id="main">

 <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Shopping Cart</li>
      </ol>
      <h2>Shopping Cart</h2>
    </div>
  </section><!-- End Breadcrumbs -->
  
  <section id="cart" class="cart">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Your Cart</h2>
        <p>Review your selected items and choose quantities.</p>
      </div>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $package = isset($_GET['package']) ? $_GET['package'] : '';
          $quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 1;
          
          if ($action == 'remove' && $package) {
            unset($prices[$package]);
            header('Location: cart.php');
            exit;
          }

          $prices = [
                'Time Based Plans - Local' => 5,
                'Time Based Plans - Europe' => 29,
                'Time Based Plans - Global' => 49,
                'Traffic Based Plans - Local' => 5,
                'Traffic Based Plans - Europe' => 10,
                'Traffic Based Plans - Global' => 20
            ];

          if (array_key_exists($package, $prices)) {
              $total_price = $prices[$package] * $quantity;
              echo '<tr>';
              echo '<th scope="row">1</th>';
              echo '<td>' . htmlspecialchars($package) . '</td>';
              echo '<td>€' . $prices[$package] . ' per card</td>';
              echo '<td>';
              echo '<form action="update-cart.php" method="post">';
              echo '<input type="hidden" name="package" value="' . htmlspecialchars($package) . '">';
              echo '<select name="quantity" class="form-select" aria-label="Select quantity">';
              echo '<option value="1"' . ($quantity == 1 ? ' selected' : '') . '>1</option>';
              echo '<option value="2"' . ($quantity == 2 ? ' selected' : '') . '>2</option>';
              echo '<option value="3"' . ($quantity == 3 ? ' selected' : '') . '>3</option>';
              echo '<option value="4"' . ($quantity == 4 ? ' selected' : '') . '>4</option>';
              echo '<option value="5"' . ($quantity == 5 ? ' selected' : '') . '>5</option>';
              echo '</select>';
              echo '<button type="submit" class="btn btn-sm btn-primary">Update</button>';
              echo '</form>';
              echo '</td>';
              echo '<td>€<span class="total-price">' . $total_price . '</span></td>';
              echo '<td>';
              echo '<a href="cart.php?action=remove&package=<?php echo urlencode($package); ?>" class="btn btn-sm btn-danger">Remove</a>';
              echo '</td>';
              echo '</tr>';
          } else {
              echo '<tr><td colspan="6">No package selected or package not available.</td></tr>';
          }
          ?>
          <?php if (empty($prices)): ?>
            <tr>
            <td colspan="6">Your cart is empty.</td>
            </tr>
          <?php else:
          endif; ?>
          
        </tbody>
      </table>

      <div class="cart-actions">
        <a href="index.php#pricing" class="btn btn-secondary">Continue Shopping</a>
        <a href="payment.php?package=<?php echo urlencode($package); ?>&quantity=<?php echo $quantity; ?>" class="btn btn-primary">Proceed to Payment</a>
      </div>

    </div>
  </section><!-- End Cart Section -->

</main><!-- End #main -->

<?php include 'footer.php'; ?>

</body>
</html>