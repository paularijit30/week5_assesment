<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 5 assignment</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Arijit's Restro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
            	<?php
$page = rand(1, 3);
if($page == 1){
    $site = "http://localhost/coursera_assign/week5/breakfast.php";
}
elseif($page == 2){
    $site = "http://localhost/coursera_assign/week5/lunch.php";
}
else{
    $site = "http://localhost/coursera_assign/week5/dinner.php";
} 


?>
        <input type = "submit" onClick = "page()" value="Special">
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="breakfast.php">Breakfast</a>
          <a class="dropdown-item" href="lunch.php">Lunch</a>
         <a class="dropdown-item" href="dinner.php">Dinner</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Map</a>
      </li>
      
    </ul>
  
  </div>
</nav>
<div class="container-fluid">
	<img src="banner1.jpg" style="width: 100%;height: 100%">
	
</div>

<div class="container p-3">
<div class="row">
	<div class="col col-md-4">
		<div class="card p-2">
  <img class="card-img-top" src="pic3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Breakfast</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Book Now</a>
  </div>
</div>
	</div>
	<div class="col col-md-4">
		<div class="card p-2">
  <img class="card-img-top" src="pic2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Lunch</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Book Now</a>
  </div>
</div>
	</div>
	<div class="col col-md-4">
		<div class="card p-2">
  <img class="card-img-top" src="pic4.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Dinner</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Book Now</a>
  </div>
</div>
	</div>
	
</div>

</div>



<script>
function page(){
    window.location.href = "<?php echo $site ?>";
}
</script>


</body>
</html>