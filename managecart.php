<?php 
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['Add_To_Cart']))
	{
		if(isset($_SESSION['cart'])){
			$washitem = array_column($_SESSION['cart'], 'Wash_Name');
			if(in_array($_POST['Wash_Name'], $washitem))
			{
				echo "<script> alert('Wash already added');
				window.location.href='order.php';
				</script>";
			}
			else{
			$count = count($_SESSION['cart']);
			$_SESSION['cart'][$count] = array('Wash_Name'=>$_POST['Wash_Name'],'Rate'=>$_POST['Rate'],'Quantity'=>1);
			echo "<script> alert('Wash added');
				window.location.href='order.php';
				</script>";
			}
		}
		else{
		$_SESSION['cart'][0]=array('Wash_Name'=>$_POST['Wash_Name'],'Rate'=>$_POST['Rate'],'Quantity'=>1);
		echo "<script> alert('Wash added');
				window.location.href='order.php';
				</script>";

		}
	}

	if(isset($_POST['RemoveWash']))
	{
		foreach ($_SESSION['cart'] as $key => $value) 
		{
			if($value['Wash_Name'] == $_POST['Wash_Name'])
			{
			unset($_SESSION['cart'][$key]);
			$_SESSION['cart']=array_values($_SESSION['cart']);
			echo "<script> alert('Wash removed');
				window.location.href='cart.php';
				</script>";
			}
		}
	}
	if(isset($_POST['Mod_Quantity']))
	{
		foreach ($_SESSION['cart'] as $key => $value) 
		{
			if($value['Wash_Name'] == $_POST['Wash_Name'])
			{
			$_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
			echo "<script>
				window.location.href='cart.php';
				</script>";
			}
		}
	}
}

 ?>