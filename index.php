<!DOCTYPE html>
<html lang="sk_SK">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Vtipné hádanky s.r.o.</title>
</head>

<body>
	<h1>Ftipné hádanky</h1>

	<?php

	include "db_connection.php";

	//include "search_all_jokes.php";
	?>


	<form class="form-horizontal" action="/search_keyword.php">
		<fieldset>

			<!-- Form Name -->
			<legend>Vyhľadaj si vtip v databázi</legend>

			<!-- Search input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="keyword"></label>
				<div class="col-md-5">
					<input id="keyword" name="keyword" type="search" placeholder="e.g. ostravaci" class="form-control input-md" required="">
					<p class="help-block">Zadaj slovo pre vyhľadanie vtipu obsahujúci tvoje slovo</p>
				</div>
			</div>

			<!-- Button -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="submit"></label>
				<div class="col-md-4">
					<button id="submit" name="submit" class="btn btn-primary">Search</button>
				</div>
			</div>

		</fieldset>
	</form>


	<hr>

	<form class="form-horizontal" action="/add_joke.php">
		<fieldset>

			<!-- Form Name -->
			<legend>Vytvor svoj vlastný ftip</legend>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="newjoke">Zadaj text tvojho nového vtipu v hádanke</label>
				<div class="col-md-6">
					<input id="newjoke" name="newjoke" type="text" placeholder="" class="form-control input-md" required="">
					<span class="help-block">Tu zadaj prvú polovicu svojho vtipu</span>
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="newanswer">Odpoveď vtipnej hádanky</label>
				<div class="col-md-5">
					<input id="newanswer" name="newanswer" type="text" placeholder="" class="form-control input-md" required="">
					<span class="help-block">Zadaj odpoveď alebo svoju pointu svojej vtipnej hádanke</span>
				</div>
			</div>

			<!-- Button -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="submit"></label>
				<div class="col-md-4">
					<button id="submit" name="submit" class="btn btn-primary">Pridať nový ftip</button>
				</div>
			</div>

		</fieldset>
	</form>


	<?php
	//include "search_keyword.php";

	$mysqli->close();
	?>
</body>

</html>