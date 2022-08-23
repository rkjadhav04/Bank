<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Login</title>
    <style>
         body{
            background-image: linear-gradient(to right top, #273850, #0f303c, #0d2626, #101a15, #0b0d06);
            height: 100vh;
        }
        .tops{
            margin-top: 120px;
        }
    </style>
</head>
<body>
    <form action="">
    <div class="columns">
		<div class="tops column is-offset-4">
			
			<label for="" class="is-size-5 has-text-white">Account Number</label><br>
			<input type="text" class="input is-outlined column is-5 " name="account_number"><br>

			<label for=""  class="is-size-5 has-text-white">Amount to Deposit</label><br>
			<input type="text" class="input is-outlined  column is-5" name="amount_to_deposit"><br>



			<label for=""  class="is-size-5 has-text-white">Account Name </label><br>
			<input type="text" class="input is-outlined   column is-5" name="account_name"><br>


			<label for=""  class="is-size-5 has-text-white">Depositor Name </label><br>
			<input type="text" class="input is-outlined     column is-5" name="depositor_name"><br>


			<label for="" class="is-size-5 has-text-white">Bank Name</label><br>
			<input type="text" class="input is-outlined   column is-5 " readonly="" placeholder="Rk BANK "><br>

		

			
			<div class="mt-5">
			
				<button class="button is-primary is-outlined px-6 mb-5" name="submit" type="submit">Transfer  </button>
			</div>



		</div>
	</div>
    </form>
</body>
</html>