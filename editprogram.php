<?php
// Include your database connection file
include 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve program code and name from the form
    $programCode = $_POST['edit-program-code'];
    $programName = $_POST['edit-program-name'];

    // SQL query to update program details in the database
    $sql = "UPDATE Programs SET ProgramName = '$programName' WHERE ProgramCode = '$programCode'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the page with a success message
        header("Location: program.php?edit=success");
        exit();
    } else {
        // Redirect back to the page with an error message
        header("Location: program.php?edit=error");
        exit();
    }
} else {
    // If the form is not submitted, redirect back to the page
    header("Location: program.php");
    exit();
}
$conn->close();
?>