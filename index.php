
<? include 'functions.php'; ?>
<!DOCTYPE HTML>
<html>
<head>

  <title>stateflags</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

</head>

<body>
<div class="container-fluid" style="background-color:#dddddd;text-align:center;padding:50px;">
  <h1><strong>The 50 United States Flags</strong></h1><br><br>
  </div>
  <div class="container text-center">
  <div class="row">
    <div class="col-lg-12">

<table class="table table-bordered"><tr>
</div>



<?






$x=1;

foreach($states as $state) {
	$statename = $state;
	$state = preg_replace('/\s+/', '_', $state);
	$imagelink = myimage($state);


	$state = strtolower($state);

echo '<td>';


echo '<a href="pages/'.$state.'">';

echo $imagelink;
echo '<br>';


echo $statename;
echo '<br>';


echo '</td>';
$x++;
if($x == 6) {
echo '</tr><tr>';
$x=1;

}

}
?>

</tr></table>
</body>
  </html>