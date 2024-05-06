<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup as a Student</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="shortcut icon" href="images/logo coe.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        html {
            height: 100%;
            margin: 0;
            
            background: #18191A;
        }
        .form-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            max-width: 50%;
            width: 100%;
            background: whitesmoke;
            border: 2px solid #fff;
            border-radius: 20px;
            transform: translate(-50%, -50%);
            justify-content: center;
            align-self: center;
            box-shadow: 0 20px 35px rgba(0, 0.1, 0.9);
        }
        .form-popup .form-box {
            display: flex;
        }
        .form-box .form-details {
            max-width: 330px;
        }
        .form-box h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-box .form-content {
            width: 100%;
            padding: 35px;
        }
        .form-details img {
            width: 150px;
            margin-top: 50%;
            margin-bottom: 50%;
            margin-right: 20px;
            margin-left: 20px;
        }
        form .input-field {
            height: 50px;
            width: 100%;
            margin-top: 20px;
            position: relative;
        }
        form .input-field input {
            width: 100%;
            height: 100%;
            outline: none;
            padding-left: 0 15px;
            font-size: 0.95rem;
            border-radius: 3px;
            border: 1px solid #18191A;
        }
        form .input-field label {
            position: absolute;
            top: 50%;
            left: 15px;
            color: #18191A;
            pointer-events: none;
            transform: translateY(-50%);
            transition: 0.2s ease;
        }
        .input-field input:focus {
            border-color: 1px solid orange;
        }
        .input-field input:is(:focus, :valid) {
            padding: 16px 15px 0;
        }
        .input-field input:is(:focus, :valid) ~label {
            color: orangered;
            font-size: 0.75rem;
            transform: translateY(-120%);
        }
        .form-box a {
            color: orangered;
            text-decoration: none;
        }
        .form-box a:hover {
            text-decoration: underline;
        }
        form :where(.forgot-pass-link, .policy-text) {
            display: inline-flex;
            margin-top: 13px;
            font-size: 0.95rem;
        }
        form button {
            width: 100%;
            color: #fff;
            border: none;
            outline: none;
            padding: 14px 0;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 3px;
            cursor: pointer;
            margin: 25px 0;
            background: black;
            transition: 0.2s ease;
        }
        form button:hover {
            background: orangered;
        }
        .form-content .bottom-link {
            text-align: center;
        }
        .form-popup .signup,
        .form-popup.show-signup .login {
            display: none;
        }
        .form-popup.show-signup .signup {
            display: flex;
        }
        .other-options {
            text-align: center;
        }
        .input-field select {
            width: 100%;
            height: 100%;
            outline: none;
            padding-left: 15px;
            font-size: 0.95rem;
            border-radius: 3px;
            border: 1px solid #18191A;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/><path fill="none" d="M0 0h24v24H0z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 15px center;
        }
    </style>
</head>
<body>
    <div class="form-popup">
        <div class="form-box">
            <div class="form-details">
                <img src="images/loginimg.png">
            </div>
            <div class="form-content">
                <h2>STUDENT SIGNUP</h2>
                <form id="signup-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="input-field">
                        <input type="text" id="fname" name="fname" required>
                        <label for="fname">First Name</label>
                    </div>
                    <div class="input-field">
                        <input type="text" id="lname" name="lname" required>
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="input-field">
                        <input type="text" id="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field">
                        <select id="program" name="programID" required>
                            <option value="" disabled selected>Select Program</option>
                            <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "docstracking";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT programID, programName FROM programs";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row["programID"] . "'>" . $row["programName"] . "</option>";
                                    }
                                } else {
                                    echo "No programs found";
                                }

                                $conn->close();
                            ?>
                        </select>
                        <label for="program"></label>
                    </div>
                    <div class="input-field">
                        <input type="text" id="currentYear" name="currentYear" required>
                        <label for="currentYear">Current Year</label>
                    </div>
                    <button type="submit" name="submit">SIGNUP</button>
                </form>
                <div class="other-options">
                    <p>Already have an account? <a href="index.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'config.php';

        $fname = $lname = $email = $password = $programID = $currentYear = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $fname = trim($_POST["fname"]);
            $lname = trim($_POST["lname"]);
            $email = trim($_POST["email"]);
            $password = trim($_POST["password"]);
            $programID = trim($_POST["programID"]);
            $currentYear = trim($_POST["currentYear"]);

            // Insert into users table
            $sql_users = "INSERT INTO users (FirstName, LastName, Email, Password) VALUES (?, ?, ?, ?)";

            if ($stmt_users = $conn->prepare($sql_users)) {
                $stmt_users->bind_param("ssss", $param_fname, $param_lname, $param_email, $param_password);

                $param_fname = $fname;
                $param_lname = $lname;
                $param_email = $email;
                $param_password = password_hash($password, PASSWORD_DEFAULT);

                if ($stmt_users->execute()) {
                    // Retrieve the auto-generated user ID
                    $user_id = $stmt_users->insert_id;

                    // Insert into students table
                    $sql_students = "INSERT INTO students (userID, programID, currentYear) VALUES (?, ?, ?)";

                    if ($stmt_students = $conn->prepare($sql_students)) {
                        $stmt_students->bind_param("iis", $param_userID, $param_programID, $param_currentYear);

                        $param_userID = $user_id;
                        $param_programID = $programID;
                        $param_currentYear = $currentYear;

                        if ($stmt_students->execute()) {
                            header("location: login.php");
                            exit(); // Ensure no further code execution after redirection
                        } else {
                            echo "Something went wrong. Please try again later.";
                        }

                        $stmt_students->close();
                    }
                } else {
                    echo "Something went wrong. Please try again later.";
                }

                $stmt_users->close();
            }
        }
    ?>
</body>
</html>