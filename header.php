<?php
session_start();

if ($_SERVER['QUERY_STRING'] == 'noname') {
    // Null Coalescing
    unset($_SESSION['name']);
}


$name = $_SESSION['name'] ?? 'Guest';

// Get cookie
$gender = $_COOKIE['gender'] ?? 'Unknown';
?>

<head>
    <title>Pizza Guy</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .brand {
        background-color: orange !important;
        /* Modified: Changed background color to orange */
    }

    .brand-text {
        color: #cbb09c !important;
    }

    h4 {
        text-align: center;
        color: #333;
    }

    form {
        /* CSS styles for the form */
        background-color: #f5f7fa;
        padding: 20px;
        border: 1px solid #e1e8ed;
        border-radius: 4px;
        width: 300px;
        margin: 0 auto;
    }

    form label {
        /* CSS styles for form labels */
        font-size: 15px;
        font-weight: bold;
        color: #333;
    }

    form input[type="text"],
    form input[type="email"] {
        /* CSS styles for text and email inputs */
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
        color: #555;
    }

    form input[type="submit"] {
        /* CSS styles for submit button */
        text-align: center;
        background-color: #ff4081;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: block;
        margin: 0 auto;
        width: 150px;
        /* Adjust the width as needed */
    }

    form input[type="submit"]:hover {
        background-color: #ff6699;
    }

    .deletebtn {
        background-color: #ff0000;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

    .deletebtn:hover {
        background-color: #ff3333;
    }

    .error-heading {
        color: red;
    }

    .pizza {
        margin: 40px auto -30px;
        display: block;
        position: relative;
        top: -20px;
    }
    </style>
</head>

<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="div.container">
            <a href="#" class="brand-logo brand-text">Pizza Guy</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li class="grey-text">Hello <?php echo htmlspecialchars($name) ?></li>
                <li class="grey-text"> (<?php echo htmlspecialchars($gender) ?>)</li>
                <li><a href="#" class="btn brand z-depth-0">Add a Pizza</a></li>
                <!-- Modified: Fixed "add a pizza" button text and added link -->
            </ul>
        </div>
    </nav>