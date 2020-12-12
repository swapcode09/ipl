<?php
session_start();
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=players','18104027' ,'12345');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo2=new PDO('mysql:host=localhost;port=3306;dbname=stats','18104027' ,'12345');
$pdo2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if ($_SESSION['team'] == "india")
{
$sql="select * FROM india";
$q = $pdo->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
}
else if ($_SESSION['team'] == "westindies")
{
  $sql="select * FROM wi";
  $q = $pdo->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
}
else if ($_SESSION['team'] == "australia")
{
  $sql="select * FROM aus";
  $q = $pdo->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);
}


?>
<!doctype html>
<html>
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Goldman&display=swap');
body
{
 color:white;
 font-family: 'Goldman';
 /* background-image: url('newimg.jpg'); */
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
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  background-color:maroon;
  border:2px solid red;
}

.card:hover {
  box-shadow: 0 8px 16px 0 black;
}

.container {
  padding: 2px 16px;
}
.navbar {
  margin-bottom: 0;
  border-radius: 0;
}

.team
{
    margin: auto;
    font-size: 45px;
    color:red;
    text-align: center;
    background-color: purple;
    color:lightskyblue;
    width:90%;
    height:60px;

}
tr:nth-child(even)
{
  background-color:#F5F5DC;
  color:#A0522D;
}
tr:nth-child(odd)
{
  background-color:#A0522D;
  color:#F5F5DC;
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
        <a class="dropdown-toggle" data-toggle="dropdown" href="teams.php">Teams
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
	<input type="submit" name="logout" value="Logout" style="color:black">
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
<div class="team">
  Team <?php echo $_SESSION['team'] ?>
</div>
<br>
<center>
<label style="font-size:20px;color:black"> Search Player:</label>
<input type="text" id="search" style="font-size:25px;color:black">
<!-- <input type="submit" name="searchplayer" style="font-size:25px;color:black"> -->

</center>



    <div id="data">
    </div>



<br>
<div class="flex-container" style="flex-wrap:wrap">

<?php while ($row = $q->fetch()): ?>
  <?php $_SESSION['namedata']=$row['name']; ?>
  <div class="card" style="margin-left:20px;width:348px">
    <img src=" <?php echo ($row['img']) ?> " alt="Avatar" style="width:230px;height:280px;">
    <div class="container">
      <p> <?php echo ($row['name']) ?> </p>
    </div>
  </div>

  <div class="card" style="margin-left:20px;width:1200px">
    <div class="container" style="width:100%">
      BATTING STATS
      <table width="1000px" padding="15px" style="font-size:28px;">
        <th>Format</th>
            <th>Mat</th>
            <th>NO</th>
              <th>Runs</th>
                <th>HS</th>
                  <th>Ave</th>
                    <th>SR</th>
                      <th>100</th>
                        <th>50</th>
                          <th>4s</th>
                            <th>6s</th>
             <?php
             $dbname=$_SESSION['team'];
             $get=$_SESSION['namedata'];
             $sqls="SELECT `format`, `mat`, `no`, `runs`, `hs`, `ave`, `sr`, `hundreds`, `fifties`, `fours` , `sixes` FROM $dbname where name='$get'";
             $q2 = $pdo2->query($sqls);
             $q2->setFetchMode(PDO::FETCH_ASSOC);

              ?>
             <?php while ($row = $q2->fetch()): ?>
               <tr>
                              <td> <?php echo ($row['format']) ?> </td>
                                <td> <?php echo ($row['mat']) ?> </td>
                                  <td> <?php echo ($row['no']) ?> </td>
                                    <td> <?php echo ($row['runs']) ?> </td>
                                      <td> <?php echo ($row['hs']) ?> </td>
                                        <td> <?php echo ($row['ave']) ?> </td>
                                          <td> <?php echo ($row['sr']) ?> </td>
                                             <td> <?php echo ($row['hundreds']) ?> </td>
                                               <td> <?php echo ($row['fifties']) ?> </td>
                                                 <td> <?php echo ($row['fours']) ?> </td>
                                                   <td> <?php echo ($row['sixes']) ?> </td>
                            </tr>
                   <?php endwhile; ?>
 </table>
        BOWLING STATS
<table width="1000px" padding="15px" style="font-size:28px">
 <th>Format</th>
     <th>Mat</th>
     <th>Balls</th>
     <th>Runs</th>
     <th>Wkts</th>
     <th>Econ</th>
      <?php
      $get=$_SESSION['namedata'];
      $sqls="select format,mat,balls,runsgiven,wkts,econ from $dbname where name='$get'";
      $q2 = $pdo2->query($sqls);
      $q2->setFetchMode(PDO::FETCH_ASSOC);

       ?>
      <?php while ($row = $q2->fetch()): ?>
        <tr>
                       <td> <?php echo ($row['format']) ?> </td>
                          <td> <?php echo ($row['mat']) ?> </td>
                         <td> <?php echo ($row['balls']) ?> </td>
                           <td> <?php echo ($row['runsgiven']) ?> </td>
                             <td> <?php echo ($row['wkts']) ?> </td>
                             <td> <?php echo ($row['econ']) ?> </td>
                     </tr>
          <?php endwhile; ?>
</table>

    </div>
  </div>

  <?php endwhile; ?>
  </div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$("#search").on("keyup",function()
{
  var search_term=$(this).val();
  $.ajax({
    url : "live-search.php",
    type: "POST",
    data : {search : search_term } ,
    success : function (data)
    {
      $("#data").html(data);
    }

  });
});

});
</script>
</body>
<?php echo $dbname; ?>
</html>
