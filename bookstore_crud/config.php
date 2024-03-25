<?php

// Function that returns mysqli_connect
function connectToMySQL()
{
    // database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore";
    // mysqli connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("<div class='alert alert-danger error-message'>" . `Connection failed: ` . $conn->connect_error . "</div>");
    }
    return $conn;
}

function closeConn($connClose)
{
    mysqli_close($connClose);
}

//
function addBook($id, $title, $author, $year, $publisher, $price, $quantity)
{
    $conn = connectToMySQL();
    $query = "INSERT INTO `books` (`book_id`, `book_title`, `book_author`, `book_publisher`, `book_publication_year`, `book_price`, `book_stock_quantity`)
             VALUES ('$id', '$title', '$author', '$publisher', '$year', $price, $quantity)";
    
    // perform
    try {
        $result = mysqli_query($conn, $query);
    } catch (Exception $err) {
        die("<div class='alert alert-danger error-message'>" . `Error executing the query: ` . $err . "</div>");
    }

    // Check for errors
    // if ($result === false) {
    //     throw new Exception(`Error executing the query: ` . mysqli_error($conn));
    // }

    // close
    closeConn($conn);
}

function getNextBookId()
{
    // Connect to the database
    $conn = connectToMySQL();

    // Prepare the SQL statement
    $query = "SELECT COALESCE(MAX(book_id), 1001) AS next_id FROM books";

    // Execute the statement
    $result = mysqli_query($conn, $query);

    // Check for errors
    if ($result === false) {
        throw new Exception("Error executing the query: " . mysqli_error($conn));
    }

    // Get the next `book_id` value
    $row = mysqli_fetch_assoc($result);
    $nextId = $row['next_id'];
    $nextId = (int)$nextId;
    $nextId++;

    // Close the connection
    closeConn($conn);

    // Return the next `book_id` value
    return $nextId;
}


?>