<?php include 'db.php';



    if(isset($_POST['save']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $select_data = "select * from banksystem where email='$email' and password = '$password'";
        $check_data = mysqli_query($con,$select_data);
        $check = mysqli_num_rows($check_data);

        if($check == 1)
        {
            $row = mysqli_fetch_assoc($check_data);
            $_SESSION['login_id'] = $row['userbank_id'];
            $_SESSION['total_amount'] = $row['totalamount'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['air_time'] = $row['airtime'];
            header('location:userpanel.php');

        }
    }


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
    
    <form action="" method="POST">
        <div class="columns">
            <div class="tops column is-offset-4">
                <label for="" class="is-size-3 has-text-white">Username or Email</label><br>
                <input type="email" class="input is-primary column is-5" placeholder="Username or Email" name="email">

                <label for="" class="is-size-3 has-text-white">Password</label><br>
                <input type="password" class="input is-primary column is-5" placeholder="Password" name="password">

                <div class="mt-5">
                    <button class="button is-primary px-6 mr-4" type="submit" name="save">Login</button>
                    <a class="button is-light" href="signup.php">SignUp</a>
                </div>
            </div>
        </div>
    </form>

</body>
</html>