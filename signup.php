<?php include 'db.php';

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $Email = $_POST['email'];
    $pin = $_POST['pin'];
    $phone_number = $_POST['phone_number'];
    $birth_date = $_POST['birth_date'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $accountnumber = rand();
    $bvn = rand(11,233546363565363);
    $debitcard = rand(11,52434634635636);

    $signup_data = "insert into banksystem (name,email,password,accountnumber,pin_number,bvn,phonenumber,birthdate,debitcard,address) values ('$name','$Email','$password','$accountnumber','$pin','$bvn','$phone_number','$birth_date','$debitcard','$address')";

    mysqli_query($con,$signup_data);

    header('location:index.php');

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Sign Up</title>
    <style>
        body{
            background-image: linear-gradient(to right top, #273850, #0f303c, #0d2626, #101a15, #0b0d06);
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="columns">
        <div class="column is-offset-4">
            <h1 class="title has-text-white pt-4">Rk Bank </h1>
        </div>
    </div>

    <form action="" method="POST">
        <div class="columns">
            <div class="column is-offset-4">
                <label for="" class="is-size-5 has-text-primary">Name</label><br>
                <input type="text" class="input is outlined column is-5" name="name">

                <label for="" class="is-size-5 has-text-primary">Email</label><br>
                <input type="email" class="input is outlined column is-5" name="email">

                <label for="" class="is-size-5 has-text-primary">Make a 4 digit pin</label><br>
                <input type="text" class="input is outlined column is-5" name="pin">

                <label for="" class="is-size-5 has-text-primary">phone number</label><br>
                <input type="text" class="input is outlined column is-5" name="phone_number">

                <label for="" class="is-size-5 has-text-primary">Birth of Date</label><br>
                <input type="date" class="input is outlined column is-5" name="birth_date">

                <label for="" class="is-size-5 has-text-primary">Address</label><br>
                <input type="text" class="input is outlined column is-5" name="address">

                <label for="" class="is-size-5 has-text-primary">Password</label><br>
                <input type="text" class="input is outlined column is-5" name="password">

                <!-- <label for="" class="is-size-5 has-text-primary">Password repeat</label><br>
                <input type="text" class="input is outlined column is-5"> -->

                <div class="mt-5">
                    <button class="button is-primary px-6 mr-4" type="submit" name="save">SignUp</button>
                    <!-- <button class="button is-inverted is-outlined px-6">Login</button> -->
                    <a href="login.php" class="button is-inverted is-outlined px-6">Login</a>
                </div>
            </div>
        </div>
    </form>

</body>
</html>