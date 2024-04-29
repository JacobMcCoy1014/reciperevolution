<?php   										
	
	// Include the database connection script
	require 'includes/database-connection.php';

	function get_recipe(PDO $pdo, string $id) {

		// SQL query to retrieve recipe information based on the recipe ID
		$sql = "SELECT * 
			FROM Recipes
			WHERE recipe_id= :id;";	// :id is a placeholder for value provided later 
		                              

		// Execute the SQL query using the pdo function and fetch the result
		$Recipes = pdo($pdo, $sql, ['id' => $id])->fetch();		// Associative array where 'id' is the key and $id is the value. Used to bind the value of $id to the placeholder :id in  SQL query.

		// Return the recipe information
		return $Recipes;
	}

	// Retrieve info about the recipes
	$Recipes1 = get_recipe($pdo, '0001');
    $Recipes2 = get_recipe($pdo, '0002');
    $Recipes3 = get_recipe($pdo, '0003');
    $Recipes4 = get_recipe($pdo, '0004');
    $Recipes5 = get_recipe($pdo, '0005');
    $Recipes6 = get_recipe($pdo, '0006');
    $Recipes7 = get_recipe($pdo, '0007');
    $Recipes8 = get_recipe($pdo, '0008');
    $Recipes9 = get_recipe($pdo, '0009');
	$Recipes10 = get_recipe($pdo, '0010');

?> 

<!DOCTYPE>
<html>

	<head>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>Recipe Revolution</title>
  		<link rel="stylesheet" href="css/style.css">
  		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
	</head>

	<body>

		<header>
			<div class="header-left">
				<div class="logo">
					<img src="imgs/logo.png" alt="Recipe Revolution Logo">
      			</div>

	      		<nav>
	      			<ul>
	      				<li><a href="index.php">Recipes</a></li>
	      				<li><a href="about.php">About</a></li>
                        <li><a href="reviews.php">Reviews</a></li>
			        </ul>
			    </nav>
		   	</div>
		</header>

  		<main>
  			<section class="recipe-catalog">

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions.php?recipe_id=<?= $Recipes1['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/guacamole.jpg" alt="A picture of Guacamole">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes1['dishname'] ?></h2>

  					<!-- Display desciption of dish -->
  					<p><?= $Recipes1['description'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions2.php?recipe_id=<?= $Recipes2['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/spaghetti.jpg" alt="A picture of Spaghetti Bolognese">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes2['dishname'] ?></h2>

  					<!-- Display desciption of dish -->
  					<p><?= $Recipes2['description'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions3.php?recipe_id=<?= $Recipes3['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/soup.jpg" alt="A picture of homemade Chicken Noodle Soup">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes3['dishname'] ?></h2>

  					<!-- Display desciption of dish -->
  					<p><?= $Recipes3['description'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions4.php?recipe_id=<?= $Recipes4['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/salad.jpg" alt="A picture of Caesar Salad">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes4['dishname'] ?></h2>

  					<!-- Display desciption of dish -->
  					<p><?= $Recipes4['description'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions5.php?recipe_id=<?= $Recipes5['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/bananabread.jpg" alt="A picture of fresh banana bread">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes5['dishname'] ?></h2>

  					<!-- Display desciption of dish -->
  					<p><?= $Recipes5['description'] ?></p>
  				</div>
  				
  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions6.php?recipe_id=<?= $Recipes6['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/cookies.jpg" alt="A picture of chocolate chip cookies">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes6['dishname'] ?></h2>

  					<!-- Display desciption of dish -->
  					<p><?= $Recipes6['description'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions7.php?recipe_id=<?= $Recipes7['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/quinoa.jpg" alt="A picture of quinoa salad">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes7['dishname'] ?></h2>

  					<!-- Display desciption of dish -->
  					<p><?= $Recipes7['description'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions8.php?recipe_id=<?= $Recipes8['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/sushi.jpg" alt="A picture of crab and cucumber sushi rolls">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes8['dishname'] ?></h2>

  					<!-- Display desciption of dish -->
  					<p><?= $Recipes8['description'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions9.php?recipe_id=<?= $Recipes9['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/pastap.jpg" alt="A picture of pasta primavera">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes9['dishname'] ?></h2>

  					<!-- Display desciption of dish -->
  					<p><?= $Recipes9['description'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions10.php?recipe_id=<?= $Recipes10['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/turkey.jpg" alt="A picture of roast turkey">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes10['dishname'] ?></h2>

  					<!-- Display desciption of dish -->
  					<p><?= $Recipes10['description'] ?></p>
  				</div>

  			</section>
  		</main>

	</body>
</html>



