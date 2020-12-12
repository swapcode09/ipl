<?php
session_start();
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=ranks','18104027' ,'12345');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sqlr1="select * FROM test";
$qr1 = $pdo->query($sqlr1);
$qr1->setFetchMode(PDO::FETCH_ASSOC);

$sqlr2="select * FROM odi";
$qr2 = $pdo->query($sqlr2);
$qr2->setFetchMode(PDO::FETCH_ASSOC);

$sqlr3="select * FROM t20";
$qr3 = $pdo->query($sqlr3);
$qr3->setFetchMode(PDO::FETCH_ASSOC);




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
  $_SESSION['team']="Wi";
  header("location:ipl.php");
}
 ?>



        <li><a href="ranks.php">Rankings</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <!--  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
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



  <center><h1>Rankings for Tests , ODIs and T20i</h1></center>
<center>
<div class="jumbotron" style="width:1700px">
  <div class="container text-center" style="width:50%">
  <h2>ICC Test Championship</h2>
  <h3>Since 25 August 2020</h3>
  <br><br>
  <table style="width:950px;font-size:25px">
<tr style="font-weight:bolder">
    <td>Pos</td>
    <td>Team</td>
    <td>Matches</td>
      <td>Points</td>
      <td>Rating</td>
</tr>

        <?php while ($row = $qr1->fetch()): ?>
          <tr>
                   <td> <?php echo ($row['Pos']) ?> </td>
                  <td> <?php echo ($row['Team']) ?> </td>
                   <td> <?php echo ($row['Matches']) ?> </td>
                  <td> <?php echo ($row['Points']) ?> </td>
                   <td> <?php echo ($row['Rating']) ?> </td>
          </tr>
              <?php endwhile; ?>
</table>
<br>
  <button style="font-size:20px" onClick="run1()">See Top 10 Players in Tests</button>
  <div id="demo1"> </div>
<br>

<h2>ODI Championship</h2>
<h3>Since 02 December 2020</h3>
<br><br>
<table style="width:950px;font-size:25px">
<tr style="font-weight:bolder">
  <td>Pos</td>
  <td>Team</td>
  <td>Matches</td>
    <td>Points</td>
    <td>Rating</td>
</tr>

      <?php while ($row = $qr2->fetch()): ?>
        <tr>
                 <td> <?php echo ($row['Pos']) ?> </td>
                <td> <?php echo ($row['Team']) ?> </td>
                 <td> <?php echo ($row['Matches']) ?> </td>
                <td> <?php echo ($row['Points']) ?> </td>
                 <td> <?php echo ($row['Rating']) ?> </td>
        </tr>
            <?php endwhile; ?>
</table>
<br>
  <button style="font-size:20px" onClick="run2()">See Top 10 Players in ODI</button>
    <div id="demo2"> </div>
<br>

<h2>T20i Championship</h2>
<h3>Since 06 December 2020</h3>
<br><br>
<table style="width:950px;font-size:25px">
<tr style="font-weight:bolder">
  <td>Pos</td>
  <td>Team</td>
  <td>Matches</td>
    <td>Points</td>
    <td>Rating</td>
</tr>

      <?php while ($row = $qr3->fetch()): ?>
        <tr>
                 <td> <?php echo ($row['Pos']) ?> </td>
                <td> <?php echo ($row['Team']) ?> </td>
                 <td> <?php echo ($row['Matches']) ?> </td>
                <td> <?php echo ($row['Points']) ?> </td>
                 <td> <?php echo ($row['Rating']) ?> </td>
        </tr>
            <?php endwhile; ?>
</table>
<br>
  <button style="font-size:20px" onClick="run3()">See Top 10 Players in T20i</button>
    <div id="demo3"> </div>
<br>
</div>
</div>

<script type="text/javascript">
function run1()
{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "test.html", true);
  xhttp.send();
}

function run2()
{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo2").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "odi.html", true);
  xhttp.send();
}

function run3()
{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo3").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "t20.html", true);
  xhttp.send();
}











</script>





</center>
