<div class="container-fluid" style="background-color:#dddddd;text-align:center;padding:50px;">
<h1>State Sitebuilder</h1>
  <a href="sitebuilder.php?run=yes">Build Website</a> | <a href="index.php" target="_blank">Index</a><br><br>
<? include 'functions.php';

if (isset($_GET['run'])) {

foreach($states as $state) {
	$statename = $state;
	$state = preg_replace('/\s+/', '_', $state);
	$imagelink = '<img src="http://lesson.jaxcode.webfactional.com/stateflags/'.$state.'.svg.png">';
	
	$state = statetolower($state);
	$myfile = fopen("pages/$state", "w") or die("Unable to open file!");

$mystring = <<<EOT
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
</nav>
<div class="container-fluid" style="padding:50px;text-align: center;background-color: #eeeeee">
<h1>$statename</h1>
<br>

$imagelink
</div>
<br><br>
<iframe src="https://en.wikipedia.org/wiki/$state"
width="100%" height="10000"
frameborder="0"></iframe>

</body>
<html>

EOT;
echo'file created for <a href="pages/'.$state.'">'.$state.'</a><br>';
fwrite($myfile, $mystring);
fclose($myfile);



}
}
?>