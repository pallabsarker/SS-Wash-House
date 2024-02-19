<?php

session_start();

if(!isset($_SESSION['username'])){
	echo "You are logged out";
	header('location: signin.php');
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
    <a class="navbar-brand" ><h3>User: <?php echo $_SESSION['username']; ?></h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
      	<li class="nav-item">
      		<?php 

      			$count=0;
      			if(isset($_SESSION['cart']))
      			{
      				$count=count($_SESSION['cart']);
      			}

      		?>
          <a href="cart.php" class="btn btn-lg btn-success">
          <span class="glyphicon glyphicon-cart"></span> cart (<?php echo $count; ?>)
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
</head>
<body> 


	<div class = "container mt-4">
		<div class = "row">
			<div class = "div.col.lg-3 ">
				<div class="p-3">
				<form action="managecart.php" method="POST">
				<div class="card" style="width: 15rem;">
				  <img class="card-img-top" src="1.jpg">
				  <div class="card-body text-center">
				    <h5 class="card-title">Silicon Softener</h5>
				    <p class="card-text">Rate: 3 tk</p>
				    <button type = "submit" name = "Add_To_Cart" class="btn btn-primary">Add to wash cart</button>
				    <input type="hidden" name="Wash_Name" value="Silicon Softener">
				    <input type="hidden" name="Rate" value="3">
				  </div>
				  </div>
				</div>
				</form>
			</div>
						<div class = "div.col.lg-3">
							<div class="p-3">
				<form action="managecart.php" method="POST">
				<div class="card" style="width: 15rem;">
				  <img class="card-img-top" src="1.jpg">
				  <div class="card-body text-center">
				    <h5 class="card-title">Dry Enzyme</h5>
				    <p class="card-text">Rate: 30 tk</p>
				    <button type = "submit" name = "Add_To_Cart" class="btn btn-primary">Add to wash cart</button>
				    <input type="hidden" name="Wash_Name" value="Dry Enzyme">
				    <input type="hidden" name="Rate" value="30">
				    </div>
				  </div>
				</div>
				</form>
			</div>
						<div class = "div.col.lg-3">
							<div class="p-3">
				<form action="managecart.php" method="POST">
				<div class="card" style="width: 15rem;">
				  <img class="card-img-top" src="1.jpg">
				  <div class="card-body text-center">
				    <h5 class="card-title">Dry Towel</h5>
				    <p class="card-text">Rate: 35 tk</p>
				    <button type = "submit" name = "Add_To_Cart" class="btn btn-primary">Add to wash cart</button>
				    <input type="hidden" name="Wash_Name" value="Dry Towel">
				    <input type="hidden" name="Rate" value="35">
				    </div>
				  </div>
				</div>
				</form>
			</div>
						<div class = "div.col.lg-3">
							<div class="p-3">
				<form action="managecart.php" method="POST">
				<div class="card" style="width: 15rem;">
				  <img class="card-img-top" src="1.jpg">
				  <div class="card-body text-center">
				    <h5 class="card-title">Black Dying</h5>
				    <p class="card-text">Rate: 30 tk</p>
				    <button type = "submit" name = "Add_To_Cart" class="btn btn-primary">Add to wash cart</button>
				    <input type="hidden" name="Wash_Name" value="Black Dying">
				    <input type="hidden" name="Rate" value="30">
				    </div>
				  </div>
				</div>
				</form>

			</div>
		</div>
	</div>

</body>
</html>