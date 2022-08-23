<?php include 'db.php'; 


	   $id = $_SESSION['login_id'];

            $select_login_user = "select * from banksystem where userbank_id = '$id'";
	        $login_user_data = mysqli_query($con,$select_login_user);
			$login_data = mysqli_fetch_assoc($login_user_data);

            // print_r($login_user_data); die();




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
	<title>User panel</title>
	<style type="text/css">
		body{
			/*background-image: linear-gradient(to right top, #858484, #626262, #424141, #232323, #000000);*/
			/*background-image: linear-gradient(to right top, #f4f1ff, #bab3cf, #8278a0, #4e4173, #1b1048);*/
			/*background-image: linear-gradient(to right top, #9477ff, #6b5bbe, #473f80, #282546, #0a0812);*/
			background-image: linear-gradient(to right top, #273850, #0f303c, #0d2626, #101a15, #0b0d06);
			height: 110vh;
		}
		.image{
  			width: 52px !important;
  			height: 52px !important;
		}
		
	</style>
</head>
<body>

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
	<h1 class="title column is-offset-4-desktop pt-5 has-text-white">RK BANK USER DASHBOARD</h1>
</div>


<div class="columns ml-5 image">
	<figure class="image">
		<image class="is-rounded " src="images/avatar.png"></image>
	</figure>
</div>

<div class="columns ml-4 mt-5">
	<div class="card column is-6">
		<header class="card-header title is-size-5 pl-4 column ">ACCOUNT BALANCE </header>
		<div class="card-content">
			<p class="is-size-5 has-text-weight-semibold pr-3">Account Name :  <?php echo $login_data['name']; ?></p>

			

			<p class="is-size-5 has-text-weight-semibold pr-3">Account Number :  <?php echo $login_data['accountnumber']; ?></p>

		</div>
		<div>

			<form action="">
				<!-- <button class="button is-success is-size-6 ml-4" formaction="Userairtime/airtime.php">Recharge Your Line</button> -->
				<a href="airtime.php" class="button is-success is-size-6 ml-4">Recharge Your Line</a>
				<!-- <button class="button is-success has-background-black is-size-6 ml-4" formaction="Transfer/transfer.php">Make Transfer</button> -->
				<a href="transfer.php" class="button is-success has-background-black is-size-6 ml-4">Make Transfer</a>
			</form>


		</div>
	</div>

</div>

 <!-- second step  -->
<div class="columns ml-4">
	<div class="card mt-6">
		<header class="card-header title is-size-6">Profile Details</header>
		<div class="card-content">
			<p class="is-size-5  pr-3">Account Holder :  <?php echo $login_data['name']; ?></p>
			<p class="is-size-5 pr-3">BVN :  <?php echo $login_data['bvn']; ?></p>
			<p class="is-size-5  pr-3">Phone Number :  <?php echo $login_data['phonenumber']; ?></p>
			<p class="is-size-5  pr-3">Birth Date :  <?php echo $login_data['birthdate']; ?></p>
		</div>
	</div>

	<div class="card mt-6 ml-6">
		<header class="card-header title is-size-6">Account Details</header>
		<div class="card-content">
			<p class="is-size-5  pr-3">Balance :  <?php echo $login_data['totalamount']; ?> rs</p>
			<p class="is-size-5 pr-3">Account Type  : Savings Account </p>
			<p class="is-size-5  pr-3">Location  :  <?php echo $login_data['address']; ?></p>
		
		</div>
	</div>


	<div class="card mt-6 ml-6 mb-6  pb-6">
		<header class="card-header title is-size-6">Profile Details</header>
		<div class="card-content">
			<p class="is-size-5  pr-3">Debit Card:  <?php echo $login_data['debitcard']; ?></p>
			<p class="is-size-5 pr-3 pb-5">pin :  <?php echo $login_data['pin_number']; ?></p>
			
		</div>
	</div>




</div>


	<form action="" method="post">
		<!-- <button class="button is-success is-outlined mt-3 ml-5" name="logout" type="submit">logout </button> -->
		<a href="logout.php" class="button is-success is-outlined mt-3 ml-5"> Logout</a>

	</form>
</body>
</html>