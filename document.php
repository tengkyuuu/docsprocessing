<!DOCTYPE html>
<html lang="en">

 
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="shortcut icon" href="images/logo coe.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            --primary: antiquewhite;
            --secondary: orangered;
            --green: #82cd47;
            --secondary-light: rgba(34, 124, 112, 0.2);
            --secondary-light-2: rgba(127, 183, 126, 0.1);
            --white: #fff;
            --black: #393e46;

            --shadow: 0px 2px 8px 0px var(var(--secondary-light));
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            height: 100vh;
            width: 100%;
            background: antiquewhite;
        }
        .navbar {
            display: flex;
            align-items: center;
            height: 110px;
            background: linear-gradient(270deg, rgb(48, 48, 48), orangered);
            padding: 0 8%;
            justify-content:space-around ;
            padding: 20px;
        }
        .navbar img {
            width: 100px;
        }
        .navbar-logo {
            cursor: pointer;
        }
        .navbar-list {
            width: 100%;
            text-align: 2rem;
        }
        .navbar-list li {
            display: inline-block;
            margin: 0 1rem;
        }
        .navbar-list li a {
            font-size: 1rem;
            font-weight: 500;
            color: var(--black);
            text-decoration: none;
        }

        .profile-dropdown {
            position: relative;
            width: fit-content;
        }

        .profile-dropdown-btn {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-right: 1rem;
            font-size: 0.9rem;
            font-weight: 500;
            width: 150px;
            border-radius: 50px;
            color: var(--white);
            
            cursor: pointer;
            border: 1px solid var(--secondary);
            transition: box-shadow 0.2s ease-in, background-color 0.2s ease-in,
                border 0.3s;
        }

        .profile-dropdown-btn:hover {
            background-color: var(--secondary-light-2);
            box-shadow: var(--shadow);
        }

        .profile-img {
            position: relative;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            background: url(images/avatar.jpg);
            background-size: cover;
        }

        .profile-img i {
            position: absolute;
            right: 0;
            bottom: 0.3rem;
            font-size: 0.5rem;
            color: var(--green);
        }

        .profile-dropdown-btn span {
            margin: 0 0.5rem;
            margin-right: 1;
        }

        .profile-dropdown-list {
            position: absolute;
            top: 68px;
            width: 220px;
            right: 0;
            background-color: var(--white);
            border-radius: 10px;
            max-height: 0;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: max-height 0.5s;
        }

        .profile-dropdown-list hr {
            border: 0.5px solid var(--green);
        }

        .profile-dropdown-list.active {
            max-height: 500px;
        }

        .profile-dropdown-list-item {
            padding: 0.5rem 0rem 0.5rem 1rem;
            transition: background-color 0.2s ease-in, padding-left 0.2s;
        }

        .profile-dropdown-list-item a {
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--black);
        }

        .profile-dropdown-list-item a i {
            margin-right: 0.8rem;
            font-size: 1.1rem;
            width: 2.3rem;
            height: 2.3rem;
            background-color: var(--secondary);
            color: var(--white);
            line-height: 2.3rem;
            text-align: center;
            margin-right: 1rem;
            border-radius: 50%;
            transition: margin-right 0.3s;
        }

        .profile-dropdown-list-item:hover {
            padding-left: 1.5rem;
            background-color: var(--secondary-light);
        }
        .title {
            text-align: center;
            
        }
        .title h5 {
            position: relative;
            top: 10px;
        }
        .title h2 {
            font-size: xx-large;
        }
        .title a {
            color: black;
            text-decoration: none;
        }
        .side{
            position: sticky;
            top: 0;
            left: 0;
            bottom: 0;
            width: 280px;
            height: 110vh;
            background-color: #393e46;
        }
        .container{
            display: flex;
            width: 100%;
        }
        .sidebar{
            width: 80%;
            margin: 0 auto;
        }
        .side-logo{
            margin: 2rem 0 1rem 0;
            padding-bottom: 3rem;
            display: flex;
            align-items: center;
        }
        .side-logo img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .side-logo h1{
            margin-left: 1rem;
            text-transform: uppercase;
            color: aliceblue;
        }
        .sidebar ul{
            margin: 0 auto;
            text-decoration: none;
            width: 100%;
        }
        .sidebar li{
            padding-bottom: 2rem;
            list-style: none;
        }
        
        .sidebar li a{
            font-size: 16px;
            color: antiquewhite;
            text-decoration: none;
            
        }
        .sidebar ul li::after {
            content: '';
            width: 0%;
            height: 2px;
            background: black;
            display: block;
            margin: auto;
            transition: 0.3s;
            color: #393e46;
        }
        .sidebar ul li:not(.no-hover):hover::after {
            width: 90%;
        }
        .container nav i{
            width: 50px;
            font-size: 18px;
            text-align: center;
        }
        .logout{
            position: absolute;
            bottom: 20px;
        }
        .main {
            width: 100%;
        }
        .main-title {
            display: flex;
            margin: 20px;
            align-items: center;
        }
        .main-title h2 {
            margin-left: 10px;
        }
              
        .directory {
            margin-left: 50px;
            position: relative;
            bottom: 20px;
            font-size: small;
        }
        .directory a {
            text-decoration: none;
            color: black;
        }
        .directory a:hover {
            color: orangered;
        }
        table {
            margin-top: 30px;
            border-collapse: collapse;
            width: 100%;
            color: black;
            margin-left: auto;
            margin-right: auto;
        }  
        th, td {
            border:1px solid rgb(93, 95, 102);
            padding: 8px;
            text-align: left;
        }
        .button-bar {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            margin-bottom: 10px;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .main-content {
            margin: 7%;
        }
    </style>
</head>

<body>
    <section class="heading">
    <nav class="navbar">
        <img src="images/loginimg.png" alt="logo" class="logo">
        <div class="title">
            <a href="#"><h5>College of Engineering</h5></a>
            <a href="#"><h2>Document Tracking System</h2></a>
        </div>
        <div class="profile-dropdown">
            <div onclick="toggle()" class="profile-dropdown-btn">
                <div class="profile-img">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <span>
                    Jamis
                    <i class="fa-solid fa-angle-down"></i>
                </span>
            </div>
            <ul class="profile-dropdown-list">
                <li class="profile-dropdown-list-item">
                    <a href="#">
                        <i class="fa-regular fa-user"></i>
                        Edit Profile
                    </a>
                </li>
                <li class="profile-dropdown-list-item">
                    <a href="#">
                        <i class="fa-regular fa-sliders"></i>
                        Settings
                    </a>
                </li>
                <li class="profile-dropdown-list-item">
                    <a href="index.php">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        Log Out
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    </section>
    
    <section class="container">
        <nav class="side">
            <div class="sidebar">
                <div class="side-logo">
                <img src="images/avatar.jpg">
                <h1>admin</h1>
                </div>
                <ul>
                <li><a href="dashboardadmin.php">
                    <i class="fa-solid fa-gauge"></i>
                    <span class="nav-item">Dashboard</span>
                </a>
                </li>
                <li><a href="program.php">
                    <i class="fa-solid fa-gear"></i>
                    <span class="nav-item">Program</span>
                </a>
                </li>
                <li><a href="student.php">
                    <i class="fa-solid fa-user-graduate"></i>
                    <span class="nav-item">Student</span>
                </a>
                </li>
                <li><a href="document.php">
                    <i class="fa-solid fa-file"></i>
                    <span class="nav-item">Document</span>
                </a>
                </li>
                <li><a href="request.php">
                    <i class="fa-solid fa-bell"></i>
                    <span class="nav-item">Request</span>
                </a>
                </li>
                <li><a href="user.php">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-item">User</span>
                </a>
                </li>
                <li class="no-hover"><a href="#" class="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Logout</span>
                </a>
                </li>
                </ul>
            </div>
        </nav>

        <div class="main">
            <div class="main-title">
                <i class="fa-solid fa-gauge"></i>
                <h2>Student</h2>
            </div>
            <div class="directory">
                <p><a href="dashboardadmin.php">Dashboard</a> > <a href="student.php">Student</a></p>
            </div>
            <div class="main-content">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Document Name</th>
                                <th>Description</th>
                                <th>No. of Days to Process</th>
                                <th>Amount</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </section>
    
</body>
<script src="script.js"></script>
</html>