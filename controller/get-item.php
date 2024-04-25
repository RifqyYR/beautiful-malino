<?php
    include '../utils/config.php';
    include '../utils/query.php';

    $conn = createConnection();
    if (!$conn) {
        die('Koneksi Gagal: ' . mysqli_connect_error());
    }

    $id = $_GET['id'];

    $stmt = $conn->prepare($read_one_query);
    $stmt->bind_param('i', $id);

    $stmt->execute();

    $result = $stmt->get_result();

    $item = $result->fetch_assoc();

    $conn->close();
    $stmt->close();
    
    echo json_encode($item);
?>