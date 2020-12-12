<?php
session_start();
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=usres','18104027' ,'12345');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if ( isset ($_POST['Login'] ))
{
  $n=$_POST['Name'];
  $pd=hash('md5',$_POST['Password']);
  $sql="select Name,Pass FROM details where Name='$n' and Pass='$pd'";
   $stmt=$pdo->query($sql);
   $row=$stmt->fetch(PDO::FETCH_ASSOC);
   if ($row)
   {
     if (!empty($_POST['Remember']))
     {
       setcookie('Name',$_POST['Name'],time()+(10*365*24*60*60));
     }
     else
     {
        if (isset($_COOKIE['Name']))
        setcookie("Name","");
     }
     $_SESSION['Name']=$_POST['Name'];
     header("location:home.php");
     return;
   }
   else
  {
    echo '<script>alert("Incorrect login")</script>';
    echo '<script>window.location="login.php"</script>';
	$_SESSION['failure']="<b><h1>INCORRECT LOGIN</h1></b>";
  }

header("location:login.php");
return;

}



if (isset($_POST['Signup']))
{
  if (isset ($_POST['Name']) && isset($_POST['Phone']) && isset($_POST['Email']) && isset($_POST['Password']))
    {
      if ((strpos($_POST['Email'], '@') === false))
      {
          $_SESSION['failure'] = "<b><h1>Email must have an at-sign (@)</h1></b>";
          header("Location: login.php");
          return;
	}

	if (! ctype_alpha($_POST['Name']))
      {
        $_SESSION['failure'] = "<b><h1>Name must contain alphabets</h1></b>";
        header("location:login.php");
        return;
	}

	if (! is_numeric($_POST['Phone']) )
      {
        $_SESSION['failure'] = "<b><h1>Phone Number must be numeric</h1></b>";
        header("location:login.php");
        return;
	}

	else
      {

      $stmt = $pdo->prepare('INSERT INTO details (Name,Phone,Email,Pass) VALUES (:nm,:ph,:em,:pas)');
      $stmt->execute(array(
          ':nm' => $_POST['Name'],
          ':ph' => $_POST['Phone'],
          'em' => $_POST['Email'],
          ':pas'=> hash('md5',$_POST['Password']))
        );
        $_SESSION['success']="Registration Completed";

      }
  }

 header("location:login.php");
  return;
}
?>



<?php
if (isset($_SESSION['failure']))
{
  echo $_SESSION['failure'];
  unset($_SESSION['failure']);
}

if (isset($_SESSION['success']))
{
  echo $_SESSION['success'];
  unset($_SESSION['success']);
}
?>



<!DOCTYPE HTML>
<html>
<head>
  <title>LOGIN-REGISTRATION</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Shojumaru&display=swap" rel="stylesheet">
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=ZCOOL+QingKe+HuangYou&display=swap');  
*
  {
    box-sizing: border-box;
  }
  html ,body{
    margin:0;
    padding:0;	
	font-family: 'ZCOOL QingKe HuangYou';
    	 	background-image: url("newimg.jpg");
     		color:black;
}
  .form-container
  {
    margin: 20px;
    padding: 15px;
    background: #173459;
    color:white;
    box shadow: 0 5px 10px 0 rgba(0,0,0,0.3), 0 7px 21px 0 rgba(0,0,0,0,20);
    width:35%;
    margin-left:30%;
  }

  .input-cnt
  {
    display: flex;
    margin-bottom: 15px;
  }

  .input-cnt:last-child
  {
    margin-bottom: 0px;
  }

  .input-cnt > i
  {
    min-width: 40px;
    padding: 10px;
    text-align: center;
    background: lightgrey;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    color: #0076ff;
  }

  .input-cnt > i:hover
  {
    background-color: #173459;
  }

  .input-cnt > input[type="text"] , .input-cnt > input[type="password"]
  {
    outline: none;
    border: none;
    padding: 10px;
    border: 1px solid lightgrey;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    width:80%;
    font-weight: bolder;
  }

  .input-cnt > input[type="submit"]
  {
    outline: none;
    border: none;
    border-radius: 20px;
    margin:0 auto;
    font-size:15px;
    padding: 8px;
    color:#173459;
    background:white;
    width:50%;
    font-weight: bolder;
}


  .input-cnt > input[type="submit"]:hover
  {
    color:#173459;
    background:#0076ff;
    font-weight: bolder;
  }

h3
{
font-family: 'Mansalva', cursive;
}

</style>
</head>
<body>
<center><h1>Welcome to our website</h1></center>
<hr>
<center><h1>NEW USERS REGISTER HERE FIRST</h1></center>


<h3 style="margin-left:45%">SIGN UP</h3>

<div class="form-container" style="font-family: 'Mansalva', cursive">
  <form method="post">
  <div class="input-cnt" style="font-family: 'Mansalva', cursive">
    <i class="material-icons">person</i>
    <input type="text" placeholder="Name" name="Name" style="font-family: 'Titillium Web', sans-serif;">
  </div>

  <div class="input-cnt">
    <i class="material-icons">face</i>
    <input type="text" placeholder="Phone" name="Phone" style="font-family: 'Titillium Web', sans-serif;">
  </div>

  <div class="input-cnt">
    <i class="material-icons">email</i>
    <input type="text" placeholder="Email" name="Email" style="font-family: 'Titillium Web', sans-serif;">
  </div>

  <div class="input-cnt">
    <i class="material-icons">lock</i>
    <input type="password" placeholder="Password" name="Password" style="font-family: 'Titillium Web', sans-serif;">
  </div>

  <div class="input-cnt">
    <input type="submit" name="Signup" value="Sign Up" style="font-family: 'Titillium Web', sans-serif;">
  </div>

</form>
</div>
<hr>
<center><h1>Aldready a User?</h1></center>
<h3 style="margin-left:45%">LOGIN</h3>
<div class="form-container">
<form method="post">
  <div class="input-cnt">
  <i class="material-icons">face</i>
  <input style="font-family: 'Titillium Web', sans-serif;" type="text" placeholder="Name" name="Name" value="<?php if(isset($_COOKIE["Name"])) { echo $_COOKIE["Name"]; } ?>">
  </div>


<div class="input-cnt">
  <i class="material-icons">lock</i>
  <input style="font-family: 'Titillium Web', sans-serif;" type="text" placeholder="Password" name="Password" value="<?php if(isset($_COOKIE["Password"])) { echo $_COOKIE["Password"]; } ?>">
</div>

<div class="input-cnt">
  <input type="submit" name="Login" value="Login" style="font-family: 'Titillium Web', sans-serif;">
</div>

<div class="input-cnt">
  <input type="checkbox" name="Remember" <?php if(isset($_COOKIE["Name"])) { ?> checked <?php } ?> />
  <label for="remember" style="font-family: 'Titillium Web', sans-serif;">Remember me</label>
</div>


</form>
</div>
</body>
</html>
