<?php
// Include your database connection file
include '../utils/config.php';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
}

// Get the id from the URL
$id = $_GET['id'];

// Prepare a SQL query to fetch the item with the given id
$query = 'SELECT * FROM reservasi WHERE id = ?';
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $id);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Fetch the data
$item = $result->fetch_assoc();

// Return the data as JSON
echo json_encode($item);
?>