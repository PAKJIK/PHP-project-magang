<?php
// Assuming $db is your database connection

// Check if id_barang is set in the GET request
if (isset($_GET['id_barang'])) {
    $id_barang = $db->real_escape_string($_GET['id_barang']);

    // Prepare the SQL query using a prepared statement
    $sql = "DELETE FROM barang WHERE id_barang=?";
    $stmt = $db->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id_barang); // Assuming id_barang is an integer
        if ($stmt->execute()) {
            echo "<script>alert('Barang deleted successfully.');window.location.href='index.php?page=pages/barang/index';</script>";
        } else {
            $error = "Error: " . $db->error;
            echo "<script>alert('$error');window.location.href='index.php?page=pages/barang/index';</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Failed to prepare the statement.');window.location.href='index.php?page=pages/barang/index';</script>";
    }
} else {
    echo "<script>alert('id_barang is missing.');window.location.href='index.php?page=pages/barang/index';</script>";
}
?>
