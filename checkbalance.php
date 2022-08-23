<?php include 'db.php';  


    // if(isset($_POST['save']))
    // {
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

    //     $select_data = "select * from banksystem where accounternumber='$accountnumber' and pin = '$pin'";
    //     $check_data = mysqli_query($con,$select_data);
    //     $check = mysqli_num_rows($check_data);

    // }


?>

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
                <label for="" class="is-size-3 has-text-white">Account Number</label><br>
                <input type="text" class="input is-primary column is-5" placeholder="Account Number">

                <label for="" class="is-size-3 has-text-white">Pin Number</label><br>
                <input type="text" class="input is-primary column is-5" placeholder="Pin Number">

                <div class="mt-5">
                    <button class="button is-info px-6 mr-4" type="submit" name="save">Check Balance</button>
                    <!-- <button class="button is-inverted is-outlined px-6">Forget Password</button> -->
                </div>
            </div>
        </div>
    </form>

</body>
</html>