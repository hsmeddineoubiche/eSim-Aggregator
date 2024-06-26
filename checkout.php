<?php
session_start();
if (isset($_SESSION['name'])) {
    include 'header-loggedin.php';
} else {
    include 'header.php';
    header("Location: ../login.php");
}
?>

<body>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Check my eSim</li>
        </ol>
        <h2>Check my eSim</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="Chechout" class="Chechout">
      <div class="container">
     
        <div class="row gy-4">

          <div class="col-lg-6 justify-content-right">
          <img src="assets/img/qrcode.jpeg" alt="">
          </div>

          <div class="col-lg-6">
            <div class="checkout">
              <h2> Data Plan Information</h2>
              <ul>
              <li><strong>Category</strong>: Global</li>
                <li><strong>Start date</strong>: 01 March, 2020</li>
                <li><strong>Expire date</strong>: 31 March, 2020</li>
                <li><strong> How it eSim works</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
            <div class="checkout">
              <h2>This is an example of QR Code detail</h2>
              <p> Scan the code</p>
              <p> Install the eSim</p>
              <p> Activate you plan</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End checkout Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>We offer best prices for all data plans</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Local</h3>
              <h4><sup>$</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Free local calls</li>
                <li><i class="bx bx-check"></i> Unlimited SMS</li>
                <li class="na"><i class="bx bx-x"></i> <span>International Calls</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Unlimited Roaming</span></li>
              </ul>
              <a href="https://bbbootstrap.com/snippets/embed/bootstrap-5-payment-form-payment-methods-83265795" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Europe</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
              <li><i class="bx bx-check"></i> Free Regional calls</li>
                <li><i class="bx bx-check"></i> Unlimited SMS</li>
                <li><i class="bx bx-check"></i> Unlimited Facetime</li>
                <li><i class="bx bx-check"></i> limited Roaming</li>
              </ul>
              <a href="Dashboard.php" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Global</h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
              <li><i class="bx bx-check"></i> Free Global calls</li>
                <li><i class="bx bx-check"></i> Unlimited SMS</li>
                <li><i class="bx bx-check"></i> Unlimited Facetime</li>
                <li><i class="bx bx-check"></i> Unlimited Roaming</li>
              </ul>
              <a href="https://bbbootstrap.com/snippets/embed/bootstrap-5-payment-form-payment-methods-83265795" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

</body>

<?php include 'footer.php'; ?>