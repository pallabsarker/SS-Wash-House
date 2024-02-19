<?php

session_start();

include 'supdbcon.php';

if(!isset($_SESSION['user'])){
	echo "You are logged out";
	header('location: adminlogin.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand"><h3>User: <?php echo $_SESSION['user']; ?></h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a href="logout2.php" class="btn btn-danger btn-lg">
          Log out
        </a>
        </li>

      </ul>

      </form>
    </div>
  </div>
</nav>
</head>
<body>

	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-12">
				<table class="table text-center table-dark">
  <thead>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Garments Name</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Address</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Date & Time</th>
      <th scope="col">Orders</th>

    </tr>
  </thead>
  <tbody>
  	<?php 

  		$query="SELECT * FROM `order_manager`";
  		$user_result = mysqli_query($con,$query);
  		while ($user_fetch = mysqli_fetch_assoc($user_result)) 
  		{
  			echo "
  			<tr>
      <td>$user_fetch[id]</td>
      <td>$user_fetch[g_name]</td>
      <td>$user_fetch[phone_no]</td>
      <td>$user_fetch[address]</td>
      <td>$user_fetch[pay_mode]</td>
      <td>$user_fetch[date]</td>
      <td>

      	<table class=''table text-center table-dark'>
  	<thead>
    <tr>
      <th scope='col'>Wash Name</th>
      <th scope='col'>Rate</th>
      <th scope='col'>Quantity</th>

    </tr>
  </thead>
  <tbody>

  ";

  $order_query = "SELECT * FROM `wash_order` WHERE `id` = '$user_fetch[id]'";
  $order_result = mysqli_query($con,$order_query);
  while($order_fetch = mysqli_fetch_assoc($order_result)) 
  		{
  			echo "
  					<tr>
  						<td>$order_fetch[wash_name]</td>
      				<td>$order_fetch[rate]</td>
      				<td>$order_fetch[quantity]</td>
  					</tr>
  			";
  		}


  echo"

  	</tbody>
  	</table>

      </td>
    	</tr>
    	";

  		}

  	 ?>
    
  </tbody>
</table>
			</div>
		</div>
	</div>

</body>
</html>

