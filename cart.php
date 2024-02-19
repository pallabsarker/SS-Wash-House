<?php

session_start();

if(!isset($_SESSION['username'])){
  echo "You are logged out";
  header('location: signin.php');
}

?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" ><h3>User: <?php echo $_SESSION['username']; ?></h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="order.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Order
        </a>
        </li>
      </ul>

      	<li class="nav-item">
          <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        </li>

      </form>
    </div>
  </div>
</nav>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cart</title>
</head>
<body>

  <div class="container">
    <div class="row">
    <div class="col-lg-12 text-center border rounded bg-light my-5">
      <h1>Wash Cart</h1>
    </div>


  <div class="col-lg-9">
    <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Wash Name</th>
      <th scope="col">Rate</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php 
    if(isset($_SESSION['cart']))
    {
      foreach ($_SESSION['cart'] as $key => $value) 
      {
        $sr = $key+1;
        echo " 
        <tr>
        <td>$sr</td>
        <td>$value[Wash_Name]</td>
        <td>$value[Rate]<input type = 'hidden' class = 'wrate' value = '$value[Rate]'></td>
        
        <td>
        <form action = 'managecart.php' method = 'POST'>
        <input class = 'text-center wquantity' name='Mod_Quantity' onchange = 'this.form.submit();' type = 'number' value = '$value[Quantity]' min = '1' max='5000'>
        <input type = 'hidden' name = 'Wash_Name' value = '$value[Wash_Name]'>
        </form>
        </td>
        <td class = 'wtotal'></td>
        <form action = 'managecart.php' method = 'POST'>
          <td><button name = 'RemoveWash' class='btn btn-sm btn-outline-danger'>remove</td></button>
          <input type = 'hidden' name = 'Wash_Name' value = '$value[Wash_Name]'>
        </form>
        </tr>
        ";
      }
    }
     ?>

  </tbody>
</table>
  </div>

  <div class="col-lg-3">
    <div class="border bg-light rounded p-4">
      <h4>Grand Total: </h4>
      <h5 class="text-right" id = "gtotal">
      </h5>
      <br>
          <?php 

    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
    {

     ?>
      <form action="orderDB.php" method="POST">
        <div class="form-group">
    <label>Garments Name</label>
    <input type="text" name = "g_name" class="form-control" required>
  </div>
   <div class="form-group">
    <label>Phone Number</label>
    <input type="text" name = "phone_no" class="form-control" required>
  </div>
   <div class="form-group">
    <label>Address</label>
    <input type="text" name = "address" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Date</label>
    <input type="datetime-local" name = "date" class="form-control" required>
  </div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="pay_mode" value = "COD" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Cash on delivery
  </label>
</div>
<br>

        <button class="btn btn-primary btn-block" name="place_order">Place Order</button>
      </form>
      <?php 
    }

     ?>
    </div>
  </div>

 </div>
</div>

<script>
  
  var gt = 0;
  var wrate = document.getElementsByClassName('wrate');
  var wquantity = document.getElementsByClassName('wquantity');
  var wtotal = document.getElementsByClassName('wtotal');
  var gtotal = document.getElementById('gtotal');

  function subTotal()
  {
    gt = 0;
    for(i = 0; i<wrate.length; i++)
    {
      wtotal[i].innerText = (wrate[i].value)*(wquantity[i].value);
      gt = gt +  (wrate[i].value)*(wquantity[i].value);
    }
    gtotal.innerText = gt;
  }
  subTotal();

</script>

</body>
</html>