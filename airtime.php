<?php include 'db.php'; 

		$id = $_SESSION['login_id'];

            $select_login_user = "select * from banksystem where userbank_id = '$id'";
	        $login_user_data = mysqli_query($con,$select_login_user);
			$login_data = mysqli_fetch_assoc($login_user_data);


			if(isset($_POST['buy']))
			{
				$phone_number = $_POST['phone_number'];
				$total_amount = $_SESSION['total_amount'];
				$airtime = $_SESSION['air_time'];
				$amount_to_buy = $_POST['amount'];
				

				$select_amount =  "select * from banksystem where phonenumber='$phone_number' and totalamount = '$total_amount'";
				$check_amount = mysqli_query($con,$select_amount);
				$amount = mysqli_num_rows($check_amount);

				if ($amount>0) {
					// $update_amount = "update "
					if($_SESSION['total_amount'] >= $amount_to_buy)
					{
						$update_amount = "update banksystem set totalamount= '$total_amount' - '$amount_to_buy'   where userbank_id = '$id' ";
						
						mysqli_query($con,$update_amount);

						// $update_amount = "update banksystem set totalamount = ";
						$update_totalamount  = "update banksystem set airtime = '$amount_to_buy' + '$airtime'   where phonenumber = '$phone_number' ";

						mysqli_query($con,$update_totalamount);



					}
				}
			}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
	<title>Deposit</title>
	<style type="text/css">
		body{
			background-image: linear-gradient(to right top, #273850, #0f303c, #0d2626, #101a15, #0b0d06);
			height: 100vh;
		}
		.rk{
			margin-top: 40px;
		}
	</style>
</head>
<body>

	<!-- <div class="columns">
	<div class="column is-offset-4">
		<h1 class="title has-text-white  pt-4">OVA BANK PLC </h1>
	</div>
</div> -->

		<!-- navbar.... -->

	<nav class="navbar has-background-primary-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="userpanel.php">
     <h1 class="title is-size-4 has-text-white">Rk Bank</h1>
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <!-- <a class="button is-primary mr-6" href="login.php">
            <strong>Login</strong>
          </a> -->
     
          <a class="button is-light mr-6" href="logout.php">logout</a>
         
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- end nav bar.... -->

<div class="columns">
	<div class="column is-offset-4">
		<h1 class="title has-text-white  pt-4">Air Time </h1>
	</div>
</div>

<form action="" method="post">
	<div class="rk columns">
		<div class="tops column is-offset-4">
			
			<label for="" class="is-size-5 has-text-white">Account Balance</label><br>
		<input type="text"class="input is-outlined column is-5 " readonly=""placeholder="<?php echo $login_data['totalamount']; ?>"><br>

			<label for=""  class="is-size-5 has-text-white">Phone Number</label><br>
			<input type="text" class="input is-outlined  column is-5" name="phone_number"><br>



			<label for=""  class="is-size-5 has-text-white">Amount to Buy  </label><br>
			<input type="text" class="input is-outlined   column is-5" name="amount"><br>	
			<div class="mt-5">
			
				<button class="button is-primary is-outlined px-6 mb-5" name="buy" type="submit">Buy Airtime </button>
			</div>



		</div>
	</div>

</form>

</body>
</html>