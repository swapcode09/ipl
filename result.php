<?php
session_start();
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

.jumbotron
{
  background-color:lavender;
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

  <!--    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Series
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">India tour of Australia 2020</a></li>
        <li><a href="three.php">West Indies tour of New Zealand 2020</a></li>
        <li><a href="#">England tour of South Africa 2020</a></li>
      </ul>
    </li> -->

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
      <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
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
<div class="jumbotron">
  <div class="container text-center" style="width:80%">
    <h1>IPL 2020 PLAYOFFS HIGHLIGHTS</h1>
</div>
</div>

<br>

<div class="jumbotron">
  <div class="container text-center" style="width:80%;">
    <video width="500" controls style="float:left">
  <source src="final.mp4" type="video/mp4">
</video>
  <h1>FINAL</h1>
    <p>MI VS DC</p>
    <p>Tuesday , 10th November 2020</p>
    <p>MUMBAI INDIANS 157/5  (18.4/20) </p>
    <P>DELHI CAPITALS 156/7 (20/20)</p>
    <p>MUMBAI INDIANS WON BY 5 WICKETS</p>
  </div>
</div>

<div class="jumbotron">
<div class="container text-center" style="width:80%">
  <video width="500" controls style="float:left">
<source src="q2.mp4" type="video/mp4">
</video>
<h1>QUALIFIER 2</h1>
  <p>DC VS SRH</p>
  <p>Sunday , 8th November 2020</p>
  <p>SUNRISERS HYDERABAD 172/8 (20/20) </p>
  <P>DELHI CAPITALS 189/3 (20/20)</p>
  <p>DELHI CAPITALS WON BY 17 RUNS</p>
</div>
</div>
<br>
<div class="jumbotron">
<div class="container text-center" style="width:80%">
  <video width="500" controls style="float:left">
<source src="el.mp4" type="video/mp4">
</video>
<h1>ELIMINATOR</h1>
  <p>RCB VS SRH</p>
  <p>Friday , 6th November 2020</p>
  <p>SUNRISERS HYDERABAD 132/4 (19.4/20) </p>
  <P>ROYAL CHALLENGERS BANGALORE 131/7 (20/20)</p>
  <p>SUNRISERS HYDERABADs WON BY 6 WICKETS</p>
</div>
</div>


</body>
</html>
