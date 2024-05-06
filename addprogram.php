<?php
// Include your database connection file
include 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $programCode = $_POST['program-code'];
    $programName = $_POST['program-name'];

    // SQL query to insert program into database
    $sql = "INSERT INTO Programs (ProgramCode, ProgramName) VALUES ('$programCode', '$programName')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Program added successfully, redirect back to program.php
        header("Location: program.php");
        exit(); // Ensure script stops execution after redirection
    } else {
        // If an error occurred, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>