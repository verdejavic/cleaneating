<?php include 'database.php'; ?>
<?php
	$query = "SELECT * FROM recipes ORDER BY name";
	$recipes = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Clean Eating Diary</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

<!-- nav bar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Living Clean</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="inventory_update.php">Eating Clean <span class="sr-only">(current)</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- end nav bar -->


<div id="container" class="container">
	<div class="row">
		<div class="col-xs-12">

<h2>Clean Eating Diary</h2>

<p class="textcenter"><a href="enter_new_record.php" class="btn btn-primary">Add a new recipe</a></p>


<table class="table table-striped table-hover">
	<thead>
    <tr>
        <th>Recipe</th>
        <th>Type</th>
        <th>Ingredients</th>
        <th>Instructions</th>
    </tr>
</thead>

<!-- begin PHP while-loop to display database query results
     with each row enclosed in LI tags -->
<?php while( $row = mysqli_fetch_assoc($recipes) ) :  ?>

<tbody>
	<tr>
    <td><?php echo stripslashes($row['name']); ?></td>
    <td><?php echo $row['type']; ?></td>
    <td><?php echo $row['ingredients']; ?></td>
    <td><?php echo $row['instructions']; ?></td>
	</tr>


<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->
</tbody>
</table>



<p class="textcenter"><a class="btn btn-primary" href="enter_new_record.php">Add a new recipe</a></p>

		</div>
	</div>
</div> <!-- close container -->
</body>
</html>
