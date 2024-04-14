<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "bms";
$data = mysqli_connect($host, $user, $password, $db);

$sql = "SELECT * FROM depot";
$result = mysqli_query($data, $sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Local Bus - View Depot</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bms-bus.css">
    <link rel="stylesheet" href="css/bmscss.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Local<span>Bus</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

				<div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="bus.php" class="nav-link">Bus</a></li>
	          <li class="nav-item"><a href="employee.html" class="nav-link">Employee</a></li>
	          <li class="nav-item"><a href="route.html" class="nav-link">Routes & Schedules</a></li>
	          <li class="nav-item"><a href="ticket.html" class="nav-link">Tickets</a></li>
	          <li class="nav-item"><a href="maintenance.html" class="nav-link">Maintenance</a></li>
	        </ul>
	      </div>
        <div>
          <a href="log.php" class="bms-login-btn">Logout</a> 
        </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <!-- <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end"> -->
          	<aside>
              <ul class="bus-aside">
                <li><a href="add_depot.php">Add Depot</a></li>
                <li><a href="view_depot.php">View Depot</a></li>
                <li><a href="">Add bus</a></li>
                <li><a href="">View bus</a></li>
              </ul>
            </aside>
          <!-- </div> -->
          <div class="col-lg-6 col side-text-addcontent">
           <h3>Depot Data</h3>
           <table border="1.5px">
            <tr>
              <th class="table_th">Depot ID</th>
              <th class="table_th">Depot Name</th>
            </tr>

            <?php
            while($info = $result -> fetch_assoc()){

            
              ?>
              <tr>
                <td class="table_td"><?php echo "{$info['depot_id']}"; ?></td>
                <td class="table_td"><?php echo "{$info['depot_name']}"; ?></td>
                <?php
            }
                ?>
            </tr>
           </table>
          </div>
        </div>
      </div>
    </div>	

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>