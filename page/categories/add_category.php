<?php
session_start(); // Start the session

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoryName = $_POST['categoryName'];
    $categoryDate = $_POST['categoryDate'];

    // Initialize categories array in session if it doesn't exist
    if (!isset($_SESSION['categories'])) {
        $_SESSION['categories'] = [];
    }

    // Add new category to the session
    $_SESSION['categories'][] = [
        'id' => count($_SESSION['categories']) + 1, // Automatically incrementing ID
        'name' => $categoryName,
        'date' => $categoryDate,
    ];


    // Redirect to index.php
    header('Location: index.php');
    exit();
}
