<?php include 'db.php';

// if(!isset($_SESSION['login_id']))
// {
//   header('location:index.php');
// }
// else
// {
//   $id = $_SESSION['login_id'];
// }

   //   $id = $_SESSION['login_id'];

   //          $select_login_user = "select * from banksystem where userbank_id = '$id'";
	  //       $login_user_data = mysqli_query($con,$select_login_user);
			// $login_data = mysqli_fetch_assoc($login_user_data);

            // print_r($login_user_data); die();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

     <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
        <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
        <link rel="stylesheet" href="css/style.css">
    <title>Bank Management System</title>
    <style>
        body{
            background-image: linear-gradient(to right top, #273850, #0f303c, #0d2626, #101a15, #0b0d06);
            height: 100vh;
        }
        .rk{
            /*margin-top: 40px;*/
            padding-top: 40px;
            background-image: linear-gradient(to right top, #273850, #0f303c, #0d2626, #101a15, #0b0d06);
            height: 55vh;
        }
        /* background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12); */

        .footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}

    </style>
</head>
<body>

    <!-- navbar start...... -->
<nav class="navbar has-background-primary-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
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
          <a class="button is-primary mr-6" href="login.php">
            <strong>Login</strong>
          </a>
     
          <a class="button is-light" href="signup.php">SignUP</a>
         
        </div>
      </div>
    </div>
  </div>
</nav>

    <!-- end navbar.... -->


    <!-- start slider.... -->

    <div class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image:url(images/1.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
              <div class="col-md-12 ftco-animate">
                <div class="text w-100 text-center">
                    <h2>Best Place to Travel</h2>
                    <h1 class="mb-3">Norway</h1>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(images/2.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
              <div class="col-md-12 ftco-animate">
                <div class="text w-100 text-center">
                    <h2>Best Place to Travel</h2>
                    <h1 class="mb-3">Japan</h1>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(images/3.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
              <div class="col-md-12 ftco-animate">
                <div class="text w-100 text-center">
                    <h2>Best Place to Travel</h2>
                    <h1 class="mb-3">Singapore</h1>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>


    <!-- end slider.... -->




<!-- <h4 class="button is-info has-background-black mb-5">Welcome <?php echo $login_data['name']; ?></h4> -->

<div class="rk columns">
    <div class="column ml-6">
        <div class="card">
            <header class="card-header title">MOVING FUNDS LIKE SPEEDS</header>
            <div class="card-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam saepe delectus ipsum dolores mollitia at atque, accusamus blanditiis laborum eligendi consequatur iure voluptatum voluptatem nisi quis sapiente inventore natus facilis illum, eaque harum.</p>
            </div>
            <form action="">
                <button class="button is-success is-outlined ml-4" formaction="checkbalance.php">Check Balance</button>
                <button class="button is-info" formaction="buyairtime.php">Buy Airtime</button>
                <button class="button is-info has-background-black mb-5" formaction="deposit.php">Deposit</button>
            </form>
        </div>
    </div>

    <div class="column mr-6 ">
        <div class="card">
            <header class="card-header title">Learn More</header>
            <div class="card-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam saepe delectus ipsum dolores mollitia at atque, accusamus blanditiis laborum eligendi consequatur iure voluptatum voluptatem nisi quis sapiente inventore natus facilis illum, eaque harum.</p>
            </div>
            <form action="">
             
                <button class="button is-outlined is-inverted">Customer Care</button>
                <button class="button is-success mb-5">Know more</button>
            </form>
        </div>
    </div>
</div>

    <!-- start footer.... -->

     <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2018</p>
            </div>
        </footer>
    </div>


    <!-- end footer... -->


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>