<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Buy AirTime</title>
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
                <label for="" class="is-size-3 has-text-white">Phone Number</label><br>
                <input type="text" class="input is-primary column is-5" placeholder="Phone Number" name="phone_number">

                <label for="" class="is-size-3 has-text-white">Amount</label><br>
                <input type="text" class="input is-primary column is-5" placeholder="Amount" name="amount_to_buy">
                
                <label for="" class="is-size-3 has-text-white">Pin Number</label><br>
                <input type="text" class="input is-primary column is-5" placeholder="Pin Number" name="pin">

                <div class="mt-5">
                    <button class="button is-primary px-6 mr-4" type="submit" name="submit">Transfer</button>
                    <!-- <button class="button is-inverted is-outlined px-6">Forget Password</button> -->
                </div>
            </div>
        </div>
    </form>
</body>
</html>