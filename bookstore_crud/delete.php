<?php

require_once("config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Rubik+Scribble&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
	<link href="styles.css" rel="stylesheet" />
	<script src="js/jquery-3.7.1.js"></script>
	<link rel="icon" type="image/x-icon" href="icons8-books-emoji-48.ico" />
	<title>Delete Book - Bookstore</title>
</head>

<body class="bg-body-tertiary">
	<!-- Navigation Bar -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html">Bookstore</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="add.php">Add</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="view.php">View</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="edit.php">Edit</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="delete.php">Delete</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Main -->
	<div class="container my-5">
		<div class="p-5 text-center bg-body-tertiary rounded-3">
			<div class="bi mt-4 mb-3" width="100" height="100">
				<img class="bookstore-main-icon" src="images/icons8-remove-book-96.png" style="width: 64px; max-width: 96px;" alt="Bookstore Icon" />
			</div>
			<p class="col-lg-8 mx-auto fs-5 text-muted">Delete a book</p>
			<div class="container text-center">

			</div>
		</div>
	</div>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/script.js"></script>
</body>

</html>