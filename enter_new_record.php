<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Clean Eating - Enter New Record</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/enter.js"></script>
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

<h2>Eating Clean: Enter New Recipe</h2>

<p class="textcenter"><a class="btn btn-primary" href="inventory_update.php">View all recipes</a></p>

<div id="cleanrecipes">

<form id="recipeform" class="form-horizontal" method="post" autocomplete="off">
  <fieldset>
    <legend>
      <label for="name">Recipe Name: </label>
        <textarea class="form-control" rows="1" id="name" name="name" required></textarea>

    </legend>

    <div class="form-group">
      <label for="type" class="col-lg-2 control-label">Type: </label>
      <div class="col-lg-10">
        <select class="form-control" name="type" id="type" required>
            <option value=""></option>
            <option value="juice">Juice</option>
            <option value="shake">Shake</option>
            <option value="snack">Snack</option>
            <option value="entree">Entrée</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="ingredients" class="col-lg-2 control-label">Ingredients: </label>
        <div class="col-lg-10">
          <input type="text" name="ingredients" class="form-control"  id="ingredients" required placeholder="First ingredient, Second Ingredient, Third Ingredient">
        </div>
    </div>

    <div class="form-group">
      <label for="instructions" class="col-lg-2 control-label">Instructions: </label>
        <div class="col-lg-10">
          <input type="text" name="instructions" class="form-control"  id="instructions" required placeholder="1) First Instruction 2) Second Instruction 3) Third Instruction">
        </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input type="submit" id="submit" value="Submit" class="btn btn-primary">
      </div>
    </div>

    </fieldset>
  </form>
</div>


<div id="response">
    <p class="announce textcenter">Thanks for submitting a recipe!</p>
    <p class="textcenter"><a href="enter_new_record.php">Return to the form</a></p>
</div>

    </div>
  </div>
</div>
</body>
</html>
