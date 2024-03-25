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
		<link
			href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Rubik+Scribble&display=swap"
			rel="stylesheet" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
		<link href="styles.css" rel="stylesheet" />
		<script src="js/jquery-3.7.1.js"></script>
		<link rel="icon" type="image/x-icon" href="icons8-books-emoji-48.ico" />
		<title>Add Book - Bookstore</title>
	</head>

	<body class="bg-body-tertiary">
		<!-- Navigation Bar -->
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">Bookstore</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarCollapse"
					aria-controls="navbarCollapse"
					aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav me-auto mb-2 mb-md-0">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="index.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="add.php">Add</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="view.php">View</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="edit.php">Edit</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="delete.php">Delete</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Main -->
		<div class="container my-5">
			<div class="p-5 text-center bg-body-tertiary rounded-3">
				<div class="bi mt-4 mb-3" width="100" height="100">
					<img
						class="bookstore-main-icon"
						src="images/icons8-add-book-96.png"
						style="width: 64px; max-width: 96px"
						alt="Bookstore Icon" />
				</div>
				<p class="col-lg-8 mx-auto fs-5 text-muted">Create a book</p>
				<div class="container row g-3">
					<div style="text-align: left">
						<h4 class="mb-3">Enter book information</h4>
						<!-- Form -->
						<form action="add_book.php" method="post" class="needs-validation" novalidate>
							<div class="row g-3">
								<!-- Book ID -->
								<div class="col-sm-3">
									<label for="bookId" class="form-label">ID</label>
									<div class="input-group has-validation">
										<span class="input-group-text">#</span>
										<input
											type="number"
											style="text-align: right"
											class="form-control"
											id="bookId"
											name="bookId"
											placeholder="1001"
											value="<?php echo(getNextBookId()); ?>"
											required
											readonly />
										<div class="invalid-feedback">ID Number is required.</div>
									</div>
								</div>

								<!-- Book Title -->
								<div class="col-sm-9">
									<label for="bookTitle" class="form-label">Title</label>
									<input
										type="text"
										class="form-control"
										id="bookTitle"
										name="bookTitle"
										placeholder="The Life of John Doe"
										value
										required />
									<div class="invalid-feedback">
										Valid book title is required.
									</div>
								</div>

								<!-- Book Author -->
								<div class="col-12">
									<label for="bookAuthor" class="form-label">Author</label>
									<div class="input-group has-validation">
										<span class="input-group-text">
											<img
												src="images/icons8-author-32.png"
												style="
													max-height: 1.5rem;
													text-align: center;
													align-self: center;
												" />
										</span>
										<input
											type="text"
											class="form-control"
											id="bookAuthor"
											name="bookAuthor"
											placeholder="John Doe"
											required />
										<div class="invalid-feedback">Book author is required.</div>
									</div>
								</div>

								<!-- Year Publish -->
								<div class="col-sm-3">
									<label for="bookPublishedYear" class="form-label">Year</label>
									<input
										type="number"
										style="text-align: right"
										class="form-control"
										id="bookPublishedYear"
										name="bookPublishedYear"
										placeholder="Year"
										value="2024"
										required />
									<div class="invalid-feedback">
										Year of publication is required.
									</div>
								</div>

								<!-- Publisher -->
								<div class="col-sm-9">
									<label for="bookPublisher" class="form-label">Publisher</label>
									<input
										type="text"
										class="form-control"
										id="bookPublisher"
										name="bookPublisher"
										placeholder="Lemon Publishing House"
										value
										required />
									<div class="invalid-feedback">
										Valid publisher name is required.
									</div>
								</div>

								<!-- Price -->
								<div class="col-md-6">
									<label for="bookPrice" class="form-label">Price</label>
									<div class="input-group has-validation">
										<span class="input-group-text">$</span>
										<input
											type="number"
											class="form-control"
											id="bookPrice"
											name="bookPrice"
											placeholder="0.00"
											value
											step="0.50"
											min="0.00"
											required />
										<div class="invalid-feedback">Please enter price.</div>
									</div>
								</div>

								<!-- Quantity -->
								<div class="col-md-6">
									<label for="bookStockQuantity" class="form-label">Quantity</label>
									<input
										type="number"
										style="text-align: right"
										class="form-control"
										id="bookStockQuantity"
										name="bookStockQuantity"
										placeholder="0"
										value
										min="0"
										step="1"
										required />
									<div class="invalid-feedback">
										Please enter initial stock quantity for the book when added.
									</div>
								</div>
							</div>
							<hr class="my-4" />
							<button class="w-100 btn btn-primary btn-lg" type="submit">
								Add book
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
