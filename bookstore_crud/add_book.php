<?php

require_once("config.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve the submitted values and store them in PHP variables
    $bookId = $_POST["bookId"];
    $bookTitle = $_POST["bookTitle"];
    $bookAuthor = $_POST["bookAuthor"];
    $bookPublishedYear = $_POST["bookPublishedYear"];
    $bookPublisher = $_POST["bookPublisher"];
    $bookPrice = $_POST["bookPrice"];
    $bookStockQuantity = $_POST["bookStockQuantity"];

    // content
    $heading = "Successfully added book!";
    $alertClass = "alert-success";
    $alertCat = "Your book is now available at the bookstore!";
} else {
    $bookId = "N/A";
    $bookTitle = "N/A";
    $bookAuthor = "N/A";
    $bookPublishedYear = "N/A";
    $bookPublisher = "N/A";
    $bookPrice = "N/A";
    $bookStockQuantity = "N/A";

    $heading = "Failed!";
    $alertClass = "alert-danger";
    $alertCat = "Error! Please try again!";
}
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
    <title>Add Book - Bookstore</title>
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
            <?php
            // perform mysqli query
            addBook($bookId, $bookTitle, $bookAuthor, $bookPublishedYear, $bookPublisher, $bookPrice, $bookStockQuantity);
            ?>
            <div class="bi mt-4 mb-3" width="100" height="100">
                <img class="bookstore-main-icon" src="images/icons8-add-book-96.png" style="width: 64px; max-width: 96px" alt="Bookstore Icon" />
            </div>
            <br />
            <div class="alert <?php echo ("$alertClass"); ?>" role="alert">
                <h4 class="h4 alert-heading">
                    <?php echo ("$heading"); ?>
                </h4>
                <div style="text-align: left;">
                    <p>Book Information:</p>
                    <div class="container-sm">
                        <div class="row mb-3">
                            <div class="col-4">
                                <p>ID: <span style="font-weight: bold;">
                                        <?php echo ("$bookId"); ?>
                                    </span></p>
                            </div>
                            <div class="col-8">
                                <p>Title: <span style="font-weight: bold;">
                                        <?php echo ("$bookTitle"); ?>
                                    </span></p>
                            </div>
                            <div class="col-12">
                                <p>Author: <span style="font-weight: bold;">
                                        <?php echo ("$bookAuthor"); ?>
                                    </span></p>
                            </div>
                            <div class="col-4">
                                <p>Year: <span style="font-weight: bold;">
                                        <?php echo ("$bookPublishedYear"); ?>
                                    </span></p>
                            </div>
                            <div class="col-8">
                                <p>Publisher: <span style="font-weight: bold;">
                                        <?php echo ("$bookPublisher"); ?>
                                    </span></p>
                            </div>
                            <div class="col-4">
                                <p>Price: <span style="font-weight: bold;">$<?php echo ("$bookPrice"); ?>
                                    </span></p>
                            </div>
                            <div class="col-4">
                                <p>Quantity: <span style="font-weight: bold;">
                                        <?php echo ("$bookStockQuantity"); ?>
                                    </span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <p class="mb-0">
                    <?php echo ("$alertCat"); ?>
                </p>

            </div>
            <div class="container row g-3">

            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>