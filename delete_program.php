<?php
// Include your database connection file
include 'config.php';

// Check if program code is provided in the URL
if (isset($_GET['code'])) {
    // Retrieve program code from the URL
    $programCode = $_GET['code'];

    // SQL query to delete the program from the database
    $sql = "DELETE FROM Programs WHERE ProgramCode = ?";

    // Prepare and bind parameter to avoid SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $programCode);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect back to the page with a success message
        header("Location: program.php?delete=success");
        exit();
    } else {
        // Redirect back to the page with an error message
        header("Location: program.php?delete=error");
        exit();
    }

    // Close the statement
    $stmt->close();
} else {
    // If program code is not provided in the URL, redirect back to the page
    header("Location: program.php");
    exit();
}

// Close database connection
$conn->close();
?>