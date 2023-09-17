<?php
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-commerce Project</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- fontawesome css -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  include "navbar.php"
  ?>
  <div class="banner-store d-flex pl-3 pl-lg-5 align-items-center text-center justify-content-center">
    <div>
      <h1 class="text-slanted text-capitalize display-4 text-yellow">
        comfy sloth
      </h1>
      <h1 class="text-capitalize display-4 font-weight-bold">
        our store
      </h1>
    </div>
  </div>
  </header>
  <!-- end of header section -->

  <!-- totals -->
  <section class="totals py-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col text-uppercase text-center">
          <div class="row">
            <table class="table mt-3 table-hover">
              <thead>
                <tr>
                  <th scope="col">Product No.</th>
                  <th scope="col">Title</th>
                  <th scope="col">Price</th>
                  <th scope="col">Handle</th>
                  <th scope="col">Remove</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include('config.php');

                $total = 0;
                if (isset($_SESSION['cart'])) {
                  foreach ($_SESSION['cart'] as $key => $value) {
                    $total += $value['price'];
                    $sr =  $key + 1;
                    echo "
                    <tr> 
                    <td>$sr</td>
                    <td>$value[name]</td>
                    <td>$$value[price]<input type='hidden'  class='iprice' value='$value[price]'></td>
                    <td>
                    <form action='manage.php' method='post'>
                    <input type='number' name='Mod_quantity' onchange='this.form.submit();' value='$value[amount]' min='1' max='20' class =' w-50 m-auto text-center form-control iquantity'></td>
                    <input type='hidden' name='item-name' value='$value[name]'>
                    </form>
                    <td>
                    <form action='manage.php' method='post'>
                      <button type='submit' name='remove_item' class='btn  btn-outline-danger'>Remove</button>
                      <input type='hidden' name='item-name' value='$value[name]'>
                    </form>
                    </td>
                    <td class='itotal'></td>
                    </tr>
                    ";
                  }
                }

                ?>
              </tbody>
            </table>
          </div>
          <!-- end of columns -->
          <!-- buttons -->
          <div data-aos="fade-up" class="row my-1">
            <div class="col-sm-6 mx-auto col d-flex justify-content-center flex-wrap">
              <a href="index.php" class="btn btn-lg btn-outline-dark">Continue shipping</a>
              <a href="chceckout.php" class="btn btn-lg btn-outline-warning ml-2">Checkout</a>
              <form action="manage.php" method="post">
                <button type="submit" name="dell" class="btn btn-lg btn-outline-info ml-2">Clear Cart</button>

              </form>
            </div>
          </div>
          <!-- cart total -->
          <div class="row">
            <div class="col mx-auto col-sm-8 col-md-6 col-lg-4 my-3">
              <div class="card card-body bg-secondary text-uppercase">
                <div class="card-title text-white">
                  <h6>cart total</h6>
                </div>
                <div class="row">
                  <div class="col-6">
                    TAX
                  </div>
                  <div class="col-6">
                    $123.00
                  </div>
                  <div class="col-6 my-2">
                    ORDER TOTAL
                  </div>
                  <div class="col-6 my-2">
                    <?php echo "$" . $total . ".00"; ?>
                  </div>
                  <div class="col-6 my-2">
                    GRANDE TOTAL
                  </div>
                  <div class="col-6 my-2" id="gtotal">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of cart total -->
          <!-- end of buttons -->
        </div>
      </div>
    </div>
  </section>
  <!-- end of totals -->

  <?php
  include "feature.php"
  ?>
  <!-- partners -->
  <?php
  include "carosal.php";
  ?>
  <!-- end of  partners -->
  <?php
  include "footer.php"
  ?>
  <!-- end of modal -->
  <!-- jQuery -->
  <script>
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');

    function subTotal() {
      gt = 0;
      for (i = 0; i < iprice.length; i++) {
        itotal[i].innerText = `$${(iprice[i].value) * (iquantity[i].value)}`;
        gt += (iprice[i].value) * (iquantity[i].value);
      }
      const add = gt + 123;
      gtotal.innerHTML = `$${add}.00`;
    }
    subTotal();
  </script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- fontwesome js -->
  <script src="js/all.min.js"></script>
  <!-- Custom js -->
  <script src="js/script.js"></script>
</body>

</html>