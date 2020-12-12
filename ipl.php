<?php
session_start();
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=ipl','18104027' ,'12345');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="select * FROM ptab";
$q = $pdo->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

$sql2="select * FROM mostruns";
$q2 = $pdo->query($sql2);
$q2->setFetchMode(PDO::FETCH_ASSOC);

$sql3="select * FROM mostwickets";
$q3 = $pdo->query($sql3);
$q3->setFetchMode(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=ZCOOL+QingKe+HuangYou&display=swap');
  body
  {
   font-family: 'ZCOOL QingKe HuangYou';
   color:maroon;
   /* background-color: #FFFFE0; */
   background-image: url("newimg.jpg");
  }

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      font-size:22px;
    }


  .flex-container {
    display: flex;
    flex-wrap: nowrap;
  }

  .flex-container > div {
    margin: 10px;
    padding: 20px;
    font-size: 30px;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,1);
    transition: 0.3s;
    width: 40%;
    color:lightblue;
  }

  .card:hover {
    box-shadow: 0 8px 16px 0 red;
  }

  .container
  {
    padding: 2px 16px;
  }
  tr:nth-child(even)
  {
    background-color:#000080;
    color:white;
  }
  tr:nth-child(odd)
  {
    background-color:black;
    color:white;
  }
.stats
{
 height: 200px;
}


  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
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

<div class="container text-center">
<h3 style="font-family: 'ZCOOL QingKe HuangYou'">TEAMS</h3>
<div class="flex-container">
  <div class="card" style="width:300px;height:250px">
  <img src="milogo.jpg" alt="Avatar" style="width:220px;height:200px" >
</div>

<div class="card" style="width:300px;height:250px">
<img src="csklogo.png" alt="Avatar" style="width:220px;height:200px">
</div>

<div class="card" style="width:300px;height:250px">
<img src="kkrlogo.png" alt="Avatar" style="width:220px;height:200px">
</div>

<div class="card" style="width:300px;height:250px">
<img src="rrlogo.png" alt="Avatar" style="width:220px;height:200px">
</div>
</div>

<div class="flex-container">
  <div class="card" style="width:300px;height:250px">
  <img src="kxiplogo.jpg" alt="Avatar" style="width:220px;height:200px">
</div>

<div class="card" style="width:300px;height:250px">
<img src="dclogo.jpg" alt="Avatar" style="width:220px;height:200px">
</div>

<div class="card" style="width:300px;height:250px">
<img src="srhlogo.png" alt="Avatar" style="width:220px;height:200px">
</div>

<div class="card" style="width:300px;height:250px">
<img src="rcblogo.png" alt="Avatar" style="width:220px;height:200px">
</div>

</div>
</div>


<div class="container text-center" style="width:100%;background-image:url('winter.jpg')">
<h3 style="font-family: 'ZCOOL QingKe HuangYou'">POINTS TABLE</h3>
 <div style="width:100%">
   <center>
   <table width="1850px" padding="15px" border="1" style="font-size:30px">
     <th>POS</th>
     <th>TEAM</th>
      <th>MAT</th>
        <th>NRR</th>
          <th>PTS</th>
        <?php while ($row = $q->fetch()): ?>
          <tr>
            <td> <?php echo ($row['pos']) ?> </td>
              <td> <?php echo ($row['team']) ?> </td>
              <td> <?php echo ($row['mat']) ?> </td>
              <td> <?php echo ($row['nrr']) ?> </td>
              <td> <?php echo ($row['pts']) ?> </td>
          </tr>
            <?php endwhile; ?>
        </table>
 </center>
 <br>
 </div>
</div>

<div class="container text-center" style="width:100%">
<h3 style="font-family: 'ZCOOL QingKe HuangYou'">STATS - MOST RUNS</h3>
<div class="flex-container" style="flex-wrap:wrap">
  <?php while ($row = $q2->fetch()): ?>
  <div class="card" style="width:260px;height:300px;background-color:	#800080">
  <img src=" <?php echo ($row['img']) ?>   " class="stats" alt="Avatar">
    <h4><b> <?php echo ($row['name']) ?> </b></h4>
    <h4> <?php echo ($row['runs']) ?> </h4>
  </div>

  <?php endwhile; ?>

</div>
</div>


<div class="container text-center" style="width:100%;">
<h3 style="font-family: 'ZCOOL QingKe HuangYou'">STATS - MOST WICKETS</h3>
<div class="flex-container" style="flex-wrap:wrap">
  <?php while ($row = $q3->fetch()): ?>
  <div class="card" style="width:260px;height:300px;background-color:	#800080">
  <img src=" <?php echo ($row['img']) ?>   " class="stats" alt="Avatar">
    <h4><b> <?php echo ($row['name']) ?> </b></h4>
    <h4> <?php echo ($row['wicks']) ?> </h4>
  </div>

  <?php endwhile; ?>

</div>
</div>

</body>
</html>
