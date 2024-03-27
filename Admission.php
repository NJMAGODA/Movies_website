<?php
// Check if the Movies class exists
if (!class_exists('Movies')) {
    require_once 'Movies.php';
}

// Create a new instance of the Movies class
$movies = new Movies();

// Get the age from the query string
$age = isset($_GET['age']) ? intval($_GET['age']) : 0;

// Calculate the ticket price based on age
$ticketPrice = $movies->calculateTicketPrice($age);

// Output the ticket price
echo "Ticket Price: R " . $ticketPrice;
?>