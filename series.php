<?php
session_start();
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=tours','18104027' ,'12345');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/* FOR WINZ */
$sql="select * FROM winz";
$q = $pdo->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

$naa1="wi";
$naa2="nz";
$f="Tests";
$sql2="select name FROM winzplayers where format='$f' and nat='$naa1'";
$q2 = $pdo->query($sql2);
$q2->setFetchMode(PDO::FETCH_ASSOC);
$sql2fn="select name FROM winzplayers where format='$f' and nat='$naa2'";
$q2fn = $pdo->query($sql2fn);
$q2fn->setFetchMode(PDO::FETCH_ASSOC);



$f2="T20";
$sql3="select name FROM winzplayers where format='$f2' and nat='$naa1' ";
$q3 = $pdo->query($sql3);
$q3->setFetchMode(PDO::FETCH_ASSOC);
$sql3fn="select name FROM winzplayers where format='$f2' and nat='$naa2' ";
$q3fn = $pdo->query($sql3fn);
$q3fn->setFetchMode(PDO::FETCH_ASSOC);




$sql22="SELECT DISTINCT venueimg,venuetext from winz";
$q4 = $pdo->query($sql22);
$q4->setFetchMode(PDO::FETCH_ASSOC);








/* FOR ENGSA */
$sql5="select * FROM engsa";
$q5 = $pdo->query($sql5);
$q5->setFetchMode(PDO::FETCH_ASSOC);

$f6="ODI";
$nat1="SA";
$nat2="ENG";
$sql6="select name FROM engsaplayers where format='$f6' and nat='$nat1' ";
$sql6a="select name FROM engsaplayers where format='$f6' and nat='$nat2' ";
$q6 = $pdo->query($sql6);
$q6a=  $pdo->query($sql6a);
$q6->setFetchMode(PDO::FETCH_ASSOC);
$q6a->setFetchMode(PDO::FETCH_ASSOC);

$f66="T20";
$nat1="SA";
$nat2="ENG";
$sql33="select name FROM engsaplayers where format='$f66' and nat='$nat1' ";
$sql33a="select name FROM engsaplayers where format='$f66' and nat='$nat2' ";
$q33 = $pdo->query($sql33);
$q33a=  $pdo->query($sql33a);
$q33->setFetchMode(PDO::FETCH_ASSOC);
$q33a->setFetchMode(PDO::FETCH_ASSOC);



$sql66="SELECT DISTINCT venueimg,venuetext from engsa";
$q66 = $pdo->query($sql66);
$q66->setFetchMode(PDO::FETCH_ASSOC);

/* FOR INDAUS */
$sqlind="select * FROM indaus";
$qind = $pdo->query($sqlind);
$qind->setFetchMode(PDO::FETCH_ASSOC);

$for1="Tests";
$for2="ODI";
$na1="IND";
$na2="AUS";
$sqlind1="select name FROM indausplayers where format='$for1' and nat='$na1' ";
$sqlaus1="select name FROM indausplayers where format='$for1' and nat='$na2' ";
$sqlind2="select name FROM indausplayers where format='$for2' and nat='$na1' ";
$sqlaus2="select name FROM indausplayers where format='$for2' and nat='$na2' ";

$qi1 = $pdo->query($sqlind1);
$qa1=  $pdo->query($sqlaus1);
$qi1->setFetchMode(PDO::FETCH_ASSOC);
$qa1->setFetchMode(PDO::FETCH_ASSOC);
$qi2 = $pdo->query($sqlind2);
$qa2=  $pdo->query($sqlaus2);
$qi2->setFetchMode(PDO::FETCH_ASSOC);
$qa2->setFetchMode(PDO::FETCH_ASSOC);

$sql77="SELECT DISTINCT venueimg,venuetext from indaus";
$q77 = $pdo->query($sql77);
$q77->setFetchMode(PDO::FETCH_ASSOC);



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
    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
      width:900px;
  }

  .collapsible
  {
    background-color: #FFD700;
    color: 	#B22222;
    cursor: pointer;
    padding: 18px;
    width:50%;
    border: none;
    text-align:center;
    outline: none;
    font-size: 25px;
    font-weight:bold;

  }

  .active, .collapsible:hover {
    background-color:#CD5C5C;
    color:#FFA07A;
    font-weight: bold;
  }

  .collapsible:after {
    content: '\002B';
    color: white;
    font-weight: bold;
    float: right;
    margin-left: 5px;
  }

  .active:after {
    content: "\2212";
  }

  .content {
    padding: 0 18px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
   background-color:#f1f1f1;
    font-size: 25px;
  }
  .row:after {
  content: "";
  display: table;
  clear: both;
}

  .column {
  float: left;
  width: 33.33%;
  padding: 15px;
}
.tr
{
  border-bottom: 1px solid #000;
}
.flex-container
{
  display: flex;
  flex-wrap: nowrap;
}

.flex-container > div
{
  background-color: pink;
  margin: 10px;
  padding: 10px;
  font-size: 30px;
}
.img-inc
{
   transition: 0.3s ease-in-out;
}
.img-inc:hover
{
  transform:scale(1.5);
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
        <!--  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a></li> -->
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
  <br>

<div class="jumbotron" style="background-color:maroon">
<center><h2 style="color:white">UPCOMING SERIES</h2></center>
 <div class="flex-container">

  <div class="col-sm-4">
    <button onclick="run()"><img src="nzwi.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>

  <div class="col-sm-4">
  <button onclick="run2()"><img src="ensa.jpg" class="img-responsive" style="width:100%" alt="Image">
  </div>

  <div class="col-sm-4">
    <button onclick="run3()"><img src="ia.jpg" class="img-responsive" style="width:100%" alt="Image">
  </div>

</div>
</div>

<div class="container text-center">
  <center>
<br>
  <div id="details">
 <button class="collapsible" style="height:100px;background-image:url("bgg.png");">WEST INDIES TOUR OF NEW ZEALAND</button>
  <div class="content" style="max-width:1200px;background-color:maroon">

 <button class="collapsible">FIXTURES</button>
  <div class="content" style="max-height:800px;max-width:1200px">
  <div class="column">
    <table width="1000px">
      <?php while ($row = $q->fetch()): ?>
      <th> <?php echo ($row['mt']) ?> </th>
      <tr>
        <td> <?php echo ($row['day']) ?> </td>
        <td> New Zealand <img src="nzmini.webp"> VS West Indies <img src="wimini.webp"></td>
        <td>  <?php echo ($row['venue']) ?> </td>
        <td> <?php echo ($row['time']) ?></td>
      </tr>
<?php endwhile; ?>
    <tr>
      <td>
        <br>
        <i> ** ALL TIMES ARE IN IST ** </i>
      </td>
      </tr>

    </table>
  </div>
</div>
<br>

 <button class="collapsible">TEAMS</button>
<div class="content" style="max-height:100%;max-width:1100px">
  <div class="column">
    <table width="1000px" style="padding:10px">
      <th colspan="2">Tests</th>
      <th colspan="2">T20i</th>
      <tr>
        <td>West Indies <img src="wimini.webp"> </td>
        <td>New Zealand <img src="nzmini.webp"> </td>
        <td>West Indies <img src="wimini.webp"> </td>
        <td>New Zealand <img src="nzmini.webp"> </td>
      </tr>
      <tr>
        <td>
        <ul style="list-style-type:none;">
            <?php while ($row = $q2->fetch()): ?>
          <li> <?php echo ($row['name']) ?> </li>
          <?php endwhile; ?>

        </ul>
      </td>

      <td>
        <ul style="list-style-type:none;">
            <?php while ($row = $q2fn->fetch()): ?>
          <li> <?php echo ($row['name']) ?> </li>
          <?php endwhile; ?>

        </ul>
      </td>

      <td>
        <ul style="list-style-type:none;">
            <?php while ($row = $q3->fetch()): ?>
          <li> <?php echo ($row['name']) ?> </li>
          <?php endwhile; ?>
        </ul>

      </td>

      <td>
        <ul style="list-style-type:none;">
            <?php while ($row = $q3fn->fetch()): ?>
          <li> <?php echo ($row['name']) ?> </li>
          <?php endwhile; ?>
        </ul>

      </td>


    </tr>
</table>



</div>
</div>
<br>

 <button class="collapsible">VENUES</button>
   <div class="content" style="max-height:100%;max-width:1100px">
     <br>
<?php while ($row = $q4->fetch()): ?>
     <div class="col-sm-4">
       <img src=" <?php echo ($row['venueimg']) ?> " class="img-inc" style="width:100%" alt="Image">
       <pre>  <?php echo ($row['venuetext']) ?>    </pre>
     </div>
<?php endwhile; ?>
  </div>

<br>
</div>
</div>
</div>




<!-- FOR ENGSA -->

<div class="container text-center">
  <center>
<br>
  <div id="details2">
 <button class="collapsible" style="height:100px;background-image:url("bgg.png");">ENGLAND TOUR OF SOUTH AFRICA</button>
  <div class="content" style="max-width:1200px;background-color:maroon">

 <button class="collapsible">FIXTURES</button>
<div class="content" style="max-height:900px;max-width:1200px">
  <div class="column">
    <table width="1000px">
      <?php while ($row = $q5->fetch()): ?>
      <th> <?php echo ($row['mt']) ?> </th>
      <tr>
        <td> <?php echo ($row['day']) ?> </td>
        <td> SOUTH AFRICA <img src="samini.webp"> VS ENGLAND <img src="engmini.webp"></td>
        <td>  <?php echo ($row['venue']) ?> </td>
        <td> <?php echo ($row['time']) ?></td>
      </tr>
<?php endwhile; ?>


    </table>
  </div>
</div>
<br>

<button class="collapsible">TEAMS</button>
<div class="content" style="max-height:100%;max-width:1100px">
  <div class="column">
    <table width="900px" style="padding:10px">
      <th colspan="2">Tests</th>
      <th colspan="2">T20i</th>
      <tr>
        <td>South Africa <img src="samini.webp"> </td>
        <td>England <img src="engmini.webp"> </td>
        <td>South Africa <img src="samini.webp"> </td>
        <td>England <img src="engmini.webp"> </td>
      </tr>

      <tr>

        <td>
        <ul style="list-style-type:none;">
            <?php while ($row = $q6->fetch()): ?>
          <li> <?php echo ($row['name']) ?> </li>
          <?php endwhile; ?>
        </ul>
      </td>

      <td>
        <ul style="list-style-type:none;">
          <?php while ($row = $q6a->fetch()): ?>
          <li> <?php echo ($row['name']) ?> </li>
          <?php endwhile; ?>
        </ul>
      </td>

      <td>
        <ul style="list-style-type:none;">
          <?php while ($row = $q33->fetch()): ?>
          <li> <?php echo ($row['name']) ?> </li>
          <?php endwhile; ?>
        </ul>


      </td>

      <td>
        <ul style="list-style-type:none;">
          <?php while ($row = $q33a->fetch()): ?>
          <li> <?php echo ($row['name']) ?> </li>
          <?php endwhile; ?>
        </ul>
      </td>

    </tr>

</table>
</div>
</div>
<br>

 <button class="collapsible">VENUES</button>
   <div class="content" style="max-height:100%;max-width:1100px">
     <br>
<?php while ($row = $q66->fetch()): ?>
     <div class="col-sm-4">
       <img src=" <?php echo ($row['venueimg']) ?> " class="img-inc" style="width:100%" alt="Image">
       <pre>  <?php echo ($row['venuetext']) ?>    </pre>
     </div>
<?php endwhile; ?>
  </div>

<br>
</div>
</div>
</div>
 <!-- FOR INSAUS -->
<div class="container text-center">
  <center>
<br>
  <div id="details3">
<button class="collapsible" style="height:100px;background-image:url("bgg.png");">INDIA TOUR OF AUSTRALIA</button>
 <div class="content" style="max-width:1200px;background-color:maroon">

 <button class="collapsible">FIXTURES</button>
<div class="content" style="max-height:800px;max-width:1200px">
  <div class="column">
    <table width="1000px">
      <?php while ($row = $qind->fetch()): ?>
      <th> <?php echo ($row['mt']) ?> </th>
      <tr>
        <td> <?php echo ($row['day']) ?> </td>
        <td> India <img src="indmini.webp"> VS Australia <img src="ausmini.webp"></td>
        <td>  <?php echo ($row['venue']) ?> </td>
        <td> <?php echo ($row['time']) ?></td>
      </tr>
<?php endwhile; ?>
    <tr>
      <td>
        <br>
        <i> ** ALL TIMES ARE IN IST ** </i>
      </td>
      </tr>

    </table>
  </div>
</div>
<br>

 <button class="collapsible">TEAMS</button>
<div class="content" style="max-height:100%;max-width:1100px">
  <div class="column">
    <table width="1100px" style="padding:10px">
      <th colspan="2">Tests</th>
      <th colspan="2">ODI & T20i</th>
      <tr>
        <td>India <img src="indmini.webp"> </td>
        <td>Australia <img src="ausmini.webp"> </td>
        <td>India <img src="indmini.webp"> </td>
        <td>Australia <img src="ausmini.webp"> </td>
      </tr>
      <tr>
        <td>
        <ul style="list-style-type:none;">
            <?php while ($row = $qi1->fetch()): ?>
          <li> <?php echo ($row['name']) ?> </li>
          <?php endwhile; ?>

        </ul>
      </td>

      <td>
        <ul style="list-style-type:none;">
            <?php while ($row = $qa1->fetch()): ?>
          <li> <?php echo ($row['name']) ?> </li>
          <?php endwhile; ?>

        </ul>
        </td>

        <td>
          <ul style="list-style-type:none;">
              <?php while ($row = $qi2->fetch()): ?>
            <li> <?php echo ($row['name']) ?> </li>
            <?php endwhile; ?>

          </ul>
          </td>

      <td>
        <ul style="list-style-type:none;">
            <?php while ($row = $qa2->fetch()): ?>
          <li> <?php echo ($row['name']) ?> </li>
          <?php endwhile; ?>

        </ul>
        </td>



    </tr>


</table>
</div>
</div>
<br>

 <button class="collapsible">VENUES</button>
   <div class="content" style="max-height:100%;max-width:1100px">
     <br>
<?php while ($row = $q77->fetch()): ?>
     <div class="col-sm-4">
       <img src=" <?php echo ($row['venueimg']) ?> " class="img-inc" style="width:100%" alt="Image">
       <pre>  <?php echo ($row['venuetext']) ?>    </pre>
     </div>
<?php endwhile; ?>
  </div>

<br>
</div>
</div>
</div>

<script>
function run()
{
  var x = document.getElementById('details');
  if (x.style.visibility === 'hidden')
  {
    x.style.visibility = 'visible';
  }
  else
  {
    x.style.visibility = 'hidden';
  }
}
function run2()
{
  var x = document.getElementById('details2');
  if (x.style.visibility === 'hidden')
  {
    x.style.visibility = 'visible';
  }
  else
  {
    x.style.visibility = 'hidden';
  }
}
function run3()
{
  var x = document.getElementById('details3');
  if (x.style.visibility === 'hidden')
  {
    x.style.visibility = 'visible';
  }
  else
  {
    x.style.visibility = 'hidden';
  }
}
</script>

<script>
 var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++)
{
  coll[i].addEventListener("click", function()
  {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight)
    {
      content.style.maxHeight = null;
    } else
    {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}

</script>



</body>
</html>
