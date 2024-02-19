<?php 
session_start();

include 'supdbcon.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['place_order']))
	{
		$query1 = "INSERT INTO `order_manager`(`g_name`, `phone_no`, `address`, `pay_mode`, `date`) VALUES ('$_POST[g_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]', '$_POST[date]')";
			if(mysqli_query($con,$query1))
			{
				$id = mysqli_insert_id($con);
				$query2 = "INSERT INTO `wash_order`(`id`, `wash_name`, `rate`, `quantity`) VALUES (?,?,?,?)";
				$stmt = mysqli_prepare($con,$query2);
				if($stmt)
				{
					mysqli_stmt_bind_param($stmt,"isss",$id,$wash_name,$rate,$quantity);
					foreach($_SESSION['cart'] as $key => $values)
					{
						$wash_name=$values['Wash_Name'];
						$rate=$values['Rate'];
						$quantity=$values['Quantity'];
						mysqli_stmt_execute($stmt);
					}
					unset($_SESSION['cart']);
					echo "<script> alert('Order Placed Successfully');
				window.location.href='order.php';
				</script>";
				}
				else
				{
					echo "<script> alert('SQL Query Prepare Error');
				window.location.href='cart.php';
				</script>";
				}
			}
			else 
			{
				echo "<script> alert('SQL Error');
				window.location.href='cart.php';
				</script>";
			}
	}
}

?>