<!doctype html>
<html>
<head>
<style>
#display
{
  width:300px;
  height: 700px;
  text-align:center;
  font-size: 20px;
}
#display section p
{
  display: none;
  text-align: center;
}
#display section a
{
  text-align: center;
  color:black;
  text-decoration:none;
}
#display section a:hover
{
  text-decoration:none;
  color:yellow;
  background-color:lavender;
}
#display section:target p
{
  display: block;
}
h1
{
  background-color: green;
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
          <li class="active"><a href="#">Home</a></li>

          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Series
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">India tour of Australia 2020</a></li>
            <li><a href="#">West Indies tour of New Zealand 2020</a></li>
            <li><a href="#">England tour of South Africa 2020</a></li>
          </ul>
        </li>

          <li><a href="#">Teams</a></li>
          <li><a href="#">Stats</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>
