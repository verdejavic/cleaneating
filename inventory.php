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
<div id="container">

<h1>Clean Eating Diary</h1>

<table>
    <tr>
        <th>Recipe</th>
        <th>Type</th>
        <th>Ingredients</th>
        <th>Instructions</th>
    </tr>
<!-- begin PHP while-loop to display database query results
     with each row enclosed in LI tags -->
<?php while($row = mysqli_fetch_assoc($recipes)) :  ?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['type']; ?></td>
    <td><?php echo $row['ingredients']; ?></td>
    <td><?php echo $row['instructions']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<p><a href="enter_new_record.php">Add a recipe</a></p>

</div> <!-- close container -->
</body>
</html>
