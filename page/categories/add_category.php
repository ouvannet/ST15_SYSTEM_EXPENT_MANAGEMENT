<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoryName = $_POST['categoryName'];
    $categoryDate = $_POST['categoryDate'];

    // Check if the session is working correctly
    if (!isset($_SESSION['categories'])) {
        $_SESSION['categories'] = [];
    }

    $categories = $_SESSION['categories'];

    $categories[] = [
        'id' => count($categories) + 1,
        'name' => $categoryName,
        'date' => $categoryDate,
    ];

    $_SESSION['categories'] = $categories;

    echo "Category added successfully!";
    
    // Redirect
    header('Location: categories.php');
    exit();
} else {
    echo "Invalid request method.";
}
