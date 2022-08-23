<?php include 'db.php'; 


		$id = $_SESSION['login_id'];

            $select_login_user = "select * from banksystem where userbank_id = '$id'";
	        $login_user_data = mysqli_query($con,$select_login_user);
			$login_data = mysqli_fetch_assoc($login_user_data);

		if (isset($_POST['transfer'])) {
			$account_number = $_POST['account_number'];
			$amount_to_send = $_POST['amount_to_send'];
			$account_name = $_POST['account_name'];
			$total_amount = $_SESSION['total_amount'];
			$name = $_SESSION['name'];


			$select_data =  "select * from banksystem where accountnumber='$account_number' and name = '$account_name'";
			$check_data = mysqli_query($con,$select_data);
			$check = mysqli_num_rows($check_data);

			if ($check > 0) {

				if ($total_amount >= $amount_to_send) {
					$update_amount = "update banksystem set totalamount= '$total_amount' - '$amount_to_send'   where name = '$name' ";
					mysqli_query($con,$update_amount);

					$update_totalamount  = "update banksystem set totalamount = '$amount_to_send' + '$total_amount'   where name= '$account_name'  ";
					mysqli_query($con,$update_totalamount);
				}
				
			}

			header('location:userpanel.php');

		}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
	<title>Deposite</title>
</head>
<body>

	<style>
      body{
      	background-image: linear-gradient(to right top, #273850, #0f303c, #0d2626, #101a15, #0b0d06);
      }
	.tops{
			margin-top: 90px;
		}
</style>

<!-- start navbar.... -->
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

<!-- end navbar..... -->


<form action="" method="post">
	<div class="columns">
		<div class="tops column is-offset-4">
			
			<label for="" class="is-size-5 has-text-white">Account Number</label><br>
			<input type="text" class="input is-outlined column is-5 " name="account_number"><br>

			<label for=""  class="is-size-5 has-text-white">Amount to  Transfer </label><br>
			<input type="text" class="input is-outlined  column is-5" name="amount_to_send"><br>



			<label for=""  class="is-size-5 has-text-white">Account Name </label><br>
			<input type="text" class="input is-outlined   column is-5" name="account_name"><br>


			<label for=""  class="is-size-5 has-text-white">Sender Name </label><br>
			<input type="text" class="input is-outlined  column is-5" readonly="" placeholder="<?php echo $login_data['name']; ?>"><br>


			<label for=""  class="is-size-5 has-text-white">Current balance <?php echo $login_data['totalamount']; ?> </label><br>
			<input type="text" class="input is-outlined column is-5" readonly="" placeholder="<?php echo $login_data['totalamount']?>"><br>


			<label for="" class="is-size-5 has-text-white">Bank Name</label><br>
			<input type="text" class="input is-outlined  column is-5 " readonly="" placeholder="RK BANK "><br>

			
			<div class="mt-5">
			
				<button class="button is-primary is-outlined px-6 mb-5" name="transfer" type="submit">Transfer  </button>
			</div>



		</div>
	</div>

</form>

</body>
</html>