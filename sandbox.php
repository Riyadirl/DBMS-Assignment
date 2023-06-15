<?php

if (isset($_POST['submit'])) {
    session_start();

    //Cookies for gender
    setcookie('gender', $_POST['gender'], time() + 86400);

    $_SESSION['name'] = $_POST['name'];

    header('Location: index.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    /* Apply CSS to center the form and add colors */
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        text-align: center;
    }

    input[type="text"],
    input[type="submit"] {
        padding: 10px;
        border: none;
        background-color: #f2f2f2;
        color: #333;
        font-size: 16px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        cursor: pointer;
    }
    </style>
    <title>namebox</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="" name="name">
        <select name="gender">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>

</body>

</html>