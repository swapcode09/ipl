<?php
session_start();
if(isset($_SESSION['Name']))
{
  ?>
  <script type="text/javascript">
  document.getElementById('change').innerHTML="hello";
  </script>
  <?php
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    @import url('https://fonts.googleapis.com/css2?family=ZCOOL+QingKe+HuangYou&display=swap');
    body
    {
     font-family: 'ZCOOL QingKe HuangYou';
     background-image: url("newimg.jpg");
     color:black;
    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
  /*    background-color: #f2f2f2;*/
    background-color:black;
      padding: 25px;
    }

  .carousel-inner img {
      width: 90%; /* Set width to 100% */
      margin:auto;
      min-height:200px;
      border:2px solid white;
    }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse" style="border:4px solid red;font-weight:bolder">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  <!--    <a class="navbar-brand" href="#">Logo</a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="font-size:18px">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>

        <li><a href="series.php">Series</a></li>


      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Teams
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <form method="post" style="margin-left:25px;color:black">
        <li> <input type="submit" name="india" value="India">  </li>
        <li> <input type="submit" name="wi" value="West Indies">  </li>
        <li> <input type="submit" name="aus" value="Australia"> </li>
        <li> <input type="submit" name="eng" value="England"> </li>
        <li> <input type="submit" name="iplteams" value="IPL"> </li>
      </form>
      </ul>
    </li>

<?php
if (isset($_POST['india']))
{
  $_SESSION['team']="india";
  header("location:teams.php");
}
if (isset($_POST['wi']))
{
  $_SESSION['team']="westindies";
  header("location:teams.php");
}
if (isset($_POST['aus']))
{
  $_SESSION['team']="australia";
  header("location:teams.php");
}
if (isset($_POST['iplteams']))
{
  header("location:ipl.php");
}
 ?>



        <li><a href="ranks.php">Rankings</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <!-- <div id="change"><li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a></li></div> -->
        <div id="right" style="margin-top:10px;color:white">Welcome <?php echo $_SESSION['Name'] ?> </div>
	<form>
	<input type="submit" name="logout" value="Logout">
	</form>
	<?php
	if (isset($_GET['logout']))
	{
		header("location:login.php");
	}
	?>     
 </ul>


    </div>
  </div>
</nav>
<br><br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
    <a href="result.php">    <img src="iplwinner.jpg" alt="Image"> </a>
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="aus.jpg" alt="Image" height="100" width="200">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="bbl.jpg" alt="Image">
        <div class="carousel-caption">
        </div>
      </div>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center">
  <h3>LATEST MATCHES</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="q1.webp" class="img-responsive" style="width:100%" alt="Image">
      <pre>MUMBAI INDIANS WON BY 5 WICKETS</pre>
    </div>

    <div class="col-sm-4">
      <img src="el.webp" class="img-responsive" style="width:100%" alt="Image">
      <pre>SUNRISERS HYDERABAD WON BY 88 RUNS</pre>
    </div>

    <div class="col-sm-4">
      <img src="kp.webp" class="img-responsive" style="width:100%" alt="Image">
      <pre>KINGS XI PUNJAB WON BY 8 WICKETS</pre>
    </div>
  <br> <h3>ONGOING SERIES</h3><br>
      <div class="col-sm-4">
      <img src="nzwi.jpg" class="img-responsive" style="width:100%" alt="Image">
      <pre>WEST INDIES TOUR OF NEW ZEALAND 2020</pre>
    </div>
      <div class="col-sm-4">
    <img src="ensa.jpg" class="img-responsive" style="width:100%" alt="Image">
    <pre>ENGLAND TOUR OF SOUTH AFRICA 2020</pre>
  </div>
    <div class="col-sm-4">
  <img src="indtour.jpg" class="img-responsive" style="width:100%" alt="Image">
  <pre>INDIA TOUR OF AUSTRALIA 2020-2021</pre>
</div>
</div>

  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>COPYRIGHT © : This site is made by group 24 </p>
</footer>

</body>
</html>
